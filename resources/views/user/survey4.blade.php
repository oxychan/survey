@extends('user.partials.main_layout')

@section('additional-css')
    <style>
        #saran {
            resize: none;
        }
    </style>
@endsection

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">Form - 4/4</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('survey.step.four') }}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="form-label fw-bold" for="saran">Saran Saudara Terkait Pelayanan yang
                                    diberikan ?</label>
                                <textarea class="form-control" id="saran" name="saran" rows="6">{{ old('saran') ?? ($survey->saran ?? '') }}</textarea>
                            </div>

                            @error('saran')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror

                            <div class="form-group mt-5 text-end">
                                <a class="btn btn-dark" href="{{ route('survey.step.three') }}">Sebelumnya </a>
                                <input type="submit" class="btn btn-primary" value="Kirim">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
