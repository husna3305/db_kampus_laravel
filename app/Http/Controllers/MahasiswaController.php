<?php

namespace App\Http\Controllers;

use App\Models\TabelMahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index()
    {
        $result = TabelMahasiswa::get();
        return view('mahasiswa', compact('result'));
    }

    function tambah()
    {
        return view('mahasiswa_tambah');
    }

    function simpanTambah(Request $request)
    {
        TabelMahasiswa::create($request->all());
        return "<script>alert('Data berhasil disimpan');window.location='" . route('mahasiswa') . "';</script>";
    }

    function ubah($nim)
    {
        $row = TabelMahasiswa::where(['nim' => $nim])->first();
        return view('mahasiswa_ubah', compact('row'));
    }

    function simpanUbah(Request $request, $nim)
    {
        TabelMahasiswa::where(['nim' => $nim])->update($request->except('_token'));
        return "<script>alert('Data berhasil diubah');window.location='" . route('mahasiswa') . "';</script>";
    }
}
