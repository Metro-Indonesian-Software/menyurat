<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class StoreUserRequest extends FormRequest
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
            "name" => ["required", "string"],
            "email" => ["required", "email", "unique:users,email"],
        ];
    }

    public function attributes(): array
    {
        return [
            "name" => "Nama",
            "email" => "Email",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        return request()->wantsJson()
                    ? new JsonResponse([], 204)
                    : back()->with("error", "Data tidak valid");
    }
}
