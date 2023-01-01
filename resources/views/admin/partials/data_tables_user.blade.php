<section class="section">
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            {{-- <div>
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-primary">Tambah</a>
                </div>
            </div> --}}
            <table class="table" id="table1">
                <thead>

                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @empty
                        <p>Data User Masih Kosong</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
