@extends('user.partials.main_layout')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">Form - 2/4</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('survey.step.two') }}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="kesesuaian_persyaratan_jns_pelayanan">Bagaimana
                                    Pendapat Saudara
                                    tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_persyaratan_jns_pelayanan'
                                        class="form-check-input" value='Tidak Sesuai' id="kjp1"
                                        {{ old('kesesuaian_persyaratan_jns_pelayanan') == 'Tidak Sesuai' || ($survey != null && $survey->kesesuaian_persyaratan_jns_pelayanan == 'Tidak Sesuai') ? 'checked' : '' }} />
                                    <label class="form-label" for="kjp1">Tidak Sesuai</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_persyaratan_jns_pelayanan'
                                        class="form-check-input" value='Kurang Sesuai' id="kjp2"
                                        {{ old('kesesuaian_persyaratan_jns_pelayanan') == 'Kurang Sesuai' || ($survey != null && $survey->kesesuaian_persyaratan_jns_pelayanan == 'Kurang Sesuai') ? 'checked' : '' }} />
                                    <label class="form-label" for="kjp2">Kurang Sesuai</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_persyaratan_jns_pelayanan'
                                        class="form-check-input" value='Sesuai' id="kjp3"
                                        {{ old('kesesuaian_persyaratan_jns_pelayanan') == 'Sesuai' || ($survey != null && $survey->kesesuaian_persyaratan_jns_pelayanan == 'Sesuai') ? 'checked' : '' }} />
                                    <label class="form-label" for="kjp3">Sesuai</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_persyaratan_jns_pelayanan'
                                        class="form-check-input" value='Sangat Sesuai' id="kjp4"
                                        {{ old('kesesuaian_persyaratan_jns_pelayanan') == 'Sangat Sesuai' || ($survey != null && $survey->kesesuaian_persyaratan_jns_pelayanan == 'Sangat Sesuai') ? 'checked' : '' }} />
                                    <label class="form-label" for="kjp4">Sangat Sesuai</label>
                                </div>

                                @error('kesesuaian_persyaratan_jns_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_kesesuaian_persyaratan_jns_pelayanan"
                                    class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label"
                                            for="harapan_kesesuaian_persyaratan_jns_pelayanan1">1</label>
                                        <input type='radio' name='harapan_kesesuaian_persyaratan_jns_pelayanan'
                                            class="form-check-input" value='1'
                                            id="harapan_kesesuaian_persyaratan_jns_pelayanan1"
                                            {{ old('harapan_kesesuaian_persyaratan_jns_pelayanan') == '1' || ($survey != null && $survey->harapan_kesesuaian_persyaratan_jns_pelayanan == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label"
                                            for="harapan_kesesuaian_persyaratan_jns_pelayanan2">2</label>
                                        <input type='radio' name='harapan_kesesuaian_persyaratan_jns_pelayanan'
                                            class="form-check-input" value='2'
                                            id="harapan_kesesuaian_persyaratan_jns_pelayanan2"
                                            {{ old('harapan_kesesuaian_persyaratan_jns_pelayanan') == '2' || ($survey != null && $survey->harapan_kesesuaian_persyaratan_jns_pelayanan == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label"
                                            for="harapan_kesesuaian_persyaratan_jns_pelayanan3">3</label>
                                        <input type='radio' name='harapan_kesesuaian_persyaratan_jns_pelayanan'
                                            class="form-check-input" value='3'
                                            id="harapan_kesesuaian_persyaratan_jns_pelayanan3"
                                            {{ old('harapan_kesesuaian_persyaratan_jns_pelayanan') == '3' || ($survey != null && $survey->harapan_kesesuaian_persyaratan_jns_pelayanan == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label"
                                            for="harapan_kesesuaian_persyaratan_jns_pelayanan4">4</label>
                                        <input type='radio' name='harapan_kesesuaian_persyaratan_jns_pelayanan'
                                            class="form-check-input" value='4'
                                            id="harapan_kesesuaian_persyaratan_jns_pelayanan4"
                                            {{ old('harapan_kesesuaian_persyaratan_jns_pelayanan') == '4' || ($survey != null && $survey->harapan_kesesuaian_persyaratan_jns_pelayanan == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label"
                                            for="harapan_kesesuaian_persyaratan_jns_pelayanan5">5</label>
                                        <input type='radio' name='harapan_kesesuaian_persyaratan_jns_pelayanan'
                                            class="form-check-input" value='5'
                                            id="harapan_kesesuaian_persyaratan_jns_pelayanan5"
                                            {{ old('harapan_kesesuaian_persyaratan_jns_pelayanan') == '5' || ($survey != null && $survey->harapan_kesesuaian_persyaratan_jns_pelayanan == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_kesesuaian_persyaratan_jns_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kemudahan_prosedur_pelayanan">Bagaimana Pemahaman
                                    Saudara Tentang Kemudahan Prosedur Pelayanan di Unit ini ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur_pelayanan' class="form-check-input"
                                        value='Tidak Mudah' id="kp1"
                                        {{ old('kemudahan_prosedur_pelayanan') == 'Tidak Mudah' || ($survey != null && $survey->kemudahan_prosedur_pelayanan == 'Tidak Mudah') ? 'checked' : '' }} />
                                    <label class="form-label" for="kp1">Tidak Mudah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur_pelayanan' class="form-check-input"
                                        value='Kurang Mudah' id="kp2"
                                        {{ old('kemudahan_prosedur_pelayanan') == 'Kurang Mudah' || ($survey != null && $survey->kemudahan_prosedur_pelayanan == 'Kurang Mudah') ? 'checked' : '' }} />
                                    <label class="form-label" for="kp2">Kurang Mudah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur_pelayanan' class="form-check-input"
                                        value='Mudah' id="kp3"
                                        {{ old('kemudahan_prosedur_pelayanan') == 'Mudah' || ($survey != null && $survey->kemudahan_prosedur_pelayanan == 'Mudah') ? 'checked' : '' }} />
                                    <label class="form-label" for="kp3">Mudah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur_pelayanan' class="form-check-input"
                                        value='Sangat Mudah' id="kp4"
                                        {{ old('kemudahan_prosedur_pelayanan') == 'Sangat Mudah' || ($survey != null && $survey->kemudahan_prosedur_pelayanan == 'Sangat Mudah') ? 'checked' : '' }} />
                                    <label class="form-label" for="kp4">Sangat Mudah</label>
                                </div>

                                @error('kemudahan_prosedur_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_kemudahan_prosedur_pelayanan"
                                    class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kemudahan_prosedur_pelayanan1">1</label>
                                        <input type='radio' name='harapan_kemudahan_prosedur_pelayanan'
                                            class="form-check-input" value='1'
                                            id="harapan_kemudahan_prosedur_pelayanan1"
                                            {{ old('harapan_kemudahan_prosedur_pelayanan') == '1' || ($survey != null && $survey->harapan_kemudahan_prosedur_pelayanan == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kemudahan_prosedur_pelayanan2">2</label>
                                        <input type='radio' name='harapan_kemudahan_prosedur_pelayanan'
                                            class="form-check-input" value='2'
                                            id="harapan_kemudahan_prosedur_pelayanan2"
                                            {{ old('harapan_kemudahan_prosedur_pelayanan') == '2' || ($survey != null && $survey->harapan_kemudahan_prosedur_pelayanan == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_kemudahan_prosedur_pelayanan3">3</label>
                                        <input type='radio' name='harapan_kemudahan_prosedur_pelayanan'
                                            class="form-check-input" value='3'
                                            id="harapan_kemudahan_prosedur_pelayanan3"
                                            {{ old('harapan_kemudahan_prosedur_pelayanan') == '3' || ($survey != null && $survey->harapan_kemudahan_prosedur_pelayanan == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kemudahan_prosedur_pelayanan4">4</label>
                                        <input type='radio' name='harapan_kemudahan_prosedur_pelayanan'
                                            class="form-check-input" value='4'
                                            id="harapan_kemudahan_prosedur_pelayanan4"
                                            {{ old('harapan_kemudahan_prosedur_pelayanan') == '4' || ($survey != null && $survey->harapan_kemudahan_prosedur_pelayanan == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kemudahan_prosedur_pelayanan5">5</label>
                                        <input type='radio' name='harapan_kemudahan_prosedur_pelayanan'
                                            class="form-check-input" value='5'
                                            id="harapan_kemudahan_prosedur_pelayanan5"
                                            {{ old('harapan_kemudahan_prosedur_pelayanan') == '5' || ($survey != null && $survey->harapan_kemudahan_prosedur_pelayanan == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_kemudahan_prosedur_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kecepatan_waktu_pelayanan">Bagaimana Pendapat
                                    saudara tentang kecepatan waktu dalam memberikan layanan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan_waktu_pelayanan' class="form-check-input"
                                        value='Tidak Cepat' id="kecepatan_waktu_pelayanan1"
                                        {{ old('kecepatan_waktu_pelayanan') == 'Tidak Cepat`' || ($survey != null && $survey->kecepatan_waktu_pelayanan == 'Tidak Cepat`') ? 'checked' : '' }} />
                                    <label class="form-label" for="kecepatan_waktu_pelayanan1">Tidak Cepat</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan_waktu_pelayanan' class="form-check-input"
                                        value='Kurang Cepat' id="kecepatan_waktu_pelayanan2"
                                        {{ old('kecepatan_waktu_pelayanan') == 'Kurang Cepat' || ($survey != null && $survey->kecepatan_waktu_pelayanan == 'Kurang Cepat') ? 'checked' : '' }} />
                                    <label class="form-label" for="kecepatan_waktu_pelayanan2">Kurang Cepat</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan_waktu_pelayanan' class="form-check-input"
                                        value='Cepat' id="kecepatan_waktu_pelayanan3"
                                        {{ old('kecepatan_waktu_pelayanan') == 'Cepat' || ($survey != null && $survey->kecepatan_waktu_pelayanan == 'Cepat') ? 'checked' : '' }} />
                                    <label class="form-label" for="kecepatan_waktu_pelayanan3">Cepat</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan_waktu_pelayanan' class="form-check-input"
                                        value='Sangat Cepat' id="kecepatan_waktu_pelayanan4"
                                        {{ old('kecepatan_waktu_pelayanan') == 'Sangat Cepat' || ($survey != null && $survey->kecepatan_waktu_pelayanan == 'Sangat Cepat') ? 'checked' : '' }} />
                                    <label class="form-label" for="kecepatan_waktu_pelayanan4">Sangat Cepat</label>
                                </div>

                                @error('kecepatan_waktu_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_kecepatan_waktu_pelayanan" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kecepatan_waktu_pelayanan1">1</label>
                                        <input type='radio' name='harapan_kecepatan_waktu_pelayanan'
                                            class="form-check-input" value='1'
                                            id="harapan_kecepatan_waktu_pelayanan1"
                                            {{ old('harapan_kecepatan_waktu_pelayanan') == '1' || ($survey != null && $survey->harapan_kecepatan_waktu_pelayanan == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kecepatan_waktu_pelayanan2">2</label>
                                        <input type='radio' name='harapan_kecepatan_waktu_pelayanan'
                                            class="form-check-input" value='2'
                                            id="harapan_kecepatan_waktu_pelayanan2"
                                            {{ old('harapan_kecepatan_waktu_pelayanan') == '2' || ($survey != null && $survey->harapan_kecepatan_waktu_pelayanan == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_kecepatan_waktu_pelayanan3">3</label>
                                        <input type='radio' name='harapan_kecepatan_waktu_pelayanan'
                                            class="form-check-input" value='3'
                                            id="harapan_kecepatan_waktu_pelayanan3"
                                            {{ old('harapan_kecepatan_waktu_pelayanan') == '3' || ($survey != null && $survey->harapan_kecepatan_waktu_pelayanan == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kecepatan_waktu_pelayanan4">4</label>
                                        <input type='radio' name='harapan_kecepatan_waktu_pelayanan'
                                            class="form-check-input" value='4'
                                            id="harapan_kecepatan_waktu_pelayanan4"
                                            {{ old('harapan_kecepatan_waktu_pelayanan') == '4' || ($survey != null && $survey->harapan_kecepatan_waktu_pelayanan == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kecepatan_waktu_pelayanan5">5</label>
                                        <input type='radio' name='harapan_kecepatan_waktu_pelayanan'
                                            class="form-check-input" value='5'
                                            id="harapan_kecepatan_waktu_pelayanan5"
                                            {{ old('harapan_kecepatan_waktu_pelayanan') == '5' || ($survey != null && $survey->harapan_kecepatan_waktu_pelayanan == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_kecepatan_waktu_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kewajaran_biaya_pelayanan">Bagaimana Pendapat
                                    Saudara
                                    Tentang Kewajaran Biaya/Tarif dalam pelayanan?
                                </label>
                                <div class="form-check">
                                    <input type='radio' name='kewajaran_biaya_pelayanan' class="form-check-input"
                                        value='Sangat Mahal' id="kewajaran_biaya_pelayanan1"
                                        {{ old('kewajaran_biaya_pelayanan') == 'Sangat Mahal' || ($survey != null && $survey->kewajaran_biaya_pelayanan == 'Sangat Mahal') ? 'checked' : '' }} />
                                    <label class="form-label" for="kewajaran_biaya_pelayanan1">Sangat Mahal</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kewajaran_biaya_pelayanan' class="form-check-input"
                                        value='Cukup Mahal' id="kewajaran_biaya_pelayanan2"
                                        {{ old('kewajaran_biaya_pelayanan') == 'Cukup Mahal' || ($survey != null && $survey->kewajaran_biaya_pelayanan == 'Cukup Mahal') ? 'checked' : '' }} />
                                    <label class="form-label" for="kewajaran_biaya_pelayanan2">Cukup Mahal</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kewajaran_biaya_pelayanan' class="form-check-input"
                                        value='Murah' id="kewajaran_biaya_pelayanan3"
                                        {{ old('kewajaran_biaya_pelayanan') == 'Murah' || ($survey != null && $survey->kewajaran_biaya_pelayanan == 'Murah') ? 'checked' : '' }} />
                                    <label class="form-label" for="kewajaran_biaya_pelayanan3">Murah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kewajaran_biaya_pelayanan' class="form-check-input"
                                        value='Gratis' id="kewajaran_biaya_pelayanan4"
                                        {{ old('kewajaran_biaya_pelayanan') == 'Gratis' || ($survey != null && $survey->kewajaran_biaya_pelayanan == 'Gratis') ? 'checked' : '' }} />
                                    <label class="form-label" for="kewajaran_biaya_pelayanan4">Gratis</label>
                                </div>

                                @error('kewajaran_biaya_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_kewajaran_biaya_pelayanan" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kewajaran_biaya_pelayanan1">1</label>
                                        <input type='radio' name='harapan_kewajaran_biaya_pelayanan'
                                            class="form-check-input" value='1'
                                            id="harapan_kewajaran_biaya_pelayanan1"
                                            {{ old('harapan_kewajaran_biaya_pelayanan') == '1' || ($survey != null && $survey->harapan_kewajaran_biaya_pelayanan == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kewajaran_biaya_pelayanan2">2</label>
                                        <input type='radio' name='harapan_kewajaran_biaya_pelayanan'
                                            class="form-check-input" value='2'
                                            id="harapan_kewajaran_biaya_pelayanan2"
                                            {{ old('harapan_kewajaran_biaya_pelayanan') == '2' || ($survey != null && $survey->harapan_kewajaran_biaya_pelayanan == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_kewajaran_biaya_pelayanan3">3</label>
                                        <input type='radio' name='harapan_kewajaran_biaya_pelayanan'
                                            class="form-check-input" value='3'
                                            id="harapan_kewajaran_biaya_pelayanan3"
                                            {{ old('harapan_kewajaran_biaya_pelayanan') == '3' || ($survey != null && $survey->harapan_kewajaran_biaya_pelayanan == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kewajaran_biaya_pelayanan4">4</label>
                                        <input type='radio' name='harapan_kewajaran_biaya_pelayanan'
                                            class="form-check-input" value='4'
                                            id="harapan_kewajaran_biaya_pelayanan4"
                                            {{ old('harapan_kewajaran_biaya_pelayanan') == '4' || ($survey != null && $survey->harapan_kewajaran_biaya_pelayanan == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kewajaran_biaya_pelayanan5">5</label>
                                        <input type='radio' name='harapan_kewajaran_biaya_pelayanan'
                                            class="form-check-input" value='5'
                                            id="harapan_kewajaran_biaya_pelayanan5"
                                            {{ old('harapan_kewajaran_biaya_pelayanan') == '5' || ($survey != null && $survey->harapan_kewajaran_biaya_pelayanan == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_kewajaran_biaya_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kesesuaian_produk_pelayanan">Bagaimana Pendapat
                                    Saudara Tentang Kesesuaian Produk Pelayanan Antara yang tercantum dalam
                                    standar pelayanan dengan hasil yang diberikan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk_pelayanan' class="form-check-input"
                                        value='Tidak Ada' id="kesesuaian_produk_pelayanan1"
                                        {{ old('kesesuaian_produk_pelayanan') == 'Tidak Ada' || ($survey != null && $survey->kesesuaian_produk_pelayanan == 'Tidak Ada') ? 'checked' : '' }} />
                                    <label class="form-label" for="kesesuaian_produk_pelayanan1">Tidak Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk_pelayanan' class="form-check-input"
                                        value='Kadang-kadang Ada' id="kesesuaian_produk_pelayanan2"
                                        {{ old('kesesuaian_produk_pelayanan') == 'Kadang-kadang Ada' || ($survey != null && $survey->kesesuaian_produk_pelayanan == 'Kadang-kadang Ada') ? 'checked' : '' }} />
                                    <label class="form-label" for="kesesuaian_produk_pelayanan2">Kadang-kadang
                                        Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk_pelayanan' class="form-check-input"
                                        value='Sering Ada' id="kesesuaian_produk_pelayanan3"
                                        {{ old('kesesuaian_produk_pelayanan') == 'Sering Ada' || ($survey != null && $survey->kesesuaian_produk_pelayanan == 'Sering Ada') ? 'checked' : '' }} />
                                    <label class="form-label" for="kesesuaian_produk_pelayanan3">Sering Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk_pelayanan' class="form-check-input"
                                        value='Selalu Ada' id="kesesuaian_produk_pelayanan4"
                                        {{ old('kesesuaian_produk_pelayanan') == 'Selalu Ada' || ($survey != null && $survey->kesesuaian_produk_pelayanan == 'Selalu Ada') ? 'checked' : '' }} />
                                    <label class="form-label" for="kesesuaian_produk_pelayanan4">Selalu Ada</label>
                                </div>

                                @error('kesesuaian_produk_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_kesesuaian_produk_pelayanan"
                                    class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kesesuaian_produk_pelayanan1">1</label>
                                        <input type='radio' name='harapan_kesesuaian_produk_pelayanan'
                                            class="form-check-input" value='1'
                                            id="harapan_kesesuaian_produk_pelayanan1"
                                            {{ old('harapan_kesesuaian_produk_pelayanan') == '1' || ($survey != null && $survey->harapan_kesesuaian_produk_pelayanan == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kesesuaian_produk_pelayanan2">2</label>
                                        <input type='radio' name='harapan_kesesuaian_produk_pelayanan'
                                            class="form-check-input" value='2'
                                            id="harapan_kesesuaian_produk_pelayanan2"
                                            {{ old('harapan_kesesuaian_produk_pelayanan') == '2' || ($survey != null && $survey->harapan_kesesuaian_produk_pelayanan == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_kesesuaian_produk_pelayanan3">3</label>
                                        <input type='radio' name='harapan_kesesuaian_produk_pelayanan'
                                            class="form-check-input" value='3'
                                            id="harapan_kesesuaian_produk_pelayanan3"
                                            {{ old('harapan_kesesuaian_produk_pelayanan') == '3' || ($survey != null && $survey->harapan_kesesuaian_produk_pelayanan == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kesesuaian_produk_pelayanan4">4</label>
                                        <input type='radio' name='harapan_kesesuaian_produk_pelayanan'
                                            class="form-check-input" value='4'
                                            id="harapan_kesesuaian_produk_pelayanan4"
                                            {{ old('harapan_kesesuaian_produk_pelayanan') == '4' || ($survey != null && $survey->harapan_kesesuaian_produk_pelayanan == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kesesuaian_produk_pelayanan5">5</label>
                                        <input type='radio' name='harapan_kesesuaian_produk_pelayanan'
                                            class="form-check-input" value='5'
                                            id="harapan_kesesuaian_produk_pelayanan5"
                                            {{ old('harapan_kesesuaian_produk_pelayanan') == '5' || ($survey != null && $survey->harapan_kesesuaian_produk_pelayanan == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_kesesuaian_produk_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-5 text-end">
                                <a class="btn btn-dark" href="{{ route('survey.step.one') }}">Sebelumnya </a>
                                <input type="submit" class="btn btn-primary" value="Selanjutnya">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
