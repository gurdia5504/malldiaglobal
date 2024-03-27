<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:66',
            'password' => 'required|string|min:8|max:100',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => __('E-posta adresi alanı boş bırakılamaz!'),
            'email.email' => __('E-posta adresi alanı geçersiz bir e-posta adresi formatı içermektedir!'),
            'email.max' => __('E-posta adresi alanı en fazla :max karakter uzunluğunda olabilir!'),
            'password.required' => __('Şifre alanı boş bırakılamaz!'),
            'password.string' => __('Şifre alanı geçersiz bir şifre formatı içermektedir!'),
            'password.min' => __('Şifre alanı en az :min karakter uzunluğunda olabilir!'),
            'password.max' => __('Şifre alanı en fazla :max karakter uzunluğunda olabilir!'),
        ];
    }
}
