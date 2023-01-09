<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form2Request extends FormRequest
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
        return [
            'kesesuaian_persyaratan_jns_pelayanan' => 'required',
            'harapan_kesesuaian_persyaratan_jns_pelayanan' => 'required',
            'kemudahan_prosedur_pelayanan' => 'required',
            'harapan_kemudahan_prosedur_pelayanan' => 'required',
            'kecepatan_waktu_pelayanan' => 'required',
            'harapan_kecepatan_waktu_pelayanan' => 'required',
            'kewajaran_biaya_pelayanan' => 'required',
            'harapan_kewajaran_biaya_pelayanan' => 'required',
            'kesesuaian_produk_pelayanan' => 'required',
            'harapan_kesesuaian_produk_pelayanan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kesesuaian_persyaratan_jns_pelayanan.required' => 'Tidak boleh kosong.',
            'harapan_kesesuaian_persyaratan_jns_pelayanan.required' => 'Tidak boleh kosong.',
            'kemudahan_prosedur_pelayanan.required' => 'Tidak boleh kosong.',
            'harapan_kemudahan_prosedur_pelayanan.required' => 'Tidak boleh kosong.',
            'kecepatan_waktu_pelayanan.required' => 'Tidak boleh kosong.',
            'harapan_kecepatan_waktu_pelayanan.required' => 'Tidak boleh kosong.',
            'kewajaran_biaya_pelayanan.required' => 'Tidak boleh kosong.',
            'harapan_kewajaran_biaya_pelayanan.required' => 'Tidak boleh kosong.',
            'kesesuaian_produk_pelayanan.required' => 'Tidak boleh kosong.',
            'harapan_kesesuaian_produk_pelayanan.required' => 'Tidak boleh kosong.',
        ];
    }
}
