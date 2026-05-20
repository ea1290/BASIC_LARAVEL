<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\StoreProdiRequest;
use App\Http\Requests\UpdateProdiRequest;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::with('fakultas')->get();

        return view('prodi.list-prodi', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();

        return view('prodi.add-prodi', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdiRequest $request)
    {
        $validated = $request->validated();

        $filePath = null;

        if ($request->hasFile('photo_profile_kaprodi')) {

            $filePath = Storage::disk('public')->putFile(
                'profile_kaprodi',
                $request->file('photo_profile_kaprodi')
            );
        }

        Prodi::create([
            'fakultas_id' => $validated['fakultas_id'],
            'nama_prodi' => $validated['nama_prodi'],
            'nama_kaprodi' => $validated['nama_kaprodi'],
            'photo_profile_kaprodi' => $filePath
        ]);

        return redirect('/prodi')
            ->with('success', 'Data prodi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        $prodi->load('fakultas');

        return view('prodi.show-prodi', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        $fakultas = Fakultas::all();

        return view('prodi.edit-prodi', compact('prodi', 'fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdiRequest $request, Prodi $prodi)
    {
        $validated = $request->validated();

        $photo = $prodi->photo_profile_kaprodi;

        if ($request->hasFile('photo_profile_kaprodi')) {

            // hapus file lama
            if ($prodi->photo_profile_kaprodi) {

                Storage::disk('public')->delete(
                    $prodi->photo_profile_kaprodi
                );
            }

            // upload file baru
            $photo = Storage::disk('public')->putFile(
                'profile_kaprodi',
                $request->file('photo_profile_kaprodi')
            );
        }

        $prodi->update([
            'fakultas_id' => $validated['fakultas_id'],
            'nama_prodi' => $validated['nama_prodi'],
            'nama_kaprodi' => $validated['nama_kaprodi'],
            'photo_profile_kaprodi' => $photo
        ]);

        return redirect('/prodi')
            ->with('success', 'Data prodi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        if ($prodi->photo_profile_kaprodi) {

            Storage::disk('public')->delete(
                $prodi->photo_profile_kaprodi
            );
        }

        $prodi->delete();

        return redirect('/prodi')
            ->with('success', 'Data prodi berhasil dihapus');
    }
}