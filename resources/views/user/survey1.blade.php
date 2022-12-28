@extends('user.partials.main_layout')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">Form - 1/4</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('survey.store.step.one') }}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="nama_responden">Nama Responden</label>
                                <input type="text" class="form-control" id="nama_responden" placeholder=""
                                    name="nama_responden"
                                    value="{{ old('nama_responden') ?? ($survey->nama_responden ?? '') }}">
                                @error('nama_responden')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="jenis_pelayanan">Jenis Pelayanan</label>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Pengambilan Produk Pengadilan' id="jp1"
                                        {{ old('jenis_pelayanan') == 'Pengambilan Produk Pengadilan' || ($survey != null && $survey->jenis_pelayanan == 'Pengambilan Produk Pengadilan') ? 'checked' : '' }} />
                                    <label class="form-label" for="jp1"> Pengambilan Produk Pengadilan</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Pendaftaran Perkara' id="jp2"
                                        {{ old('jenis_pelayanan') == 'Pendaftaran Perkara' || ($survey != null && $survey->jenis_pelayanan == 'Pendaftaran Perkara') ? 'checked' : '' }} />
                                    <label class="form-label" for="jp2"> Pendaftaran Perkara</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Layanan Informasi' id="jp3"
                                        {{ old('jenis_pelayanan') == 'Layanan Informasi' || ($survey != null && $survey->jenis_pelayanan == 'Layanan Informasi') ? 'checked' : '' }} />
                                    <label class="form-label" for="jp3">Layanan Informasi</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Layanan Pendaftaran' id="jp4"
                                        {{ old('jenis_pelayanan') == 'Layanan Pendaftaran' || ($survey != null && $survey->jenis_pelayanan == 'Layanan Pendaftaran') ? 'checked' : '' }} />
                                    <label class="form-label" for="jp4"> Layanan Pendaftaran</label>
                                </div>
                                @error('jenis_pelayanan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="tanggal_survey">Tanggal Survey</label>
                                <input type="date" class="form-control" id="tanggal_survey" placeholder=""
                                    name="tanggal_survey"
                                    value="{{ old('tanggal_survey') ?? ($survey->tanggal_survey ?? '') }}">
                                @error('tanggal_survey')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" placeholder="" name="umur"
                                    value="{{ old('umur') ?? ($survey->umur ?? '') }}">
                                @error('umur')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input type='radio' name='jenis_kelamin' class="form-check-input" value='Laki-laki'
                                        id="jk1"
                                        {{ old('jenis_kelamin') == 'Laki-laki' || ($survey != null && $survey->jenis_kelamin == 'Laki-laki') ? 'checked' : '' }} />
                                    <label class="form-label" for="jk1">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_kelamin' class="form-check-input" value='Perempuan'
                                        id="jk2"
                                        {{ old('jenis_kelamin') == 'Perempuan' || ($survey != null && $survey->jenis_kelamin == 'Perempuan') ? 'checked' : '' }} />
                                    <label class="form-label" for="jk2">Perempuan</label>
                                </div>
                                @error('jenis_kelamin')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt1"
                                        class="form-check-input" value='SD'
                                        {{ old('pendidikan_terakhir') == 'SD' || ($survey != null && $survey->pendidikan_terakhir == 'SD') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt1">SD</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt2"
                                        class="form-check-input" value='SMP'
                                        {{ old('pendidikan_terakhir') == 'SMP' || ($survey != null && $survey->pendidikan_terakhir == 'SMP') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt2">SMP</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt3"
                                        class="form-check-input" value='SMA'
                                        {{ old('pendidikan_terakhir') == 'SMA' || ($survey != null && $survey->pendidikan_terakhir == 'SMA') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt3">SMA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt4"
                                        class="form-check-input" value='D1, D2, D3, D4'
                                        {{ old('pendidikan_terakhir') == 'DI, D2, D3, D4' || ($survey != null && $survey->pendidikan_terakhir == 'DI, D2, D3, D4') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt4">>D1, D2, D3, D4</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt5"
                                        class="form-check-input" value='S1'
                                        {{ old('pendidikan_terakhir') == 'S1' || ($survey != null && $survey->pendidikan_terakhir == 'S1') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt5">S1</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt6"
                                        class="form-check-input" value='S2'
                                        {{ old('pendidikan_terakhir') == 'S2' || ($survey != null && $survey->pendidikan_terakhir == 'S2') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt6">S2</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt7"
                                        class="form-check-input" value='S3'
                                        {{ old('pendidikan_terakhir') == 'S3' || ($survey != null && $survey->pendidikan_terakhir == 'S3') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt7">S3</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt8"
                                        class="form-check-input" value='Tidak Sekolah'
                                        {{ old('pendidikan_terakhir') == 'Tidak Sekolah' || ($survey != null && $survey->pendidikan_terakhir == 'Tidak Sekolah') ? 'checked' : '' }} />
                                    <label class="form-label" for="pt8">Tidak Sekolah</label>
                                </div>
                                @error('pendidikan_terakhir')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="pekerjaan">Pekerjaan</label>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj1" class="form-check-input"
                                        value='PNS/TNI/POLRI'
                                        {{ old('pekerjaan') == 'PNS/TNI/POLRI' || ($survey != null && $survey->pekerjaan == 'PNS/TNI/POLRI') ? 'checked' : '' }} />
                                    <label class="form-label" for="pj1">PNS/TNI/POLRI</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj2" class="form-check-input"
                                        value='PEGAWAI SWASTA'
                                        {{ old('pekerjaan') == 'PEGAWAI SWASTA' || ($survey != null && $survey->pekerjaan == 'PEGAWAI SWASTA') ? 'checked' : '' }} />
                                    <label class="form-label" for="pj2">PEGAWAI SWASTA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj3" class="form-check-input"
                                        value='WIRASWASTA/WIRAUSAHA'
                                        {{ old('pekerjaan') == 'WIRASWASTA/WIRAUSAHA' || ($survey != null && $survey->pekerjaan == 'WIRASWASTA/WIRAUSAHA') ? 'checked' : '' }} />
                                    <label class="form-label" for="pj3">WIRASWASTA/WIRAUSAHA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj4" class="form-check-input"
                                        value='PELAJAR/MAHASISWA'
                                        {{ old('pekerjaan') == 'PELAJAR/MAHASISWA' || ($survey != null && $survey->pekerjaan == 'PELAJAR/MAHASISWA') ? 'checked' : '' }} />
                                    <label class="form-label" for="pj4">PELAJAR/MAHASISWA</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="pekerjaan" id="pj5" class="form-check-input"
                                        value=""
                                        {{ $survey != null && !in_array($survey->pekerjaan, ['PNS/TNI/POLRI', 'PEGAWAI SWASTA', 'WIRASWASTA/WIRAUSAHA', 'PELAJAR/MAHASISWA']) ? 'checked' : '' }} />
                                    <input type="text" class="form-control" id="pj_lain" placeholder="Lainnya"
                                        name="pj_lain" disabled='true'
                                        value="{{ old('pj_lain') ?? ($survey->pekerjaan ?? '') }}">
                                </div>
                                @error('pekerjaan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="suku_bangsa">Suku Bangsa</label>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb1" class="form-check-input"
                                        value='JAWA'
                                        {{ old('suku_bangsa') == 'JAWA' || ($survey != null && $survey->suku_bangsa == 'JAWA') ? 'checked' : '' }} />
                                    <label class="form-label" for="sb1">JAWA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb2" class="form-check-input"
                                        value='MADURA'
                                        {{ old('suku_bangsa') == 'MADURA' || ($survey != null && $survey->suku_bangsa == 'MADURA') ? 'checked' : '' }} />
                                    <label for="sb2" class="form-label">MADURA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb3" class="form-check-input"
                                        value='SUNDA'
                                        {{ old('suku_bangsa') == 'SUNDA' || ($survey != null && $survey->suku_bangsa == 'SUNDA') ? 'checked' : '' }} />
                                    <label for="sb3" class="form-label">SUNDA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb4" class="form-check-input"
                                        value='BATAK'
                                        {{ old('suku_bangsa') == 'BATAK' || ($survey != null && $survey->suku_bangsa == 'BATAK') ? 'checked' : '' }} />
                                    <label for="sb4" class="form-label">BATAK</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb5" class="form-check-input"
                                        value='BANJAR'
                                        {{ old('suku_bangsa') == 'BANJAR' || ($survey != null && $survey->suku_bangsa == 'BANJAR') ? 'checked' : '' }} />
                                    <label for="sb5" class="form-label">BANJAR</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="suku_bangsa" id="sb6" class="form-check-input"
                                        value=""
                                        {{ $survey != null && !in_array($survey->suku_bangsa, ['JAWA', 'MADURA', 'SUNDA', 'BATAK', 'BANJAR']) ? 'checked' : '' }} />
                                    <input type="text" class="form-control" id="sb_lain" placeholder="Lainnya"
                                        name="sb_lain" disabled='true'
                                        value="{{ old('sb_lain') ?? ($survey->suku_bangsa ?? '') }}">
                                </div>
                                @error('suku_bangsa')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-5 text-end">
                                <input type="submit" class="btn btn-primary" value="Selanjutnya">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            if ($('#pj5').prop('checked')) {
                $("#pj_lain").prop('disabled', false);
                $("#pj5").val($("#pj_lain").val());
            } else {
                $('#pj_lain').val('');
            }

            $("input[name=pekerjaan]").change(function() {
                if ($(this).attr("id") == "pj5") {
                    $(this).val($("#pj_lain").val());
                    $("#pj_lain").prop('disabled', false);
                } else {
                    $("#pj_lain").prop('disabled', true);
                    $("#pj5").prop('checked', false);
                    $('#pj_lain').val('');
                    console.log($("input[name=pekerjaan]:checked").val());
                }
            });

            $("#pj_lain").change(function() {
                $("#pj5").val($(this).val());
            });

            if ($('#sb6').prop('checked')) {
                $("#sb_lain").prop('disabled', false);
                $("#sb6").val($("#pj_lain").val());
            } else {
                $('#sb_lain').val('');
            }

            $("input[name=suku_bangsa]").change(function() {
                if ($(this).attr("id") == "sb6") {
                    $(this).val($("#sb_lain").val());
                    $("#sb_lain").prop('disabled', false);
                } else {
                    $("#sb_lain").prop('disabled', true);
                    $("#sb_lain").val('');
                }
            });

            $("#sb_lain").change(function() {
                $("#sb6").val($(this).val());
            });
        });
    </script>
@endsection
