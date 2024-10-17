<?php

namespace App\Http\Controllers;
use App\Models\DataSiswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datasiswa = DataSiswa::paginate(8);
        return view('tentangsiswa.index',compact('datasiswa'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tentangsiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'kelas' => 'required',
            'hobi' => 'required',
        ], [
            'name' => 'Tidak Boleh Kosong',
            'nis' => 'Tidak Boleh Kosong',
            'kelas' => 'Tidak Boleh Kosong',
            'hobi' => 'Tidak Boleh Kosong',
        ]
        );

        DataSiswa::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'hobi' => $request->hobi,
        ]);
        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Ditambahkan');
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
    public function edit(string $id)
    {
        //
        $datasiswa = DataSiswa::where('id', $id)->first();
        return view('tentangsiswa.edit',compact('datasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'kelas' => 'required',
            'hobi' => 'required',
        ]);

        DataSiswa::where('id', $id)->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'hobi' => $request->hobi,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hapusdata = DataSiswa::where('id', $id)->delete();
        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Dihapus');
    }
}

