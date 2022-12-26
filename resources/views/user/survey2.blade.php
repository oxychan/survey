@extends('user.partials.main_layout')

@section('container')
    <div id="app">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Radio</h4>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="harapan" class="form-label fw-bold">Harapan?</label>

                                            <div class="d-flex flex-row">
                                                <label class="form-label">Terendah</label>
                                                <div class="form-check mx-4">
                                                    <label class="form-label" for="hr1">1</label>
                                                    <input type='radio' name='harapan' class="form-check-input"
                                                        value='Layanan_Pendaftaran' id="hr1" />
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-label" for="hr2">2</label>
                                                    <input type='radio' name='harapan' class="form-check-input"
                                                        value='Layanan_Pendaftaran' id="hr2" />
                                                </div>
                                                <div class="form-check  mx-4">
                                                    <label class="form-label" for="hr3">3</label>
                                                    <input type='radio' name='harapan' class="form-check-input"
                                                        value='Layanan_Pendaftaran' id="hr3" />
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-label" for="hr4">4</label>
                                                    <input type='radio' name='harapan' class="form-check-input"
                                                        value='Layanan_Pendaftaran' id="hr4" />
                                                </div>
                                                <div class="form-check mx-4">
                                                    <label class="form-label" for="hr5">5</label>
                                                    <input type='radio' name='harapan' class="form-check-input"
                                                        value='Layanan_Pendaftaran' id="hr5" />
                                                </div>
                                                <label class="form-label">Tertinggi</label>
                                            </div>
                                        </div>
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
