<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $var_nama = "Jordiansyah";
        return view('Dashboard.struktur', compact('var_nama'));
    }


    public function halamandua()
    {
        return view('Halaman.halaman-dua');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    }

    public function dashboard()
    {
        return view('Dashboard.home');
    }
    public function struktur()
    {
        return view('Dashboard.struktur');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
