<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form3Request extends FormRequest
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
            'kemampuan_petugas_pelayanan' => 'required',
            'harapan_kemampuan_petugas_pelayanan' => 'required',
            'perilaku_petugas_pelayanan' => 'required',
            'harapan_perilaku_petugas_pelayanan' => 'required',
            'kualitas_sarpras' => 'required',
            'harapan_kualitas_sarpras' => 'required',
            'penanganan_pengaduan_pengguna' => 'required',
            'harapan_penanganan_pengaduan_pengguna' => 'required',
        ];
    }
}
