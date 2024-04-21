<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "current_password" => ["required", "string"],
            "new_password" => ["required", "string", Password::min(8)->letters()->numbers()->symbols()->mixedCase()],
            "new_password_confirmation" => ["required", "string", "same:new_password"],
        ];
    }

    public function attributes()
    {
        return [
            "current_password" => "Password lama",
            "new_password" => "Password baru",
            "new_password_confirmation" => "Konfirmasi password baru",
        ];
    }
}
