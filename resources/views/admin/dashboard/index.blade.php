@extends('admin.partials.main_layout')

@section('content')
    <div class="page-heading">
        <h3>Statistik Survey</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-2 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-center">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-lg-12 col-xl-12 col-xxl-9">
                                        <h6 class="text-muted font-semibold">
                                            Jumlah Survey
                                        </h6>
                                        <h6 class="font-extrabold mb-0">{{ $count->survey }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-2 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-center">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-lg-12 col-xl-12 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Jumlah Admin</h6>
                                        <h6 class="font-extrabold mb-0">{{ $count->user }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Jumlah Pengisi Survey {{ date('Y') }}</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="Face 1" />
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ auth()->user()->name }}</h5>
                                <h6 class="text-muted mb-0">{{ '@' . auth()->user()->username }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Detail User</h4>
                    </div>
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="name ms-4">
                                <h5 class="mb-1">Nama</h5>
                                <h6 class="text-muted mb-0">{{ auth()->user()->name }}</h6>
                            </div>
                        </div>

                        <div class="recent-message d-flex px-4 py-3">
                            <div class="name ms-4">
                                <h5 class="mb-1">Email</h5>
                                <h6 class="text-muted mb-0">{{ auth()->user()->email }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
