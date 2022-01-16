<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{

    public function index()
    {
        $dtdivisi = Divisi::all();
        return view('Divisi.data-divisi', compact('dtdivisi'));
    }

    public function create()
    {
        return view('Divisi.create-divisi');
    }

    public function store(Request $request)
    {
        Divisi::create([
            'nama_divisi' => $request->nama_divisi,
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'NID' => $request->NID,

        ]);
        return redirect('data-divisi')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function show()
    {
        return view('Foldercoba.coba-template');
    }

    public function edit($id)
    {
        $div = Divisi::findOrFail($id);
        return view('Divisi.edit-divisi', compact('div'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $div = Divisi::findOrFail($id);
        $div->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
