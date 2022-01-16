<?php

namespace App\Http\Controllers;

use App\Exports\SertifikatExport;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\Sertifikatimport;
use Maatwebsite\Excel\Facades\Excel;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search-sertifikasi')) {
            $dtsertifikasi = \App\Models\sertifikasi::where(
                'nama',
                'masa_berlaku',
                'tglberlaku',
                'like',
                '%' . $request->search . '%'
            )->get();
        } else {
            $dtsertifikasi = Sertifikasi::all();
        }
        return view('Sertifikasi.data-sertifikasi', compact('dtsertifikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sertifikasi.create-sertifikasi');
    }
    public function createsertifikasi()
    {
        return view('Sertifikasi.sertifikasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sertifikasi::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'masa_berlaku' => $request->masa_berlaku,
            'tglberlaku' => $request->tglberlaku,

        ]);
        return redirect('data-sertifikasi')->with('success', 'Data Berhasil Tersimpan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peg = Sertifikasi::findOrFail($id);
        return view('Sertifikasi.edit-sertifikasi', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peg = Sertifikasi::findOrFail($id);
        $peg->update($request->all());
        return redirect('data-sertifikasi')->with('success', 'Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Sertifikasi::findOrFail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
    public function export()
    {
        return Excel::download(new SertifikatExport, 'SERTIFIKASI PEGAWAI.xlsx');
    }
    public function Sertifikasiimportexcel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $namafile = rand() . $file->getClientOriginalName();
        $file->move('SertifikatPegawai', $namafile);

        Excel::import(new Sertifikatimport, 'SertifikatPegawai/' . $namafile);
        return redirect('data-sertifikasi')->with('success', 'Data Berhasil');
    }
}
