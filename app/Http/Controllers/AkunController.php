<?php

namespace App\Http\Controllers;
use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $akun = Akun::paginate(10);
        return view('dataakun.index', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('dataakun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
        ],[
            'nama' => 'Tidak Boleh Kosong',
            'username' => 'Tidak Boleh Kosong',
            'email' => 'Tidak Boleh Kosong',
        ]
    );

    Akun::create([
        'nama' => $request->nama,
        'username' => $request->username,
        'email' => $request->email,
    ]);
    return redirect()->route('akun.index')->with('success', 'Data Berhasil Ditambahkan');

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
        $akun = Akun::where('id', $id)->first();
        return view('dataakun.edit', compact('akun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
]);


        Akun::where('id', $id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
        ]);
        return redirect()->route('akun.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Akun::where('id', $id)->delete();
        return redirect()->route('akun.index')->with('success', 'Data Berhasil Dihapus');
    }
}
