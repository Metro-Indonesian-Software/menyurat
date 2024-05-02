<?php

namespace App\Observers;

use App\Helpers\ConverterLetterLog;
use App\Models\CommonLetterLog;
use App\Models\LetterLog;

class CommonLetterLogObserver
{
    /**
     * Handle the CommonLetterLog "created" event.
     */
    public function created(CommonLetterLog $commonLetterLog): void
    {
        $rule = config(sprintf("central.letter_types.%s", $commonLetterLog->type))["rule"];
        $ruleFile = config(sprintf("letter_rules.%s", $rule));

        foreach($ruleFile["data"] as $key => $attributes) {
            // definisikan data
            $logs = new LetterLog;
            $logs["common_letter_log_id"] = $commonLetterLog->id;
            $logs["field_name"] = $key;

            // cek apakah ada default value atau tidak
            if(array_key_exists("defaultValue", $ruleFile) && array_key_exists($key, $ruleFile["defaultValue"])) {
                // tambahkan tambahkan casting data dan nilai default data
                $logs["field_value"] = ConverterLetterLog::setCheckType($ruleFile["defaultValue"][$key], $attributes["cast"]);
            }

            $logs->save();
        }
    }
}
