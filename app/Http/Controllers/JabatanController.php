<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Imports\JabatanImport;
use App\Exports\JabatanExport;
use Maatwebsite\Excel\Facades\Excel;

class JabatanController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtjabatan = \App\Models\Jabatan::where('nama_jabatan', 'like', '%' . $request->search . '%')->get();
        } else {
            $dtjabatan = Jabatan::all();
        }

        return view('Jabatan.data-jabatan', compact('dtjabatan'));
    }

    public function create()
    {
        return view('Jabatan.create-jabatan');
    }

    public function store(Request $request)
    {
        $user = User::all();
        Jabatan::create([
            'nama_jabatan' => $request->nama_jabatan,
        ]);
        Notification::send($user, new InvoicePaid($request->nama_jabatan));
        return redirect('data-jabatan')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_jabatan)
    {
        $peg = Jabatan::findOrFail($id_jabatan);
        return view('Jabatan.edit-jabatan', compact('peg'));
    }

    public function update(Request $request, $id_jabatan)
    {
        $peg = Jabatan::findOrFail($id_jabatan);
        $peg->update($request->all());
        return redirect('data-jabatan')->with('success', 'Data Berhasil Terupdate!');
    }

    public function destroy($id_jabatan)
    {
        $peg = Jabatan::findOrFail($id_jabatan);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
    public function export()
    {
        return Excel::download(new JabatanExport, 'Jabatan PEGAWAI.xlsx');
    }
    public function jabatanimportexcel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $namafile = rand() . $file->getClientOriginalName();
        $file->move('JabatanPegawai', $namafile);


        Excel::import(new Jabatanimport, 'JabatanPegawai/' . $namafile);
        return redirect('data-jabatan')->with('success', 'Data Berhasil');
    }
}
