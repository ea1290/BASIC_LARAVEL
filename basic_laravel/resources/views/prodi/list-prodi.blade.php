<x-layout>
    <h1>List Prodi</h1>
    <ul>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name Prodi</th>
                    <th>Name Kaprodi</th>
                    <th>Nama Fakultas</th>
                    <th>Photo Kaprodi</th>
                </tr>
            </thead>
        </table>
        <tbody>
            @foreach ($prodi as $item)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_prodi }}</td>
                        <td>{{ $item->nama_kaprodi }}</td>
                        <td>{{ $item->fakultas->name }}</td>
                        <td> 
                            <img src="{{ asset('storage/' . $item->photo_kaprodi) }}" class="img-thumbnail" alt="Photo Kaprodi" width="100"></td>

                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </ul> 
    
    <a href="/prodi/create">Add Prodi</a>
    <a href="/edit-prodi">Edit Prodi</a>