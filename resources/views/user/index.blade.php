@extends('user.partials.main_layout')

@section('container')
    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1
                                    class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                    Selamat Datang di <strong>E-survey</strong>
                                </h1>
                                <p class="banner-body text-muted py-3 mx-0 px-0">
                                    Website Ini Digunakan Untuk Mengisi Survei Kepuasan Masyarakat Terhadap Pengadilan Agama
                                    Banyuwangi Kelas 1A
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4"
                                    href="{{ route('survey.step.one') }}" role="button">Isi Survei</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End slider -->

            </div>
        </div>
        <!-- End Banner Hero -->
    @endsection
