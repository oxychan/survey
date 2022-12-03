@extends('user.partials.main_layout')

@section('container')
    <div id="app">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Radio</h4>
                                </div>
                                <div class="card-body">
                                    {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" />
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked />
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Default checked radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioDisabled" disabled />
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            Disabled radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioCheckedDisabled" checked disabled />
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                            Disabled checked radio
                                        </label>
                                    </div> --}}
                                    <form action="action_page.php">
                                        <div class="form-group">
                                            <label for="NAMA RESPONDEN">NAMA RESPONDEN:</label>
                                            <input type="text" class="form-control" id="NAMA RESPONDEN" placeholder=""
                                                name="NAMA RESPONDEN">
                                        </div>

                                        <div class="form-group">
                                            <label for="jenis_pelayanan">JENIS PELAYANAN::</label></P>
                                            <input type='radio' name='jenis_pelayanan'
                                                value='Pengambilan Produk Pengadilan' />Pengambilan Produk Pengadilan&nbsp
                                            <input type='radio' name='jenis_pelayanan'
                                                value='Pendaftaran Perkara' />Pendaftaran Perkara&nbsp
                                            <input type='radio' name='jenis_pelayanan' value='Layanan Informasi' />Layanan
                                            Informasi&nbsp
                                            <input type='radio' name='jenis_pelayanan'
                                                value='Layanan Pendaftaran' />Layanan Pendaftaran&nbsp
                                            <span></span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="TANGGAL SURVEY">TANGGAL SURVEY:</label>
                                            <input type="date" class="form-control" id="TANGGAL SURVEY" placeholder=""
                                                name="TANGGAL SURVEY">
                                        </div>

                                        <div class="form-group">
                                            <label for="UMUR">UMUR:</label>
                                            <input type="text" class="form-control" id="UMUR" placeholder=""
                                                name="UMUR">
                                        </div>

                                        <div class="form-group">
                                            <label for="JENIS KELAMIN">JENIS KELAMIN:</label></P>
                                            <input type='radio' name='gender' value='male'>laki-laki&nbsp
                                            <input type='radio' name='gender' value='female'>perempuan&nbsp
                                            <span></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="PENDIDIKAN TERAKHIR">PENDIDIKAN TERAKHIR:</label></P>
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='SD' />SD&nbsp
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='SMP' />SMP&nbsp
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='SMA' />SMA&nbsp
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='D1, D2, D3, D4' />D1,
                                            D2, D3, D4&nbsp
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='S1' />S1&nbsp
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='S2' />S2&nbsp
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='S3' />S3&nbsp
                                            <input type='radio' name='PENDIDIKAN TERAKHIR' value='TIDAK SEKOLAH' />TIDAK
                                            SEKOLAH&nbsp
                                        </div>

                                        <div class="form-group">
                                            <label for="PEKERJAAN">PEKERJAAN:</label></P>
                                            <input type='radio' name='PEKERJAAN'
                                                value='PNS/TNI/POLRI' />PNS/TNI/POLRI&nbsp
                                            <input type='radio' name='PEKERJAAN' value='PEGAWAI SWASTA' />PEGAWAI
                                            SWASTA&nbsp
                                            <input type='radio' name='PEKERJAAN'
                                                value='WIRASWASTA/WIRAUSAHA' />WIRASWASTA/WIRAUSAHA&nbsp
                                            <input type='radio' name='PEKERJAAN'
                                                value='PELAJAR/MAHASISWA' />PELAJAR/MAHASISWA&nbsp

                                            <div class="form-group">
                                                <br />
                                                <b><label for="YANG LAIN">YANG LAIN:</label></b>
                                                <input type="text" class="form-control" id="YANG LAIN" placeholder=""
                                                    name="YANG LAIN">
                                            </div>

                                            <div class="form-group">
                                                <label for="SUKU BANGSA">SUKU BANGSA:</label></P>
                                                <input type='radio' name='SUKU BANGSA' value='JAWA' />JAWA&nbsp
                                                <input type='radio' name='SUKU BANGSA' value='MADURA' />MADURA&nbsp
                                                <input type='radio' name='SUKU BANGSA' value='SUNDA' />SUNDA&nbsp
                                                <input type='radio' name='SUKU BANGSA' value='BATAK' />BATAK&nbsp
                                                <input type='radio' name='SUKU BANGSA' value='BANJAR' />BANJAR&nbsp

                                                <div class="form-group">
                                                    <br />
                                                    <b><label for="YANG LAIN">YANG LAIN:</label></b>
                                                    <input type="text" class="form-control" id="YANG LAIN"
                                                        placeholder="" name="YANG LAIN">
                                                </div>

                                                <div class="checkbox">
                                                    <button type="BERIKUTNYA" class="btn btn-default">BERIKUTNYA</button>
                                                    <ul class="pagination">
                                                        <li class="page-item disabled">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
