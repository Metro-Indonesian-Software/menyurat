<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class StoreCommonLogSlugRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->hasPermissionTo("letters_manage");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => ["required", "string"],
        ];
    }

    public function attributes(): array
    {
        return [
            "title" => "Judul surat",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        return request()->wantsJson()
                    ? new JsonResponse([], 204)
                    : back()->with("error", "Judul surat tidak boleh kosong");
    }
}
