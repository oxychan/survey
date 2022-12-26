@extends('user.partials.main_layout')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">Form - 3/4</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="kemampuan_petugas">Bagaimana Pendapat
                                    saudara Tentang Kompetensi / Kemampuan Petugas dalam Pelayanan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas' class="form-check-input"
                                        value='Tidak Kompeten' id="kemampuan_petugas1" />
                                    <label class="form-label" for="kemampuan_petugas1">Tidak Kompeten</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas' class="form-check-input"
                                        value='Kurang Kompeten' id="kemampuan_petugas2" />
                                    <label class="form-label" for="kemampuan_petugas2">Kurang Kompeten</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas' class="form-check-input" value='Kompeten'
                                        id="kemampuan_petugas3" />
                                    <label class="form-label" for="kemampuan_petugas3">Kompeten</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas' class="form-check-input"
                                        value='Sangat Kompeten' id="kemampuan_petugas4" />
                                    <label class="form-label" for="kemampuan_petugas4">Sangat Kompeten</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hr_kemampuan_petugas" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_kemampuan_petugas1">1</label>
                                        <input type='radio' name='hr_kemampuan_petugas' class="form-check-input"
                                            value='1' id="hr_kemampuan_petugas1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_kemampuan_petugas2">2</label>
                                        <input type='radio' name='hr_kemampuan_petugas' class="form-check-input"
                                            value='2' id="hr_kemampuan_petugas2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hr_kemampuan_petugas3">3</label>
                                        <input type='radio' name='hr_kemampuan_petugas' class="form-check-input"
                                            value='3' id="hr_kemampuan_petugas3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_kemampuan_petugas4">4</label>
                                        <input type='radio' name='hr_kemampuan_petugas' class="form-check-input"
                                            value='4' id="hr_kemampuan_petugas4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_kemampuan_petugas5">5</label>
                                        <input type='radio' name='hr_kemampuan_petugas' class="form-check-input"
                                            value='5' id="hr_kemampuan_petugas5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="perilaku_petugas">Bagaimana Pendapat
                                    Saudara Tentang Prilaku Petugas dalam Pelayanan terkait dengan kesopanan dan
                                    keramahan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas' class="form-check-input"
                                        value='Tidak Sopan dan Ramah' id="perilaku_petugas1" />
                                    <label class="form-label" for="perilaku_petugas1">Tidak Sopan dan
                                        Ramah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas' class="form-check-input"
                                        value='Kurang Sopan dan Ramah' id="perilaku_petugas2" />
                                    <label class="form-label" for="perilaku_petugas2">Kurang Sopan dan
                                        Ramah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas' class="form-check-input"
                                        value='Sopan dan Ramah' id="perilaku_petugas3" />
                                    <label class="form-label" for="perilaku_petugas3">Sopan dan Ramah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas' class="form-check-input"
                                        value='Sangat Sopan dan Ramah' id="perilaku_petugas4" />
                                    <label class="form-label" for="perilaku_petugas4">Sangat Sopan dan
                                        Ramah</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hr_perilaku_petugas" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_perilaku_petugas1">1</label>
                                        <input type='radio' name='hr_perilaku_petugas' class="form-check-input"
                                            value='1' id="hr_perilaku_petugas1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_perilaku_petugas2">2</label>
                                        <input type='radio' name='hr_perilaku_petugas' class="form-check-input"
                                            value='2' id="hr_perilaku_petugas2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hr_perilaku_petugas3">3</label>
                                        <input type='radio' name='hr_perilaku_petugas' class="form-check-input"
                                            value='3' id="hr_perilaku_petugas3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_perilaku_petugas4">4</label>
                                        <input type='radio' name='hr_perilaku_petugas' class="form-check-input"
                                            value='4' id="hr_perilaku_petugas4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_perilaku_petugas5">5</label>
                                        <input type='radio' name='hr_perilaku_petugas' class="form-check-input"
                                            value='5' id="hr_perilaku_petugas5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kualitas_sarpras">Bagaimana Pendapat
                                    Saudara
                                    Tentang Kualitas Sarana dan Prasarana ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Buruk' id="kualitas_sarpras1" />
                                    <label class="form-label" for="kualitas_sarpras1">Buruk</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Cukup' id="kualitas_sarpras2" />
                                    <label class="form-label" for="kualitas_sarpras2">Cukup</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Baik' id="kualitas_sarpras3" />
                                    <label class="form-label" for="kualitas_sarpras3">Baik</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Sangat Baik' id="kualitas_sarpras4" />
                                    <label class="form-label" for="kualitas_sarpras4">Sangat Baik</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hr_kualitas_sarpras" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_kualitas_sarpras1">1</label>
                                        <input type='radio' name='hr_kualitas_sarpras' class="form-check-input"
                                            value='1' id="hr_kualitas_sarpras1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_kualitas_sarpras2">2</label>
                                        <input type='radio' name='hr_kualitas_sarpras' class="form-check-input"
                                            value='2' id="hr_kualitas_sarpras2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hr_kualitas_sarpras3">3</label>
                                        <input type='radio' name='hr_kualitas_sarpras' class="form-check-input"
                                            value='3' id="hr_kualitas_sarpras3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_kualitas_sarpras4">4</label>
                                        <input type='radio' name='hr_kualitas_sarpras' class="form-check-input"
                                            value='4' id="hr_kualitas_sarpras4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_kualitas_sarpras5">5</label>
                                        <input type='radio' name='hr_kualitas_sarpras' class="form-check-input"
                                            value='5' id="hr_kualitas_sarpras5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="penanganan_pengaduan">Bagaimana
                                    Pendapat Saudara
                                    Tentang Penanganan Pengaduan Pengguna Layanan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan' class="form-check-input"
                                        value='Tidak Ada' id="penanganan_pengaduan1" />
                                    <label class="form-label" for="penanganan_pengaduan1">Tidak Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan' class="form-check-input"
                                        value='Ada, Tapi Tidak Berfungsi' id="penanganan_pengaduan2" />
                                    <label class="form-label" for="penanganan_pengaduan2">Ada, Tapi Tidak
                                        Berfungsi</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan' class="form-check-input"
                                        value='Berfungsi Kurang Maksimal' id="penanganan_pengaduan3" />
                                    <label class="form-label" for="penanganan_pengaduan3">Berfungsi Kurang
                                        Maksimal</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan' class="form-check-input"
                                        value='Dikelola Dengan Baik' id="penanganan_pengaduan4" />
                                    <label class="form-label" for="penanganan_pengaduan4">Dikelola Dengan
                                        Baik</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hr_penanganan_pengaduan" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_penanganan_pengaduan1">1</label>
                                        <input type='radio' name='hr_penanganan_pengaduan' class="form-check-input"
                                            value='1' id="hr_penanganan_pengaduan1" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_penanganan_pengaduan2">2</label>
                                        <input type='radio' name='hr_penanganan_pengaduan' class="form-check-input"
                                            value='2' id="hr_penanganan_pengaduan2" />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="hr_penanganan_pengaduan3">3</label>
                                        <input type='radio' name='hr_penanganan_pengaduan' class="form-check-input"
                                            value='3' id="hr_penanganan_pengaduan3" />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="hr_penanganan_pengaduan4">4</label>
                                        <input type='radio' name='hr_penanganan_pengaduan' class="form-check-input"
                                            value='4' id="hr_penanganan_pengaduan4" />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="hr_penanganan_pengaduan5">5</label>
                                        <input type='radio' name='hr_penanganan_pengaduan' class="form-check-input"
                                            value='5' id="hr_penanganan_pengaduan5" />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>
                            </div>

                            <div class="form-group mt-5 text-end">
                                <a class="btn btn-dark" href="{{ route('survey.2') }}">Sebelumnya </a>
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
