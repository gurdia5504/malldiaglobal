<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WalletRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $unique = $this->method() === 'PUT' || $this->method() === 'PATCH' ? '' : '|unique:wallet_costsheets,code';
        return [
            'code' => 'required|string'.$unique,
            'period_status' => 'required|boolean',
            'car_period' => 'nullable|date',
            'date_order' => 'nullable|date',
            'product_name' => 'nullable|string',
            'product_sku' => 'nullable|numeric',
            'product_bare_code_type' => 'nullable|string',
            'product_bare_code' => 'nullable|numeric',
            'region' => 'required|string',
            'country' => 'required|string',
            'Vendor' => 'required|string',
            'seller_name_last_name' => 'nullable|string',
            'doviz_cinsi' => 'nullable|numeric',
            'total_sales_price' => 'nullable|numeric',
            'product_cost' => 'nullable|numeric',
            'product_cost_tax_rate' => 'nullable|numeric',
            'product_cost_tax' => 'nullable|numeric',
            'product_cost_+_tax' => 'nullable|numeric',
            'product_saller_price' => 'nullable|numeric',
            'cargo_fee' => 'nullable|numeric',
            'cargo_vergi_orani' => 'nullable|numeric',
            'cargo_tax' => 'nullable|numeric',
            'cargo_fee_+_tax' => 'nullable|numeric',
            'product_karari_+_tax' => 'nullable|numeric',
            'product_tax' => 'nullable|numeric',
            'net_satis_kari' => 'nullable|numeric',
            'transfert_tax_rate' => 'nullable|numeric',
            'transfert_fee' => 'nullable|numeric',
            'company_pay' => 'nullable|numeric',
            'company_odenen' => 'nullable|numeric',
            'pool_pay' => 'nullable|numeric',
            'pool_odenen' => 'nullable|string',
            'wallet_seller_kari' => 'nullable|string',
            'wallet_seller_pay' => 'nullable|numeric',
            'return_status' => 'required|boolean',
            'user_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => __('Bu alan zorunludur.'),
            '*.string' => __('Bu alan metin tipinde olmalıdır.'),
            '*.numeric' => __('Bu alan sayı tipinde olmalıdır.'),
            '*.boolean' => __('Bu alan doğru/yanlış tipinde olmalıdır.'),
            '*.date' => __('Bu alan tarih tipinde olmalıdır.'),
            '*.unique' => __('Bu alan benzersiz olmalıdır.'),
        ];
    }

    public function attributes()
    {
        return [
            'code' => __('Kod'),
            'period_status' => __('Dönem Durumu'),
            'car_period' => __('Ara Dönem'),
            'date_order' => __('Sipariş Tarihi'),
            'product_name' => __('Ürün Adı'),
            'product_sku' => __('Ürün SKU'),
            'product_bare_code_type' => __('Ürün Barkod Tipi'),
            'product_bare_code' => __('Ürün Barkodu'),
            'region' => __('Bölge'),
            'country' => __('Ülke'),
            'Vendor' => __('Satıcı'),
            'seller_name_last_name' => __('Satıcı Adı Soyadı'),
            'doviz_cinsi' => __('Döviz Cinsi'),
            'total_sales_price' => __('Toplam Satış Fiyatı'),
            'product_cost' => __('Ürün Maliyeti'),
            'product_cost_tax_rate' => __('Ürün Maliyet Vergi Oranı'),
            'product_cost_tax' => __('Ürün Maliyet Vergisi'),
            'product_cost_+_tax' => __('Ürün Maliyet + Vergi'),
            'cargo_fee' => __('Kargo Ücreti'),
            'cargo_vergi_orani' => __('Kargo Vergi Oranı'),
            'cargo_tax' => __('Kargo Vergisi'),
            'cargo_fee_+_tax' => __('Kargo Ücreti + Vergi'),
            'product_karari_+_tax' => __('Ürün Kararı + Vergi'),
            'product_tax' => __('Ürün Vergisi'),
            'net_satis_kari' => __('Net Satış Karı'),
            'transfert_tax_rate' => __('Transfer Vergi Oranı'),
            'transfert_fee' => __('Transfer Ücreti'),
            'company_pay' => __('Şirket Ödeme'),
            'company_odenen' => __('Şirket Ödenen'),
            'pool_pay' => __('Havuz Ödeme'),
            'pool_odenen' => __('Havuz Ödenen'),
            'wallet_seller_kari' => __('Cüzdan Satıcı Karı'),
            'wallet_seller_pay' => __('Cüzdan Satıcı Ödeme'),
            'return_status' => __('İade Durumu'),
            'user_id' => __('Kullanıcı ID'),
        ];
    }
}
