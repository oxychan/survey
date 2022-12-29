@extends('admin.partials.main_layout')

@section('content')
    <div class="page-heading">
        <h3>Statistik Survey</h3>
    </div>

    <div>
        @include('admin.partials.data_tables_survey', ['title' => 'Data Survey', 'surveys' => $surveys])
    </div>
@endsection
