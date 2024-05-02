<?php

namespace App\Http\Requests;

use App\Models\CommonLetterLog;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class StoreLetterLogRequest extends FormRequest
{
    private $commonLetterLog;
    private $ruleFile;

    public function __construct(Request $request)
    {
        // ambil data common letter log
        $splitPath = explode("/", $request->path());
        $commonLogId = $splitPath[1];
        // $commonLogId = $splitPath[2]; // TODO TEST: ini digunakan untuk test saja, index 2 karna tes pakai api
        $this->commonLetterLog = CommonLetterLog::find($commonLogId);

        $rule = config(sprintf("central.letter_types.%s", $this->commonLetterLog->type))["rule"];
        $this->ruleFile = config(sprintf("letter_rules.%s", $rule));
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return auth()->user()->hasPermissionTo("letters_manage");
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $data = [];
        $validateObject = [
            "layer2" => [],
            "layer3" => [],
        ];
        $validateArray = [
            "layer2" => [],
            "layer3" => [],
        ];

        /**
         * LAYER 1
         */
        foreach($this->ruleFile["data"] as $key => $attributes) {
            $data[$key] = $attributes["validate"];

            // prepare untuk validate layer 2
            if($attributes["cast"] === "object") {
                $validateObject["layer2"][$key] = $attributes;
            }
            else if($attributes["cast"] === "array" && array_key_exists("items", $attributes)){
                $validateArray["layer2"][$key] = $attributes;
            }
        }

        /**
         * LAYER 2: object
         */
        foreach($validateObject["layer2"] as $key1 => $attributes1) {
            foreach($attributes1["items"] as $key2 => $attributes2) {
                $data[sprintf("%s.%s", $key1, $key2)] = $attributes2["validate"];

                // prepare untuk casting layer 3
                if($attributes2["cast"] === "object" && array_key_exists("items", $attributes2)) {
                    $validateObject["layer3"][$key1][$key2] = $attributes2;
                }
                else if($attributes2["cast"] === "array" && array_key_exists("items", $attributes2)) {
                    $validateArray["layer3"][$key1][$key2] = $attributes2;
                }
            }
        }

        /**
         * LAYER 2: array of object
         * array 2 dimensi
         */
        foreach($validateArray["layer2"] as $key1 => $attributes1) {
            foreach($attributes1["items"] as $key2 => $attributes2) {
                $data[sprintf("%s.*.%s", $key1, $key2)] = $attributes2["validate"];
            }
        }

        /**
         * LAYER 3: object
         */
        foreach($validateObject["layer3"] as $key1 => $attributes1) {
            foreach($attributes1 as $key2 => $attributes2) {
                foreach($attributes2["items"] as $key3 => $attributes3) {
                    $data[sprintf("%s.%s.%s", $key1, $key2, $key3)] = $attributes3["validate"];
                }
            }
        }

        /**
         * LAYER 3: array of object
         * array 3 dimensi
         */
        foreach($validateArray["layer3"] as $key1 => $attributes1) {
            foreach($attributes1 as $key2 => $attributes2) {
                foreach($attributes2["items"] as $key3 => $attributes3) {
                    $data[sprintf("%s.%s.*.%s", $key1, $key2, $key3)] = $attributes3["validate"];
                }
            }
        }

        return $data;
    }

    public function attributes()
    {
        $data = [];
        foreach($this->ruleFile["errorKey"] as $key => $value) {
            $data[$key] = $value;
        }

        return $data;
    }

    // TODO TEST: ini digunakan untuk tes saja, nanti jangan lupa dihapus/comment
    // public function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json([
    //         'status' => 'failed',
    //         'message' => 'Validasi gagal',
    //         'errors' => $validator->errors(),
    //     ], 400));
    // }
}
