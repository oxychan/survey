<section class="section">
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div>
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-primary">Tambah</a>
                </div>
            </div>
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
                                <div class="form-inline">
                                    <a href="#" class="btn btn-secondary">Detail</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </div>
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
