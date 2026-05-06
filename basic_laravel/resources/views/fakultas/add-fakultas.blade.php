<x-layout>
    <div>
        <h1>Belajar Laravel View</h1>

        <form action="/fakultas" method="post">
            @csrf
            <div class="form-group">
                <input 
                    name="name_fakultas"
                    type="text"
                    class="form-control"
                    placeholder="Nama Fakultas">
            </div>
            <div class="form-group">
                <input 
                    name="dekan"
                    type="text"
                    class="form-control" 
                    placeholder="Dekan">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</x-layout>