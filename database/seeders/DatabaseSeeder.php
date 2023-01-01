<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123')
        ]);

        Survey::create([
            'nama_responden' => 'iya',
            'jenis_pelayanan' => 'test',
            'tanggal_survey' => '2022-01-01',
            'umur' => 12,
            'jenis_kelamin' => 'sdfs',
            'pendidikan_terakhir' => 'sdf',
            'pekerjaan' => 'sdf',
            'suku_bangsa' => 'sdf',
            'kesesuaian_persyaratan_jns_pelayanan' => 'sdf',
            'harapan_kesesuaian_persyaratan_jns_pelayanan' => 1,
            'kemudahan_prosedur_pelayanan' => 'test',
            'harapan_kemudahan_prosedur_pelayanan' => 1,
            'kecepatan_waktu_pelayanan' => 'test',
            'harapan_kecepatan_waktu_pelayanan' => 1,
            'kewajaran_biaya_pelayanan' => 'test',
            'harapan_kewajaran_biaya_pelayanan' => 1,
            'kesesuaian_produk_pelayanan' => 'test',
            'harapan_kesesuaian_produk_pelayanan' => 1,
            'kemampuan_petugas_pelayanan' => 'test',
            'harapan_kemampuan_petugas_pelayanan' => 1,
            'perilaku_petugas_pelayanan' => 'test',
            'harapan_perilaku_petugas_pelayanan' => 1,
            'kualitas_sarpras' => 'test',
            'harapan_kualitas_sarpras' => 1,
            'penanganan_pengaduan_pengguna' => 'test',
            'harapan_penanganan_pengaduan_pengguna' => 1,
            'saran' => 'test',
        ]);
    }
}
