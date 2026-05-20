<x-layout title="Tambah Prodi">

    <h1>Tambah Prodi</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/prodi" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <select name="fakultas_id" class="form-select">
                <option value="">Pilih Fakultas</option>

                @foreach ($fakultas as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->nama_fakultas }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="form-group mb-3">
            <input 
                name="nama_prodi" 
                type="text" 
                class="form-control" 
                placeholder="Nama Prodi"
            >
        </div>

        <div class="form-group mb-3">
            <input 
                name="nama_kaprodi" 
                type="text" 
                class="form-control" 
                placeholder="Nama Kaprodi"
            >
        </div>

        <div class="form-group mb-3">
            <input 
                name="photo_profile_kaprodi" 
                type="file" 
                accept="image/*" 
                class="form-control"
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

    </form>

</x-layout>