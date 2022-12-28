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
                        <form action="{{ route('survey.step.three') }}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="kemampuan_petugas_pelayanan">Bagaimana Pendapat
                                    saudara Tentang Kompetensi / Kemampuan Petugas dalam Pelayanan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas_pelayanan' class="form-check-input"
                                        value='Tidak Kompeten' id="kemampuan_petugas_pelayanan1"
                                        {{ old('kemampuan_petugas_pelayanan') == 'Tidak Kompeten' || ($survey != null && $survey->kemampuan_petugas_pelayanan == 'Tidak Kompeten') ? 'checked' : '' }} />
                                    <label class="form-label" for="kemampuan_petugas_pelayanan1">Tidak Kompeten</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas_pelayanan' class="form-check-input"
                                        value='Kurang Kompeten' id="kemampuan_petugas_pelayanan2"
                                        {{ old('kemampuan_petugas_pelayanan') == 'Kurang Kompeten' || ($survey != null && $survey->kemampuan_petugas_pelayanan == 'Kurang Kompeten') ? 'checked' : '' }} />
                                    <label class="form-label" for="kemampuan_petugas_pelayanan2">Kurang Kompeten</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas_pelayanan' class="form-check-input"
                                        value='Kompeten' id="kemampuan_petugas_pelayanan3"
                                        {{ old('kemampuan_petugas_pelayanan') == 'Kompeten' || ($survey != null && $survey->kemampuan_petugas_pelayanan == 'Kompeten') ? 'checked' : '' }} />
                                    <label class="form-label" for="kemampuan_petugas_pelayanan3">Kompeten</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kemampuan_petugas_pelayanan' class="form-check-input"
                                        value='Sangat Kompeten' id="kemampuan_petugas_pelayanan4"
                                        {{ old('kemampuan_petugas_pelayanan') == 'Sangat Kompeten' || ($survey != null && $survey->kemampuan_petugas_pelayanan == 'Sangat Kompeten') ? 'checked' : '' }} />
                                    <label class="form-label" for="kemampuan_petugas_pelayanan4">Sangat Kompeten</label>
                                </div>

                                @error('kemampuan_petugas_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_kemampuan_petugas_pelayanan" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kemampuan_petugas_pelayanan1">1</label>
                                        <input type='radio' name='harapan_kemampuan_petugas_pelayanan'
                                            class="form-check-input" value='1'
                                            id="harapan_kemampuan_petugas_pelayanan1"
                                            {{ old('harapan_kemampuan_petugas_pelayanan') == '1' || ($survey != null && $survey->harapan_kemampuan_petugas_pelayanan == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kemampuan_petugas_pelayanan2">2</label>
                                        <input type='radio' name='harapan_kemampuan_petugas_pelayanan'
                                            class="form-check-input" value='2'
                                            id="harapan_kemampuan_petugas_pelayanan2"
                                            {{ old('harapan_kemampuan_petugas_pelayanan') == '2' || ($survey != null && $survey->harapan_kemampuan_petugas_pelayanan == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_kemampuan_petugas_pelayanan3">3</label>
                                        <input type='radio' name='harapan_kemampuan_petugas_pelayanan'
                                            class="form-check-input" value='3'
                                            id="harapan_kemampuan_petugas_pelayanan3"
                                            {{ old('harapan_kemampuan_petugas_pelayanan') == '3' || ($survey != null && $survey->harapan_kemampuan_petugas_pelayanan == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kemampuan_petugas_pelayanan4">4</label>
                                        <input type='radio' name='harapan_kemampuan_petugas_pelayanan'
                                            class="form-check-input" value='4'
                                            id="harapan_kemampuan_petugas_pelayanan4"
                                            {{ old('harapan_kemampuan_petugas_pelayanan') == '4' || ($survey != null && $survey->harapan_kemampuan_petugas_pelayanan == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kemampuan_petugas_pelayanan5">5</label>
                                        <input type='radio' name='harapan_kemampuan_petugas_pelayanan'
                                            class="form-check-input" value='5'
                                            id="harapan_kemampuan_petugas_pelayanan5"
                                            {{ old('harapan_kemampuan_petugas_pelayanan') == '5' || ($survey != null && $survey->harapan_kemampuan_petugas_pelayanan == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_kemampuan_petugas_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="perilaku_petugas_pelayanan">Bagaimana Pendapat
                                    Saudara Tentang Prilaku Petugas dalam Pelayanan terkait dengan kesopanan dan
                                    keramahan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas_pelayanan' class="form-check-input"
                                        value='Tidak Sopan dan Ramah' id="perilaku_petugas_pelayanan1"
                                        {{ old('perilaku_petugas_pelayanan') == 'Tidak Sopan dan Ramah' || ($survey != null && $survey->perilaku_petugas_pelayanan == 'Tidak Sopan dan Ramah') ? 'checked' : '' }} />
                                    <label class="form-label" for="perilaku_petugas_pelayanan1">Tidak Sopan dan
                                        Ramah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas_pelayanan' class="form-check-input"
                                        value='Kurang Sopan dan Ramah' id="perilaku_petugas_pelayanan2"
                                        {{ old('perilaku_petugas_pelayanan') == 'Kurang Sopan dan Ramah' || ($survey != null && $survey->perilaku_petugas_pelayanan == 'Kurang Sopan dan Ramah') ? 'checked' : '' }} />
                                    <label class="form-label" for="perilaku_petugas_pelayanan2">Kurang Sopan dan
                                        Ramah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas_pelayanan' class="form-check-input"
                                        value='Sopan dan Ramah' id="perilaku_petugas_pelayanan3"
                                        {{ old('perilaku_petugas_pelayanan') == 'Sopan dan Ramah' || ($survey != null && $survey->perilaku_petugas_pelayanan == 'Sopan dan Ramah') ? 'checked' : '' }} />
                                    <label class="form-label" for="perilaku_petugas_pelayanan3">Sopan dan Ramah</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='perilaku_petugas_pelayanan' class="form-check-input"
                                        value='Sangat Sopan dan Ramah' id="perilaku_petugas_pelayanan4"
                                        {{ old('perilaku_petugas_pelayanan') == 'Sangat Sopan dan Ramah' || ($survey != null && $survey->perilaku_petugas_pelayanan == 'Sangat Sopan dan Ramah') ? 'checked' : '' }} />
                                    <label class="form-label" for="perilaku_petugas_pelayanan4">Sangat Sopan dan
                                        Ramah</label>
                                </div>

                                @error('perilaku_petugas_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_perilaku_petugas_pelayanan" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_perilaku_petugas_pelayanan1">1</label>
                                        <input type='radio' name='harapan_perilaku_petugas_pelayanan'
                                            class="form-check-input" value='1'
                                            id="harapan_perilaku_petugas_pelayanan1"
                                            {{ old('harapan_perilaku_petugas_pelayanan') == '1' || ($survey != null && $survey->harapan_perilaku_petugas_pelayanan == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_perilaku_petugas_pelayanan2">2</label>
                                        <input type='radio' name='harapan_perilaku_petugas_pelayanan'
                                            class="form-check-input" value='2'
                                            id="harapan_perilaku_petugas_pelayanan2"
                                            {{ old('harapan_perilaku_petugas_pelayanan') == '2' || ($survey != null && $survey->harapan_perilaku_petugas_pelayanan == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_perilaku_petugas_pelayanan3">3</label>
                                        <input type='radio' name='harapan_perilaku_petugas_pelayanan'
                                            class="form-check-input" value='3'
                                            id="harapan_perilaku_petugas_pelayanan3"
                                            {{ old('harapan_perilaku_petugas_pelayanan') == '3' || ($survey != null && $survey->harapan_perilaku_petugas_pelayanan == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_perilaku_petugas_pelayanan4">4</label>
                                        <input type='radio' name='harapan_perilaku_petugas_pelayanan'
                                            class="form-check-input" value='4'
                                            id="harapan_perilaku_petugas_pelayanan4"
                                            {{ old('harapan_perilaku_petugas_pelayanan') == '4' || ($survey != null && $survey->harapan_perilaku_petugas_pelayanan == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_perilaku_petugas_pelayanan5">5</label>
                                        <input type='radio' name='harapan_perilaku_petugas_pelayanan'
                                            class="form-check-input" value='5'
                                            id="harapan_perilaku_petugas_pelayanan5"
                                            {{ old('harapan_perilaku_petugas_pelayanan') == '5' || ($survey != null && $survey->harapan_perilaku_petugas_pelayanan == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_perilaku_petugas_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="kualitas_sarpras">Bagaimana Pendapat
                                    Saudara
                                    Tentang Kualitas Sarana dan Prasarana ?</label>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Buruk' id="kualitas_sarpras1"
                                        {{ old('kualitas_sarpras') == 'Buruk' || ($survey != null && $survey->kualitas_sarpras == 'Buruk') ? 'checked' : '' }} />
                                    <label class="form-label" for="kualitas_sarpras1">Buruk</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Cukup' id="kualitas_sarpras2"
                                        {{ old('kualitas_sarpras') == 'Cukup' || ($survey != null && $survey->kualitas_sarpras == 'Cukup') ? 'checked' : '' }} />
                                    <label class="form-label" for="kualitas_sarpras2">Cukup</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Baik' id="kualitas_sarpras3"
                                        {{ old('kualitas_sarpras') == 'Baik' || ($survey != null && $survey->kualitas_sarpras == 'Baik') ? 'checked' : '' }} />
                                    <label class="form-label" for="kualitas_sarpras3">Baik</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='kualitas_sarpras' class="form-check-input"
                                        value='Sangat Baik' id="kualitas_sarpras4"
                                        {{ old('kualitas_sarpras') == 'Sangat Baik' || ($survey != null && $survey->kualitas_sarpras == 'Sangat Baik') ? 'checked' : '' }} />
                                    <label class="form-label" for="kualitas_sarpras4">Sangat Baik</label>
                                </div>

                                @error('kualitas_sarpras')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_kualitas_sarpras" class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kualitas_sarpras1">1</label>
                                        <input type='radio' name='harapan_kualitas_sarpras' class="form-check-input"
                                            value='1' id="harapan_kualitas_sarpras1"
                                            {{ old('harapan_kualitas_sarpras') == '1' || ($survey != null && $survey->harapan_kualitas_sarpras == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kualitas_sarpras2">2</label>
                                        <input type='radio' name='harapan_kualitas_sarpras' class="form-check-input"
                                            value='2' id="harapan_kualitas_sarpras2"
                                            {{ old('harapan_kualitas_sarpras') == '2' || ($survey != null && $survey->harapan_kualitas_sarpras == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_kualitas_sarpras3">3</label>
                                        <input type='radio' name='harapan_kualitas_sarpras' class="form-check-input"
                                            value='3' id="harapan_kualitas_sarpras3"
                                            {{ old('harapan_kualitas_sarpras') == '3' || ($survey != null && $survey->harapan_kualitas_sarpras == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_kualitas_sarpras4">4</label>
                                        <input type='radio' name='harapan_kualitas_sarpras' class="form-check-input"
                                            value='4' id="harapan_kualitas_sarpras4"
                                            {{ old('harapan_kualitas_sarpras') == '4' || ($survey != null && $survey->harapan_kualitas_sarpras == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_kualitas_sarpras5">5</label>
                                        <input type='radio' name='harapan_kualitas_sarpras' class="form-check-input"
                                            value='5' id="harapan_kualitas_sarpras5"
                                            {{ old('harapan_kualitas_sarpras') == '5' || ($survey != null && $survey->harapan_kualitas_sarpras == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_kualitas_sarpras')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="penanganan_pengaduan_pengguna">Bagaimana
                                    Pendapat Saudara
                                    Tentang Penanganan Pengaduan Pengguna Layanan ?</label>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan_pengguna' class="form-check-input"
                                        value='Tidak Ada' id="penanganan_pengaduan_pengguna1"
                                        {{ old('penanganan_pengaduan_pengguna') == 'Tidak Ada' || ($survey != null && $survey->penanganan_pengaduan_pengguna == 'Tidak Ada') ? 'checked' : '' }} />
                                    <label class="form-label" for="penanganan_pengaduan_pengguna1">Tidak Ada</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan_pengguna' class="form-check-input"
                                        value='Ada, Tapi Tidak Berfungsi' id="penanganan_pengaduan_pengguna2"
                                        {{ old('penanganan_pengaduan_pengguna') == 'Ada, Tapi Tidak Berfungsi' || ($survey != null && $survey->penanganan_pengaduan_pengguna == 'Ada, Tapi Tidak Berfungsi') ? 'checked' : '' }} />
                                    <label class="form-label" for="penanganan_pengaduan_pengguna2">Ada, Tapi Tidak
                                        Berfungsi</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan_pengguna' class="form-check-input"
                                        value='Berfungsi Kurang Maksimal' id="penanganan_pengaduan_pengguna3"
                                        {{ old('penanganan_pengaduan_pengguna') == 'Berfungsi Kurang Maksimal' || ($survey != null && $survey->penanganan_pengaduan_pengguna == 'Berfungsi Kurang Maksimal') ? 'checked' : '' }} />
                                    <label class="form-label" for="penanganan_pengaduan_pengguna3">Berfungsi Kurang
                                        Maksimal</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='penanganan_pengaduan_pengguna' class="form-check-input"
                                        value='Dikelola Dengan Baik' id="penanganan_pengaduan_pengguna4"
                                        {{ old('penanganan_pengaduan_pengguna') == 'Dikelola Dengan Baik' || ($survey != null && $survey->penanganan_pengaduan_pengguna == 'Dikelola Dengan Baik') ? 'checked' : '' }} />
                                    <label class="form-label" for="penanganan_pengaduan_pengguna4">Dikelola Dengan
                                        Baik</label>
                                </div>

                                @error('penanganan_pengaduan_pengguna')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harapan_penanganan_pengaduan_pengguna"
                                    class="form-label fw-bold">Harapan</label>
                                <div class="d-flex flex-row">
                                    <label class="form-label">Terendah</label>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_penanganan_pengaduan_pengguna1">1</label>
                                        <input type='radio' name='harapan_penanganan_pengaduan_pengguna'
                                            class="form-check-input" value='1'
                                            id="harapan_penanganan_pengaduan_pengguna1"
                                            {{ old('harapan_penanganan_pengaduan_pengguna') == '1' || ($survey != null && $survey->harapan_penanganan_pengaduan_pengguna == '1') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_penanganan_pengaduan_pengguna2">2</label>
                                        <input type='radio' name='harapan_penanganan_pengaduan_pengguna'
                                            class="form-check-input" value='2'
                                            id="harapan_penanganan_pengaduan_pengguna2"
                                            {{ old('harapan_penanganan_pengaduan_pengguna') == '2' || ($survey != null && $survey->harapan_penanganan_pengaduan_pengguna == '2') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check  mx-4">
                                        <label class="form-label" for="harapan_penanganan_pengaduan_pengguna3">3</label>
                                        <input type='radio' name='harapan_penanganan_pengaduan_pengguna'
                                            class="form-check-input" value='3'
                                            id="harapan_penanganan_pengaduan_pengguna3"
                                            {{ old('harapan_penanganan_pengaduan_pengguna') == '3' || ($survey != null && $survey->harapan_penanganan_pengaduan_pengguna == '3') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check">
                                        <label class="form-label" for="harapan_penanganan_pengaduan_pengguna4">4</label>
                                        <input type='radio' name='harapan_penanganan_pengaduan_pengguna'
                                            class="form-check-input" value='4'
                                            id="harapan_penanganan_pengaduan_pengguna4"
                                            {{ old('harapan_penanganan_pengaduan_pengguna') == '4' || ($survey != null && $survey->harapan_penanganan_pengaduan_pengguna == '4') ? 'checked' : '' }} />
                                    </div>
                                    <div class="form-check mx-4">
                                        <label class="form-label" for="harapan_penanganan_pengaduan_pengguna5">5</label>
                                        <input type='radio' name='harapan_penanganan_pengaduan_pengguna'
                                            class="form-check-input" value='5'
                                            id="harapan_penanganan_pengaduan_pengguna5"
                                            {{ old('harapan_penanganan_pengaduan_pengguna') == '5' || ($survey != null && $survey->harapan_penanganan_pengaduan_pengguna == '5') ? 'checked' : '' }} />
                                    </div>
                                    <label class="form-label">Tertinggi</label>
                                </div>

                                @error('harapan_penanganan_pengaduan_pengguna')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-5 text-end">
                                <a class="btn btn-dark" href="{{ route('survey.step.two') }}">Sebelumnya </a>
                                <input type="submit" class="btn btn-primary" value="Selanjutnya">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
