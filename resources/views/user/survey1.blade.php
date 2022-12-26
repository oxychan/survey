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
                        <form action="{{ route('submit') }}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="nama_responden">Nama
                                    Responden</label>
                                <input type="text" class="form-control" id="nama_responden" placeholder=""
                                    name="nama_responden" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="jenis_pelayanan">Jenis Pelayanan</label>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Pengambilan Produk Pengadilan' id="jp1" />
                                    <label class="form-label" for="jp1"> Pengambilan Produk Pengadilan</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Pendaftaran Perkara' id="jp2" />
                                    <label class="form-label" for="jp2"> Pendaftaran Perkara</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Layanan_Informasi' id="jp3" />
                                    <label class="form-label" for="jp3">Layanan Informasi</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Layanan_Pendaftaran' id="jp4" />
                                    <label class="form-label" for="jp4"> Layanan Pendaftaran</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="tanggal_survey">Tanggal Survey</label>
                                <input type="date" class="form-control" id="tanggal_survey" placeholder=""
                                    name="tanggal_survey" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" placeholder="" name="umur"
                                    required>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input type='radio' name='jenis_kelamin' class="form-check-input" value='Laki-laki'
                                        id="jk1" />
                                    <label class="form-label" for="jk1">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_kelamin' class="form-check-input" value='Perempuan'
                                        id="jk2" />
                                    <label class="form-label" for="jk2">Perempuan</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="form-label fw-bold" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt1" class="form-check-input"
                                        value='SD' />
                                    <label class="form-label" for="pt1">SD</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt2"
                                        class="form-check-input" value='SMP' />
                                    <label class="form-label" for="pt2">SMP</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt3"
                                        class="form-check-input" value='SMA' />
                                    <label class="form-label" for="pt3">SMA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt4"
                                        class="form-check-input" value='D1, D2, D3, D4' />
                                    <label class="form-label" for="pt4">>D1, D2, D3, D4</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt5"
                                        class="form-check-input" value='S1' />
                                    <label class="form-label" for="pt5">S1</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt6"
                                        class="form-check-input" value='S2' />
                                    <label class="form-label" for="pt6">S2</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt7"
                                        class="form-check-input" value='S3' />
                                    <label class="form-label" for="pt7">S3</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt8"
                                        class="form-check-input" value='Tidak Sekolah' />
                                    <label class="form-label" for="pt8">Tidak Sekolah</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="pekerjaan">Pekerjaan</label>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj1" class="form-check-input"
                                        value='PNS/TNI/POLRI' />
                                    <label class="form-label" for="pj1">PNS/TNI/POLRI</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj2" class="form-check-input"
                                        value='PEGAWAI SWASTA' />
                                    <label class="form-label" for="pj2">PEGAWAI SWASTA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj3" class="form-check-input"
                                        value='WIRASWASTA/WIRAUSAHA' />
                                    <label class="form-label" for="pj3">WIRASWASTA/WIRAUSAHA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj4" class="form-check-input"
                                        value='PELAJAR/MAHASISWA' />
                                    <label class="form-label" for="pj4">PELAJAR/MAHASISWA</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="pekerjaan" id="pj5" class="form-check-input"
                                        value="">
                                    <input type="text" class="form-control" id="pj_lain" placeholder="Lainnya"
                                        name="pj_lain" disabled='true' required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label fw-bold" for="suku_bangsa">Suku Bangsa</label>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb1" class="form-check-input"
                                        value='JAWA' />
                                    <label class="form-label" for="sb1">JAWA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb2" class="form-check-input"
                                        value='MADURA' />
                                    <label for="sb2" class="form-label">MADURA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb3" class="form-check-input"
                                        value='SUNDA' />
                                    <label for="sb3" class="form-label">SUNDA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb4" class="form-check-input"
                                        value='BATAK' />
                                    <label for="sb4" class="form-label">BATAK</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='suku_bangsa' id="sb5" class="form-check-input"
                                        value='BANJAR' />
                                    <label for="sb5" class="form-label">BANJAR</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="suku_bangsa" id="sb6" class="form-check-input"
                                        value="">
                                    <input type="text" class="form-control" id="sb_lain" placeholder="Lainnya"
                                        name="sb_lain" disabled='true' required>
                                </div>
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
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("input[name=pekerjaan]").change(function() {
                if ($(this).attr("id") == "pj5") {
                    $(this).val($("#pj_lain").val());
                    $("#pj_lain").prop('disabled', false);
                } else {
                    $("#pj_lain").prop('disabled', true);
                    $('#pj_lain').val('');
                }
            });

            $("#pj_lain").change(function() {
                $("#pj5").val($(this).val());
            });

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
