<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Siswa::orderBy('id', 'asc')->paginate(10);

        return view('index', [
            "datas" => $data,
            "title" => "Home"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create', [
            "title" => "Create New Data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nis = $request->old('nis');
        $nama = $request->old('nama');
        $kelas = $request->old('kelas');
        $alamat = $request->old('alamat');


        // melakukan validate untuk input yang dilakukan
        $request->validate([
            'nis'       => 'required|unique:Siswas,nis|numeric',
            'nama'      => 'required',
            'kelas'   => 'required',
            'alamat'   => 'required'
        ],[
        // error yang akan dikeluarkan ketika terjadi error
            'nis.required' => 'nis harus di isi',
            'nis.unique' => 'nis harus sudah ada',
            'nis.numeric' => 'nis harus berupa nomor',
            'nama.required' => 'nama harus di isi',
            'kelas.required' => 'kelas harus di isi',
            'alamat.required' => 'alamat harus di isi'
        ]);


        Siswa::create([
            "nama" => $request->nama,
            "kelas" => $request->kelas,
            "alamat" => $request->alamat,
            "nis" => $request->nis,
        ]);

        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $nis)
    {
        return view('edit', [
            "data" => $nis,
            "title" => "Edit : " . $nis->nis,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nis)
    {
        Siswa::where('nis', $nis)->update([
            "nama" => $request->nama,
            "kelas" => $request->kelas,
            "alamat" => $request->alamat,
        ]);

        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nis)
    {
        Siswa::where('nis', $nis)->delete();

        return redirect()->to('/');
    }
}
