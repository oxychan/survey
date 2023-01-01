<section class="section">
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <table class="table" id="table1">
                <div class="form-group">
                    <a href="{{ route('to-excel') }}" class="btn btn-success">Download
                        Excel</a>
                </div>
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
                                <form class="form-inline" action="{{ route('survey.destroy', $survey) }}" method="POST">
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
