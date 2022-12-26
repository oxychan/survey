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
                        <form action="{{ route('survey.3') }}">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="kesesuaian_jp">Bagaimana Pendapat Saudara
                                    tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_jp' class="form-check-input" value='Tidak Sesuai'
                                        id="kjp1" />
                                    <label class="form-label" for="kjp1">Tidak Sesuai</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_jp' class="form-check-input"
                                        value='Kurang Sesuai' id="kjp2" />
                                    <label class="form-label" for="kjp2">Kurang Sesuai</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_jp' class="form-check-input" value='Sesuai'
                                        id="kjp3" />
                                    <label class="form-label" for="kjp3">Sesuai</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_jp' class="form-check-input"
                                        value='Sangat Sesuai' id="kjp4" />
                                    <label class="form-label" for="kjp4">Sangat Sesuai</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hrkjp" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrkjp1">1</label>
                                        <input type='radio' name='hrkjp' class="form-check-input" value='1'
                                            id="hrkjp1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrkjp2">2</label>
                                        <input type='radio' name='hrkjp' class="form-check-input" value='2'
                                            id="hrkjp2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hrkjp3">3</label>
                                        <input type='radio' name='hrkjp' class="form-check-input" value='3'
                                            id="hrkjp3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrkjp4">4</label>
                                        <input type='radio' name='hrkjp' class="form-check-input" value='4'
                                            id="hrkjp4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrkjp5">5</label>
                                        <input type='radio' name='hrkjp' class="form-check-input" value='5'
                                            id="hrkjp5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kemudahan_prosedur">Bagaimana Pemahaman
                                    Saudara Tentang Kemudahan Prosedur Pelayanan di Unit ini ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur' class="form-check-input"
                                        value='Tidak Mudah' id="kp1" />
                                    <label class="form-label" for="kp1">Tidak Mudah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur' class="form-check-input"
                                        value='Kurang Mudah' id="kp2" />
                                    <label class="form-label" for="kp2">Kurang Mudah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur' class="form-check-input"
                                        value='Mudah' id="kp3" />
                                    <label class="form-label" for="kp3">Mudah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemudahan_prosedur' class="form-check-input"
                                        value='Sangat Mudah' id="kp4" />
                                    <label class="form-label" for="kp4">Sangat Mudah</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hrkp" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrkp1">1</label>
                                        <input type='radio' name='hrkp' class="form-check-input" value='1'
                                            id="hrkp1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrkp2">2</label>
                                        <input type='radio' name='hrkp' class="form-check-input" value='2'
                                            id="hrkp2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hrkp3">3</label>
                                        <input type='radio' name='hrkp' class="form-check-input" value='3'
                                            id="hrkp3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrkp4">4</label>
                                        <input type='radio' name='hrkp' class="form-check-input" value='4'
                                            id="hrkp4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrkp5">5</label>
                                        <input type='radio' name='hrkp' class="form-check-input" value='5'
                                            id="hrkp5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kecepatan">Bagaimana Pendapat saudara
                                    tentang kecepatan waktu dalam memberikan layanan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan' class="form-check-input" value='Tidak Cepat'
                                        id="kecepatan1" />
                                    <label class="form-label" for="kecepatan1">Tidak Cepat</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan' class="form-check-input" value='Kurang Cepat'
                                        id="kecepatan2" />
                                    <label class="form-label" for="kecepatan2">Kurang Cepat</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan' class="form-check-input" value='Cepat'
                                        id="kecepatan3" />
                                    <label class="form-label" for="kecepatan3">Cepat</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kecepatan' class="form-check-input" value='Sangat Cepat'
                                        id="kecepatan4" />
                                    <label class="form-label" for="kecepatan4">Sangat Cepat</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hrkcp" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrkcp1">1</label>
                                        <input type='radio' name='hrkcp' class="form-check-input" value='1'
                                            id="hrkcp1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrkcp2">2</label>
                                        <input type='radio' name='hrkcp' class="form-check-input" value='2'
                                            id="hrkcp2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hrkcp3">3</label>
                                        <input type='radio' name='hrkcp' class="form-check-input" value='3'
                                            id="hrkcp3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrkcp4">4</label>
                                        <input type='radio' name='hrkcp' class="form-check-input" value='4'
                                            id="hrkcp4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrkcp5">5</label>
                                        <input type='radio' name='hrkcp' class="form-check-input" value='5'
                                            id="hrkcp5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="biaya">Bagaimana Pendapat Saudara
                                    Tentang Kewajaran Biaya/Tarif dalam pelayanan ?
                                </label>
                                <div class="form-check">
                                    <input type='radio' name='biaya' class="form-check-input" value='Sangat Mahal'
                                        id="biaya1" />
                                    <label class="form-label" for="biaya1">Sangat Mahal</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='biaya' class="form-check-input" value='Cukup Mahal'
                                        id="biaya2" />
                                    <label class="form-label" for="biaya2">Cukup Mahal</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='biaya' class="form-check-input" value='Murah'
                                        id="biaya3" />
                                    <label class="form-label" for="biaya3">Murah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='biaya' class="form-check-input" value='Gratis'
                                        id="biaya4" />
                                    <label class="form-label" for="biaya4">Gratis</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hrbiaya" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrbiaya1">1</label>
                                        <input type='radio' name='hrbiaya' class="form-check-input" value='1'
                                            id="hrbiaya1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrbiaya2">2</label>
                                        <input type='radio' name='hrbiaya' class="form-check-input" value='2'
                                            id="hrbiaya2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hrbiaya3">3</label>
                                        <input type='radio' name='hrbiaya' class="form-check-input" value='3'
                                            id="hrbiaya3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hrbiaya4">4</label>
                                        <input type='radio' name='hrbiaya' class="form-check-input" value='4'
                                            id="hrbiaya4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hrbiaya5">5</label>
                                        <input type='radio' name='hrbiaya' class="form-check-input" value='5'
                                            id="hrbiaya5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kesesuaian_produk">Bagaimana Pendapat
                                    Saudara Tentang Kesesuaian Produk Pelayanan Antara yang tercantum dalam
                                    standar pelayanan dengan hasil yang diberikan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk' class="form-check-input"
                                        value='Tidak Ada' id="kesesuaian_produk1" />
                                    <label class="form-label" for="kesesuaian_produk1">Tidak Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk' class="form-check-input"
                                        value='Kadang-kadang Ada' id="kesesuaian_produk2" />
                                    <label class="form-label" for="kesesuaian_produk2">Kadang-kadang
                                        Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk' class="form-check-input"
                                        value='Sering Ada' id="kesesuaian_produk3" />
                                    <label class="form-label" for="kesesuaian_produk3">Sering Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kesesuaian_produk' class="form-check-input"
                                        value='Selalu Ada' id="kesesuaian_produk4" />
                                    <label class="form-label" for="kesesuaian_produk4">Selalu Ada</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hr_kesesuaian_produk" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_kesesuaian_produk1">1</label>
                                        <input type='radio' name='hr_kesesuaian_produk' class="form-check-input"
                                            value='1' id="hr_kesesuaian_produk1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_kesesuaian_produk2">2</label>
                                        <input type='radio' name='hr_kesesuaian_produk' class="form-check-input"
                                            value='2' id="hr_kesesuaian_produk2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hr_kesesuaian_produk3">3</label>
                                        <input type='radio' name='hr_kesesuaian_produk' class="form-check-input"
                                            value='3' id="hr_kesesuaian_produk3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_kesesuaian_produk4">4</label>
                                        <input type='radio' name='hr_kesesuaian_produk' class="form-check-input"
                                            value='4' id="hr_kesesuaian_produk4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_kesesuaian_produk5">5</label>
                                        <input type='radio' name='hr_kesesuaian_produk' class="form-check-input"
                                            value='5' id="hr_kesesuaian_produk5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group mt-5 text-end">
                                <a class="btn btn-dark" href="{{ route('survey.1') }}">Sebelumnya </a>
                                <input type="submit" class="btn btn-primary" value="Selanjutnya">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
