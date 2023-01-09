<section class="section">
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('to-excel') }}" method="GET">
                @csrf
                <div class="form-inline">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="start_date" class="form-label">Tanggal Awal</label>
                            <input type="date" class="form-control" name="start_date" id="start_date">
                            @error('start_date')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="end_date" class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="end_date" id="end_date">
                            @error('end_date')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" class="btn btn-success" value="Download Excel">
                </div>
            </form>
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>Nama Responden</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Tgl Survey</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($surveys as $survey)
                        <tr>
                            <td>{{ $survey->nama_responden }}</td>
                            <td>{{ $survey->umur }}</td>
                            <td>{{ $survey->jenis_kelamin }}</td>
                            <td>{{ $survey->pekerjaan }}</td>
                            <td>{{ $survey->tanggal_survey }}</td>
                            <td>
                                <form class="form-inline" action="{{ route('survey.destroy', $survey) }}"
                                    method="POST">
                                    @csrf
                                    <a type="button" class="btn btn-outline-success mdl" data-bs-toggle="modal"
                                        data-bs-target="#detail-survey" data-survey="{{ $survey }}">Detail</a>
                                    <input class="btn btn-danger" type="submit" value="Hapus" />
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p>Data User Masih Kosong</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
