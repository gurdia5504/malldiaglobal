<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\ImageEnum;

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
     * @return array<string, array|string>
     */
    public function rules(): array
    {
        $reqIfCorp = 'required_if:register_type,corporate|';
        return [
            // avatar add |image attr
            'avatar' => 'nullable|mimes:'.ImageEnum::getImplodeKeys().'|max:'.ImageEnum::MAX_SIZE,
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'register_type' => 'required|string|in:individual,corporate',
            'tc_vkn' => 'required_if:register_type,individual|string|max:11|unique:users,tc_vkn',
            'company_type' => $reqIfCorp.'string|max:255',
            'trade_name' => $reqIfCorp.'string|max:255',
            'taxe_admin' => $reqIfCorp.'string|max:255',
            'taxe_number' => $reqIfCorp.'string|max:255',
            'mersis_no' => $reqIfCorp.'string|max:255',
            'registration_number' => $reqIfCorp.'string|max:255',
            'regions' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'fx_rate' => 'required|numeric',
            'bank_name' => 'required|string|max:255',
            'iban' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'address' => 'required|string|max:255',
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
            'avatar.required' => __('Lütfen bir resim seçiniz!'),
            'avatar.mimes' => __('Lütfen sadece :values uzantılı dosyaları seçiniz!'),
            'avatar.max' => __('Lütfen :max kb\'dan küçük dosyaları seçiniz!'),
            'password.confirmed' => __('şifre alanı ile şifre tekrarı alanı eşleşmiyor!'),
            'password_confirmation.same' => __('şifre tekrarı alanı ile şifre alanı eşleşmiyor!'),
            '*.required' => __('Lütfen :attribute alanını doldurunuz!'),
            '*.string' => __(':attribute alanına metinsel bir değer giriniz!'),
            '*.max' => __(':attribute alanına en fazla :max karakter uzunluğunda bir değer giriniz!'),
            '*.min' => __(':attribute alanına en az :min karakter uzunluğunda bir değer giriniz!'),
            '*.email' => __('Bu :attribute alanına geçerli bir e-posta adresi giriniz!'),
            '*.unique' => __('Bu :attribute değeri zaten kullanılmış, lütfen farklı bir değer giriniz!'),
            '*.in' => __('Bu :attribute alanına sadece belirtilen değerlerden birini giriniz!'),
            '*.numeric' => __('Bu :attribute alanına sadece sayısal bir değer giriniz!'),
            '*.mimes' => __('Bu :attribute alanına sadece :values uzantılı dosyaları yükleyebilirsiniz!'),
            '*.required_if' => __('Bu :attribute alanını doldurmak zorundasınız!'),
        ];
    }

    /**
     * Get the attributes names for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'avatar' => __('avatar'),
            'first_name' => __('ad'),
            'last_name' => __('soyad'),
            'email' => __('e-posta adresi'),
            'password' => __('şifre'),
            'password_confirmation' => __('şifre tekrarı'),
            'registration_type' => __('kayıt türü'),
            'tc_vkn' => __('TC Kimlik No / VKN'),
            'company_type' => __('şirket türü'),
            'trade_name' => __('ticaret unvanı'),
            'taxe_admin' => __('vergi dairesi'),
            'taxe_number' => __('vergi numarası'),
            'mersis_no' => __('mersis numarası'),
            'registration_number' => __('sicil numarası'),
            'region' => __('bölge'),
            'country' => __('ülke'),
            'city' => __('şehir'),
            'phone' => __('telefon'),
            'fx_rate' => __('döviz kuru'),
            'bank_name' => __('banka adı'),
            'iban' => __('iban'),
            'category' => __('kategori'),
            'address' => __('adres'),
        ];
    }
}
