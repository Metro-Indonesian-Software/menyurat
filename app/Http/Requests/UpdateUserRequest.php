<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "logo" => ["required", "file", "image", "max:2048"],
            "name" => ["required", "string"],
            "address" => ["required", "string"],
            "email" => ["required", "email", "unique:users,email,".auth()->user()->id.",id"],
            "phone_number" => ["required", "min:10", "max:13", "regex:/[0]{1}[8]{1}[0-9]{0,11}/"],
            "web_url" => ["string", "url", "nullable"],
            "postal_code" => ["required", "integer"],
        ];
    }

    public function messages()
    {
        return [
            "phone_number.regex" => ":attribute tidak valid (format: 08xx)"
        ];
    }

    public function attributes(): array
    {
        return [
            "logo" => "Logo",
            "name" => "Nama",
            "address" => "Alamat",
            "email" => "Email",
            "phone_number" => "Nomor telpon",
            "web_url" => "Tautan website",
            "postal_code" => "Kode pos",
        ];
    }
}
