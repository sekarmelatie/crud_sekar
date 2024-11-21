<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ]);
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        return redirect()->back();

    }

    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('edit', compact('mhs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required'
        ]);

        $mhs = Mahasiswa::findOrFail($id)->update($request->all());
        return redirect()->back();
    }

    public function hapus($id)
    {
        $mhs = Mahasiswa::findOrFail($id)->delete();
        return redirect()->back();
    }

}

