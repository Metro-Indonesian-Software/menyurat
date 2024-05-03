<?php

namespace App\Helpers;

use App\Models\CommonLetterLog;
use Illuminate\Http\Response;
use stdClass;

class ConverterLetterLog {
    protected static function castType($data, $type) {
        switch ($type) {
            case 'string':
                if(is_array($data)) {
                    return (string) $data[0];
                }
                return (string) $data;

            case 'boolean':
                return boolval($data);

            case 'integer':
                return intval($data);

            case 'double':
                return number_format(doubleval($data), 2);

            case 'float':
                return number_format(floatval($data), 2);

            case 'date':
                return date("Y-m-d", strtotime($data));

            case 'time':
                return date("H:i:s", strtotime($data));

            case 'datetime':
                return date("Y-m-d H:i:s", strtotime($data));

            default:
                return $data;
        }
    }

    protected static function castGetArray($data, $type) {
        switch ($type) {
            case 'array':
                if($data === null) {
                    return [];
                }
                return json_decode($data);

            case 'object':
                if($data === null) {
                    return [];
                }
                return json_decode($data, true);

            default:
                return $data;
        }
    }

    public static function getCheckType($data, $type) {
        if ($data instanceof stdClass) {
            return json_decode(json_encode($data), true);
        }
        else if(!is_array($data) && ($type === "array" || $type === "object")) {
            return self::castGetArray($data, $type);
        }
        else if(gettype($data) !== $type && $data !== null) {
            return self::castType($data, $type);
        }

        return $data;
    }

    public static function setCheckType($data, $type) {
        if($type === "array" || $type === "object") {
            if($data === null) {
                return json_encode([]);
            }
            return json_encode($data);
        }
        else if(gettype($data) !== $type && $data !== null) {
            return self::castType($data, $type);
        }

        return $data;
    }

    public static function getLetterLog(CommonLetterLog $commonLog, array $logs) {
        $rule = config(sprintf("central.letter_types.%s", $commonLog->type))["rule"];
        $ruleFile = config(sprintf("letter_rules.%s", $rule));
        $data = [];
        $ruleObject = [
            "layer2" => [],
            "layer3" => [],
        ];
        $ruleArray = [
            "layer2" => [],
            "layer3" => [],
        ];

        /**
         * LAYER 1
         */
        foreach($ruleFile["data"] as $key => $attributes) {
            // tambahkan casting dan ambil data
            $firstLog = array_values(
                array_filter($logs, function($value, $index) use($key) {
                    return $value["field_name"] === $key;
                }, ARRAY_FILTER_USE_BOTH)
            )[0] ?? [];
            $data[$key] = self::getCheckType($firstLog["field_value"] ?? null, $attributes["cast"]);

            // prepare untuk casting layer 2
            if($attributes["cast"] === "object"  && array_key_exists("items", $attributes)) {
                $ruleObject["layer2"][$key] = $attributes;
            }
            else if($attributes["cast"] === "array" && array_key_exists("items", $attributes)){
                $ruleArray["layer2"][$key] = $attributes;
            }
        }

        /**
         * LAYER 2: object
         */
        foreach($ruleObject["layer2"] as $key1 => $attributes1) {
            foreach($attributes1["items"] as $key2 => $attributes2) {
                // casting data
                $data[$key1][$key2] = self::getCheckType($data[$key1][$key2] ?? null, $attributes2["cast"]);

                // prepare untuk casting layer 3
                if($attributes2["cast"] === "object" && array_key_exists("items", $attributes2)) {
                    $ruleObject["layer3"][$key1][$key2] = $attributes2;
                }
                else if($attributes2["cast"] === "array" && array_key_exists("items", $attributes2)) {
                    $ruleArray["layer3"][$key1][$key2] = $attributes2;
                }
            }
        }

        /**
         * LAYER 2: array of object
         * array 2 dimensi
         */
        foreach($ruleArray["layer2"] as $key1 => $attributes1) {
            foreach($data[$key1] as $index => $value) {
                // casting data
                $value = self::getCheckType($value ?? null, $attributes1["cast"]);
                $data[$key1][$index] = $value;

                foreach($attributes1["items"] as $key2 => $attributes2) {
                    // casting data
                    $data[$key1][$index][$key2] = self::getCheckType($value[$key2] ?? null, $attributes2["cast"]);
                }
            }
        }

        /**
         * LAYER 3: object
         */
        foreach($ruleObject["layer3"] as $key1 => $attributes1) {
            foreach($attributes1 as $key2 => $attributes2) {
                foreach($attributes2["items"] as $key3 => $attributes3) {
                    // casting data
                    $data[$key1][$key2][$key3] = self::getCheckType($data[$key1][$key2][$key3] ?? null, $attributes3["cast"]);
                }
            }
        }

        /**
         * LAYER 3: array of object
         * array 3 dimensi
         */
        foreach($ruleArray["layer3"] as $key1 => $attributes1) {
            foreach($attributes1 as $key2 => $attributes2) {
                foreach($data[$key1][$key2] as $index => $value) {
                    // casting data
                    $value = self::getCheckType($value ?? null, $attributes2["cast"]);
                    $data[$key1][$key2][$index] = $value;

                    foreach($attributes2["items"] as $key3 => $attributes3) {
                        // casting data
                        $data[$key1][$key2][$index][$key3] = self::getCheckType($value[$key3] ?? null, $attributes3["cast"]);
                    }
                }
            }
        }

        return $data;
    }

    public static function setLetterLog(CommonLetterLog $commonLog, array $request) {
        $rule = config(sprintf("central.letter_types.%s", $commonLog->type))["rule"];
        $ruleFile = config(sprintf("letter_rules.%s", $rule));
        $data = [];

        // Filter request data dengan rule
        foreach($request as $index => $value) {
            $object = [];
            if(array_key_exists($index, $ruleFile["data"])) {
                $object["field_name"] = $index;
                $object["field_value"] = self::setCheckType($value, $ruleFile["data"][$index]["cast"]);
                $object["common_letter_log_id"] = $commonLog->id;
                array_push($data, $object);
            }
        }

        return $data;
    }
}
