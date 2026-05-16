<x-layout title="Tambah Prodi">
    <h1>Tambah Prodi</h1>
    <form action="/prodi" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <select name="fakultas_id" class="form-select">
                <option value="">Pilih Fakultas</option>
                @foreach ($fakultas as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div> 
        
        <div class="form-group">
            <input name="nama_prodi" type="text" class="form-control" placeholder="Nama Prodi">
        </div>
        <div class="form-group">
            <input name="nama_kaprodi" type="text" class="form-control" placeholder="Nama Kaprodi">
        </div> 
        <div>
            <div class="from-group">
                <input name="photo_kaprodi" type="file" accept="image/*" class="form-control" placeholder="Photo Prodi">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>