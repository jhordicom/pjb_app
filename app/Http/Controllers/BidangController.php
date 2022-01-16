<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\User;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $dtbidang = \App\Models\Bidang::where('nama_bidang', 'like', '%' . $request->search . '%')->get();
        } else {
            $dtbidang = Bidang::all();
        }
        return view('Bidang.data-bidang', compact('dtbidang'));
    }
    public function create()
    {
        return view('Bidang.create-bidang');
    }
    public function store(Request $request)
    {
        // $user = User::all();
        Bidang::create([
            'nama_bidang' => $request->nama_bidang,
        ]);
        // Notification::send($user, new InvoicePaid($request->nama_bidang));
        return redirect('data-bidang')->with('success', 'Data Berhasil Tersimpan!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id_bidang)
    {
        $peg = Bidang::findOrFail($id_bidang);
        return view('Bidang.edit-bidang', compact('peg'));
    }
    public function update(Request $request, $id_bidang)
    {
        $peg = Bidang::findOrFail($id_bidang);
        $peg->update($request->all());
        return redirect('data-bidang')->with('success', 'Data Berhasil Terupdate!');
    }
    public function destroy($id_bidang)
    {
        $peg = Bidang::findOrFail($id_bidang);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
