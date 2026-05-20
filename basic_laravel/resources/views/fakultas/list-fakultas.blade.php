<x-layout>
    <h1>List Fakultas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Fakultas</th>
                <th>Nama Dekan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($fakultas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_fakultas }}</td>
                <td>{{ $item->nama_dekan }}</td>
                <td>
                    <button>Edit</button>
                    <button>Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <a href="/fakultas/create">Add Fakultas</a>
    <a href="/edit-fakultas">Edit Fakultas</a>

</x-layout>