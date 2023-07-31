<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\UserRolesEnum;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "full_name" => "required|max:100",
            "username" => "required|min:5|max:25",
            "password" => "required|confirmed|min:8|max:20",
            "department" => [new Enum(UserRolesEnum::class), "required"]
        ];
    }

    public function messages(): array {
        return [
            "full_name.required" => "nama lengkap tidak boleh kosong",
            "full_name.max" => "harus kurang dari 100 karakter",
            "username.required" => "username tidak boleh kosong",
            "username.min" => "harus lebih dari 5 karakter",
            "username.max" => "harus kurang dari 25 karakter",
            "password.required" => "password tidak boleh kosong",
            "password.confirmed" => "password tidak cocok",
            "departement.required" => "departement tidak boleh kosong",
            "departement.enum" => "departement tidak valid",
        ];
    }
}
