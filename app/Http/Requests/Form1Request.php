<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form1Request extends FormRequest
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
            'nama_responden' => 'required|string|min:3',
            'jenis_pelayanan' => 'required',
            'tanggal_survey' => 'required|date',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|string',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'suku_bangsa' => 'required',
        ];
    }
}
