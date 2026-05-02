<x-layout>
    <h1>List Fakultas</h1>
    <ul>
        @foreach ($fakultas as $item)
        <li>
            <p>{{ $item->id }}  |
            {{ $item->name }}  |
            {{ $item->dekan }}</p>
        </li>
        @endforeach
        
    </ul>
    
    <a href="/fakultas/create">Add Fakultas</a>
    <a href="/edit-fakultas">Edit Fakultas</a>
</x-layout>