@extends('user.partials.main_layout')

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">Form - 4/4</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="nama_responden">Saran Saudara Terkait Pelayanan yang
                                    diberikan ?</label>
                                <textarea class="form-control" id="nama_responden" placeholder="" name="nama_responden" rows="5" required> </textarea>
                            </div>

                            <div class="form-group mt-5 text-end">
                                <a class="btn btn-dark" href="{{ route('survey.3') }}">Sebelumnya </a>
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
