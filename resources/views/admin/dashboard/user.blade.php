@extends('admin.partials.main_layout')

@section('content')
    <div class="page-heading">
        <h3>Statistik User</h3>
    </div>

    <div>
        @include('admin.partials.data_tables_user', ['title' => 'Data User', 'users' => $users])
    </div>
@endsection
