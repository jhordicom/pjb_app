<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bidang;
use App\Models\Pelatihan;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Imports\UserImports;
use Maatwebsite\Excel\Facades\Excel;

class PegawaiController extends Controller
{
    public function index(Request $request)

    {
        if ($request->has('search')) {
            $dtpegawai = \App\Models\User::where('name', 'like', '%' . $request->search . '%')->get();
        } else {
            $dtpegawai = User::all();
        }
        $dtpegawai = User::OrderBy('created_at', 'desc')->paginate();
        return view('Halaman.data-pegawai', compact('dtpegawai'));
    }



    public function create()
    {
        $namapgw = Pegawai::all();
        $dtjbt = Jabatan::all();
        $dtpelatihan = Pelatihan::all();
        $dtbidang = Bidang::all();
        return view('Halaman.create-pegawai', compact('namapgw', 'dtjbt', 'dtpelatihan', 'dtbidang'));
    }
    public function store(Request $request)
    {
        $password = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'lokasi' => $request->lokasi,
            'pendidikan' => $request->pendidikan,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'tgl_bekerja' => $request->tgl_bekerja,
            'NID' => $request->NID,
            'email' => $request->email,
            'level' => $request->level,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_jabatan' => $request->id_jabatan,
            'id_bidang' => $request->id_bidang,
            'password' => $password,
        ]);
        return redirect('data-pegawai')->with('success', 'Data Berhasil Tersimpan!');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $peg = User::findOrFail($id);
        $dtjbt = Jabatan::all();
        $dtpelatihan = Pelatihan::all();
        $dtbidang = Bidang::all();
        return view('Halaman.edit-pegawai', compact('peg', 'dtjbt', 'dtpelatihan', 'dtbidang'));
    }

    public function update(Request $request, $id)
    {
        $password = Hash::make($request->password);
        $peg = User::findOrFail($id);
        $peg->update($request->all());
        return redirect('data-pegawai')->with('success', 'Data Berhasil Terupdate!');
    }

    public function destroy($id)
    {
        $peg = User::findOrFail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
    public function export()
    {
        return Excel::download(new UserExport, 'DATA PEGAWAI.xlsx');
    }
    public function userimportexcel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $namafile = rand() . $file->getClientOriginalName();
        $file->move('DataPegawai', $namafile);

        Excel::import(new UserImports, 'DataPegawai/' . $namafile);
        return redirect('data-pegawai')->with('success', 'Data Berhasil');
    }
}
