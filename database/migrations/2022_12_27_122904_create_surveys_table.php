<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('nama_responden');
            $table->string('jenis_pelayanan');
            $table->date('tanggal_survey');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('suku_bangsa');
            $table->string('kesesuaian_persyaratan_jns_pelayanan');
            $table->integer('harapan_kesesuaian_persyaratan_jns_pelayanan');
            $table->string('kemudahan_prosedur_pelayanan');
            $table->integer('harapan_kemudahan_prosedur_pelayanan');
            $table->string('kecepatan_waktu_pelayanan');
            $table->integer('harapan_kecepatan_waktu_pelayanan');
            $table->string('kewajaran_biaya_pelayanan');
            $table->integer('harapan_kewajaran_biaya_pelayanan');
            $table->string('kesesuaian_produk_pelayanan');
            $table->integer('harapan_kesesuaian_produk_pelayanan');
            $table->string('kemampuan_petugas_pelayanan');
            $table->integer('harapan_kemampuan_petugas_pelayanan');
            $table->string('perilaku_petugas_pelayanan');
            $table->integer('harapan_perilaku_petugas_pelayanan');
            $table->string('kualitas_sarpras');
            $table->integer('harapan_kualitas_sarpras');
            $table->string('penanganan_pengaduan_pengguna');
            $table->integer('harapan_penanganan_pengaduan_pengguna');
            $table->text('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
};
