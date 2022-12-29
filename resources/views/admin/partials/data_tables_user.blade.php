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
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="form-inline">
                                    <a href="#" class="btn btn-primary">Edit</a>
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
