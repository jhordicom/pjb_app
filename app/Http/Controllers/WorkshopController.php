<?php

namespace App\Http\Controllers;

use App\Exports\WorkshopExport;
use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Imports\WorkshopImport;
use Maatwebsite\Excel\Facades\Excel;

class WorkshopController extends Controller
{
    public function index()
    {
        $dtworkshop = Workshop::all();
        return view('Workshop.data-workshop', compact('dtworkshop'));
    }
    public function create()
    {
        return view('Workshop.create-workshop');
    }
    public function store(Request $request)
    {
        Workshop::create([
            'nama_workshop' => $request->nama_workshop,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
        ]);
        return redirect('data-workshop')->with('success', 'Data Berhasil Tersimpan!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id_work)
    {
        $peg = Workshop::findOrFail($id_work);
        return view('Workshop.edit-workshop', compact('peg'));
    }
    public function update(Request $request, $id_work)
    {
        $peg = Workshop::findOrFail($id_work);
        $peg->update($request->all());
        return redirect('data-workshop')->with('success', 'Data Berhasil Terupdate!');
    }
    public function destroy($id_work)
    {
        $peg = Workshop::findOrFail($id_work);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
    public function export()
    {
        return Excel::download(new WorkshopExport, 'Workshop PEGAWAI.xlsx');
    }
    public function Workshopimportexcel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $namafile = rand() . $file->getClientOriginalName();
        $file->move('WorkshopPegawai', $namafile);


        Excel::import(new WorkshopImport, 'WorkshopPegawai/' . $namafile);
        return redirect('data-workshop')->with('success', 'Data Berhasil');
    }
}
