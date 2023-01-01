@extends('admin.partials.main_layout')

@section('content')
    <div class="page-heading">
        <h3>Statistik Survey</h3>
    </div>

    @if (session()->has('deleteSuccess'))
        <div class="d-flex justify-content-end">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="false" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <rect width="100%" height="100%" fill="#007aff"></rect>
                    </svg>
                    <strong class="me-auto">Operasi sukses</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session()->get('deleteSuccess') }}
                </div>
            </div>
        </div>
    @endif
    <div>
        @include('admin.partials.data_tables_survey', [
            'title' => 'Data Survey',
            'surveys' => $surveys,
        ])
    </div>

    <div class="modal-primary me-1 mb-1 d-inline-block">
        <div class="modal fade" id="detail-survey" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">
                            Detail Survey
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional-js')
    <script>
        $('.mdl').click(function() {
            const survey = $(this).data('survey');

            $('.modal-body').html('');

            var nama = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nama Responden</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.nama_responden + '</div></div><hr>');

            var jenis_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Jenis Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.jenis_pelayanan + '</div></div><hr>');

            var tgl_survey = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Tanggal Survey</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.tanggal_survey + '</div></div><hr>');

            var umur = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Umur</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.umur + '</div></div><hr>');

            var jenis_kelamin = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Jenis Kelamin</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.jenis_kelamin + '</div></div><hr>');

            var pendidikan_terakhir = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Pendidikan Terakhir</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.pendidikan_terakhir + '</div></div><hr>');

            var pekerjaan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Pekerjaan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.pekerjaan + '</div></div><hr>');

            var suku_bangsa = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Suku Bangsa</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.suku_bangsa + '</div></div><hr>');

            var kesesuaian_persyaratan_jns_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Kesesuaian Persyaratan Jenis Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.kesesuaian_persyaratan_jns_pelayanan + '</div></div><hr>');

            var harapan_kesesuaian_persyaratan_jns_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_kesesuaian_persyaratan_jns_pelayanan + '</div></div><hr>');

            var kemudahan_prosedur_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Kemudahan Prosedur Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.kemudahan_prosedur_pelayanan + '</div></div><hr>');

            var harapan_kemudahan_prosedur_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_kemudahan_prosedur_pelayanan + '</div></div><hr>');

            var kecepatan_waktu_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Kecepatan Waktu Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.kecepatan_waktu_pelayanan + '</div></div><hr>');

            var harapan_kecepatan_waktu_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_kecepatan_waktu_pelayanan + '</div></div><hr>');

            var kewajaran_biaya_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Kewajaran Biaya Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.kewajaran_biaya_pelayanan + '</div></div><hr>');

            var harapan_kewajaran_biaya_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_kewajaran_biaya_pelayanan + '</div></div><hr>');

            var kesesuaian_produk_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Kesesuaian Produk Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.kesesuaian_produk_pelayanan + '</div></div><hr>');

            var harapan_kesesuaian_produk_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_kesesuaian_produk_pelayanan + '</div></div><hr>');

            var kemampuan_petugas_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Kemampuan Petugas Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.kemampuan_petugas_pelayanan + '</div></div><hr>');

            var harapan_kemampuan_petugas_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_kemudahan_prosedur_pelayanan + '</div></div><hr>');

            var perilaku_petugas_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Perilaku Petugas Pelayanan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.perilaku_petugas_pelayanan + '</div></div><hr>');

            var harapan_perilaku_petugas_pelayanan = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_perilaku_petugas_pelayanan + '</div></div><hr>');

            var kualitas_sarpras = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Kualitas Sarana Prasarana</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.kualitas_sarpras + '</div></div><hr>');

            var harapan_kualitas_sarpras = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_kualitas_sarpras + '</div></div><hr>');

            var penanganan_pengaduan_pengguna = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Penanganan Pengaduan Pengguna</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.penanganan_pengaduan_pengguna + '</div></div><hr>');

            var harapan_penanganan_pengaduan_pengguna = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Nilai Harapan</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.harapan_penanganan_pengaduan_pengguna + '</div></div><hr>');

            var saran = $(
                '<div class="row justify-content-start"> <div class="col-md-5">Saran</div> <div class="col-md-2">:</div><div class="col-md-5">' +
                survey.saran + '</div></div><hr>');

            $('.modal-body').append(nama, jenis_pelayanan, tgl_survey, umur, jenis_kelamin, pendidikan_terakhir,
                pekerjaan, suku_bangsa, kesesuaian_persyaratan_jns_pelayanan,
                harapan_kesesuaian_persyaratan_jns_pelayanan, kemudahan_prosedur_pelayanan,
                harapan_kemudahan_prosedur_pelayanan, kecepatan_waktu_pelayanan,
                harapan_kecepatan_waktu_pelayanan, kewajaran_biaya_pelayanan, harapan_kewajaran_biaya_pelayanan,
                kesesuaian_produk_pelayanan, kemampuan_petugas_pelayanan, harapan_kemampuan_petugas_pelayanan,
                perilaku_petugas_pelayanan, harapan_perilaku_petugas_pelayanan, kualitas_sarpras,
                harapan_kualitas_sarpras, penanganan_pengaduan_pengguna, harapan_penanganan_pengaduan_pengguna,
                saran);
        });
    </script>

    <script src="{{ asset('admin/assets/js/pages/component-toasts.js') }}"></script>
@endsection
