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
                                <label for="tanggal_survey">TANGGAL SURVEY:</label>
                                <input type="date" class="form-control" id="tanggal_survey" placeholder=""
                                    name="tanggal_survey">
                            </div>

                            <div class="form-group">
                                <label for="umur">UMUR:</label>
                                <input type="number" class="form-control" id="umur" placeholder="" name="umur">
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">JENIS KELAMIN:</label></P>
                                <input type='radio' name='gender' value='male'>laki-laki&nbsp
                                <input type='radio' name='gender' value='female'>perempuan&nbsp
                                <span></span>
                            </div>

                            <div class="form-group">
                                <label for="pendidikan_terakhir">PENDIDIKAN TERAKHIR:</label></P>
                                <input type='radio' name='pendidikan_terakhir' value='SD' />SD&nbsp
                                <input type='radio' name='pendidikan_terakhir' value='SMP' />SMP&nbsp
                                <input type='radio' name='pendidikan_terakhir' value='SMA' />SMA&nbsp
                                <input type='radio' name='pendidikan_terakhir' value='D1, D2, D3, D4' />D1, D2, D3,
                                D4&nbsp
                                <input type='radio' name='pendidikan_terakhir' value='S1' />S1&nbsp
                                <input type='radio' name='pendidikan_terakhir' value='S2' />S2&nbsp
                                <input type='radio' name='pendidikan_terakhir' value='S3' />S3&nbsp
                                <input type='radio' name='pendidikan_terakhir' value='TIDAK_SEKOLAH' />TIDAK
                                SEKOLAH&nbsp
                            </div>

                            <div class="form-group">
                                <label for="pekerjaan">PEKERJAAN:</label></P>
                                <input type='radio' name='pekerjaan' value='PNS/TNI/POLRI' />PNS/TNI/POLRI&nbsp
                                <input type='radio' name='pekerjaan' value='PEGAWAI SWASTA' />PEGAWAI
                                SWASTA&nbsp
                                <input type='radio' name='pekerjaan'
                                    value='WIRASWASTA/WIRAUSAHA' />WIRASWASTA/WIRAUSAHA&nbsp
                                <input type='radio' name='pekerjaan' value='PELAJAR/MAHASISWA' />PELAJAR/MAHASISWA&nbsp

                                <div class="form-group">
                                    <br />
                                    <b><label for="yang_lain">YANG LAIN:</label></b>
                                    <input type="text" class="form-control" id="yang_lain" placeholder=""
                                        name="yang_lain">
                                </div>

                                <div class="form-group">
                                    <label for="suku_bangsa">SUKU BANGSA:</label></P>
                                    <input type='radio' name='suku_bangsa' value='JAWA' />JAWA&nbsp
                                    <input type='radio' name='suku_bangsa' value='MADURA' />MADURA&nbsp
                                    <input type='radio' name='suku_bangsa' value='SUNDA' />SUNDA&nbsp
                                    <input type='radio' name='suku_bangsa' value='BATAK' />BATAK&nbsp
                                    <input type='radio' name='suku_bangsa' value='BANJAR' />BANJAR&nbsp

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
