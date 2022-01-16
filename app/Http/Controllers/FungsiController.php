<?php

namespace App\Http\Controllers;

use app\Models\Bidang;
use app\Models\Fungsi;
use App\Models\Fungsi as ModelsFungsi;
use App\Models\User;
use Illuminate\Http\Request;

class FungsiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtfungsi = \App\Models\Fungsi::where('nama_fungsi', 'like', '%' . $request->search . '%')->get();
        } else {
            $dtfungsi = ModelsFungsi::all();
        }
        return view('Fungsi.data-fungsi', compact('dtfungsi'));
    }
    public function create()
    {
        return view('Fungsi.create-fungsi');
    }
    public function store(Request $request)
    {
        // $user = User::all();
        ModelsFungsi::create([
            'nama_fungsi' => $request->nama_fungsi,
        ]);
        // Notification::send($user, new InvoicePaid($request->nama_fungsi));
        return redirect('data-fungsi')->with('success', 'Data Berhasil Tersimpan!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id_fungsi)
    {
        $peg = ModelsFungsi::findOrFail($id_fungsi);
        return view('Fungsi.edit-fungsi', compact('peg'));
    }
    public function update(Request $request, $id_fungsi)
    {
        $peg = ModelsFungsi::findOrFail($id_fungsi);
        $peg->update($request->all());
        return redirect('data-fungsi')->with('success', 'Data Berhasil Terupdate!');
    }
    public function destroy($id_fungsi)
    {
        $peg = ModelsFungsi::findOrFail($id_fungsi);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
