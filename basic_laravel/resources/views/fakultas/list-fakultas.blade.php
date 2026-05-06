<x-layout>
    <h1>List Fakultas</h1>
    
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name Fakutas</th>
                    <th>Nama Dekan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($fakultas as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->dekan }}</td>
            <td> 
                <a href="/fakultas/{{ $item->id }}">Detail</a>
                <a href="/fakultas/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                <form action="/fakultas/{{ $item->id }}" method="post" style="display:inline-block;">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        
    
    
    <a href="/fakultas/create">Add Fakultas</a>
    <a href="/edit-fakultas">Edit Fakultas</a>
</x-layout>