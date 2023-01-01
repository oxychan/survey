<?php

namespace App\Exports;

use App\Models\Survey;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SurveyExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Survey::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'nama_responden',
            'jenis_pelayanan',
            'tanggal_survey',
            'umur',
            'jenis_kelamin',
            'pendidikan_terakhir',
            'pekerjaan',
            'suku_bangsa',
            'kesesuaian_persyaratan_jns_pelayanan',
            'harapan_kesesuaian_persyaratan_jns_pelayanan',
            'kemudahan_prosedur_pelayanan',
            'harapan_kemudahan_prosedur_pelayanan',
            'kecepatan_waktu_pelayanan',
            'harapan_kecepatan_waktu_pelayanan',
            'kewajaran_biaya_pelayanan',
            'harapan_kewajaran_biaya_pelayanan',
            'kesesuaian_produk_pelayanan',
            'harapan_kesesuaian_produk_pelayanan',
            'kemampuan_petugas_pelayanan',
            'harapan_kemampuan_petugas_pelayanan',
            'perilaku_petugas_pelayanan',
            'harapan_perilaku_petugas_pelayanan',
            'kualitas_sarpras',
            'harapan_kualitas_sarpras',
            'penanganan_pengaduan_pengguna',
            'harapan_penanganan_pengaduan_pengguna',
            'saran',
            'created_at',
            'updated_at'
        ];
    }
}
