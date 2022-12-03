@extends('user.partials.main_layout')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Default Radio</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="nama_responden">Nama Responden:</label>
                                <input type="text" class="form-control" id="nama_responden" placeholder=""
                                    name="nama_responden">
                            </div>

                            <div class="form-group">
                                <label for="jenis_pelayanan">Jenis Pelayanan:</label></P>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Pengambilan Produk Pengadilan' id="jp1" />
                                    <label for="jp1"> Pengambilan Produk Pengadilan</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Pendaftaran Perkara' id="jp2" />
                                    <label for="jp2"> Pendaftaran Perkara</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Layanan_Informasi' id="jp3" />
                                    <label for="jp3">Layanan Informasi</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_pelayanan' class="form-check-input"
                                        value='Layanan_Pendaftaran' id="jp4" />
                                    <label for="jp4"> Layanan Pendaftaran</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_survey">Tanggal Survey:</label>
                                <input type="date" class="form-control" id="tanggal_survey" placeholder=""
                                    name="tanggal_survey">
                            </div>

                            <div class="form-group">
                                <label for="umur">Umur:</label>
                                <input type="number" class="form-control" id="umur" placeholder="" name="umur">
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label></P>
                                <div class="form-check">
                                    <input type='radio' name='jenis_kelamin'  class="form-check-input"
                                        value='male' id="jk1" /> 
                                    <label for="jk1"> laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='jenis_kelamin' class="form-check-input"
                                        value='female' id="jk2" />
                                    <label for="jk2"> perempuan</label>
                                </div>

                            </div>
                                <span></span>
                            </div>

                            <div class="form-group">
                                <label for="pendidikan_terakhir">PENDIDIKAN TERAKHIR:</label>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt1" class="form-check-input" value='SD' />
                                    <label for="pt1">sd</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt2" class="form-check-input" value='SMP' />
                                    <label for="pt2">smp</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt3" class="form-check-input" value='SMA' />
                                    <label for="pt3">sma</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt4" class="form-check-input" value='D1, D2, D3, D4' />
                                    <label for="pt4">>D1, D2, D3, D4</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt5" class="form-check-input" value='S1' />
                                    <label for="pt5">s1</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt6" class="form-check-input" value='S2' />
                                    <label for="pt6">s2</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir' id="pt7" class="form-check-input" value='S3' />
                                    <label for="pt7">s3</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pendidikan_terakhir'  id="pt8" class="form-check-input" value='TIDAK_SEKOLAH' />
                                    <label for="pt8">tidak sekolah</label>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="pekerjaan">PEKERJAAN:</label>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj1" class="form-check-input" value='PNS/TNI/POLRI' />
                                    <label for="pj1">PNS/TNI/POLRI</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj2" class="form-check-input" value='PEGAWAI SWASTA' />
                                    <label for="pj2">PEGAWAI SWASTA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj3" class="form-check-input" value='WIRASWASTA/WIRAUSAHA' />
                                    <label for="pj3">WIRASWASTA/WIRAUSAHA</label>
                                </div>
                                <div class="form-check">
                                    <input type='radio' name='pekerjaan' id="pj4" class="form-check-input" value='PELAJAR/MAHASISWA' />
                                    <label for="pj4">PELAJAR/MAHASISWA</label>
                                </div>
                                

                                <div class="form-group">
                                    <br />
                                    <b><label for="yang_lain">YANG LAIN:</label></b>
                                    <input type="text" class="form-control" id="yang_lain" placeholder=""
                                        name="yang_lain">
                                </div>

                                <div class="form-group">
                                    <label for="suku_bangsa">SUKU BANGSA:</label>
                                    <div class="form-check">
                                        <input type='radio' name='suku_bangsa'  id="sb1" class="form-check-input" value='JAWA' />JAWA

                                    </div>
                                    <div class="form-check">
                                        <input type='radio' name='suku_bangsa' id="sb2" class="form-check-input" value='MADURA' />MADURA

                                    </div>
                                    <div class="form-check">
                                        <input type='radio' name='suku_bangsa' id="sb3" class="form-check-input" value='SUNDA' />SUNDA

                                    </div>
                                    <div class="form-check">
                                        <input type='radio' name='suku_bangsa' id="sb4" class="form-check-input" value='BATAK' />BATAK

                                    </div>
                                    <div class="form-check">
                                        <input type='radio' name='suku_bangsa' id="sb5" class="form-check-input" value='BANJAR' />BANJAR

                                    </div>

                                    <div class="form-group">
                                        <br />
                                        <b><label for="yang_lain">YANG LAIN:</label></b>
                                        <input type="text" class="form-control" id="yang_lain" placeholder=""
                                            name="yang_lain">
                                    </div>

                                    <div class="checkbox">
                                        <button type="BERIKUTNYA" class="btn btn-default">BERIKUTNYA</button>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
