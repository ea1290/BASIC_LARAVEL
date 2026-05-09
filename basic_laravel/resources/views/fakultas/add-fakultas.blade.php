<x-layout title="Add-Fakultas">
    <div>
        <h1>Add Fakultas</h1>

        @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form action="/fakultas" method="post">
            @csrf
            <div class="form-group">
                <input 
                    name="name_fakultas"
                    type="text"
                    class="form-control"
                    value="{{ old('name_fakultas') }}"
                    placeholder="Nama_Fakultas">
            </div>
            <div class="form-group">
                <input 
                    name="name_dekan"
                    type="text"
                    class="form-control" 
                    value="{{ old('name_dekan') }}"
                    placeholder="Dekan">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</x-layout>