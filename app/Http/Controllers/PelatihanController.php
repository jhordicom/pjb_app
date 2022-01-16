<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Imports\PelatihanImport;
use App\Exports\PelatihanExport;
use Maatwebsite\Excel\Facades\Excel;

class PelatihanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('searchi')) {
            $dtpelatihan = \App\Models\Pelatihan::where('nama_pelatihan$dtpelatihan', 'like', '%' . $request->searchi . '%')->get();
        } else {
            $dtpelatihan = Pelatihan::all();
        }
        return view('Pelatihan.data-pelatihan', compact('dtpelatihan'));
    }
    public function create()
    {
        return view('Pelatihan.create-pelatihan');
    }
    public function store(Request $request)
    {
        Pelatihan::create([
            'nama_pelatihan' => $request->nama_pelatihan,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai
        ]);
        return redirect('data-pelatihan')->with('success', 'Data Berhasil Tersimpan!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id_pelatihan)
    {
        $peg = Pelatihan::findOrFail($id_pelatihan);
        return view('Pelatihan.edit-pelatihan', compact('peg'));
    }
    public function update(Request $request, $id_pelatihan)
    {
        $peg = Pelatihan::findOrFail($id_pelatihan);
        $peg->update($request->all());
        return redirect('data-pelatihan')->with('success', 'Data Berhasil Terupdate!');
    }
    public function destroy($id_pelatihan)
    {
        $peg = Pelatihan::findOrFail($id_pelatihan);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
    public function export()
    {
        return Excel::download(new PelatihanExport, 'Pelatihan PEGAWAI.xlsx');
    }
    public function Pelatihanimportexcel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $namafile = rand() . $file->getClientOriginalName();
        $file->move('PelatihanPegawai', $namafile);


        Excel::import(new Pelatihanimport, 'PelatihanPegawai/' . $namafile);
        return redirect('data-pelatihan')->with('success', 'Data Berhasil');
    }
}
