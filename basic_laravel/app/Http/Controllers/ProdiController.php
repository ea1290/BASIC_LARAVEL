<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Http\Requests\StoreProdiRequest;
use App\Http\Requests\UpdateProdiRequest;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::with(['fakultas'])->get();
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
        $validate = $request->safe();

        $filePath = Storage::disk("public")->putFile(
            "profile_kaprodi", $validate->file('photo_kaprodi')
        );
            Prodi::create([
                'fakultas_id' => $validate->fakultas_id,
                'nama_prodi' => $validate->name_prodi,
                'nama_kaprodi' => $validate->name_kaprodi,
                'photo_kaprodi' => $filePath

        ]);

        return redirect('/prodi')->with('success', 'Data prodi Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdiRequest $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
