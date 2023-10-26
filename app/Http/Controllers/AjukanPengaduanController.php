<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AjukanPengaduanController extends Controller
{
    public function index()
    {
        $title = "Ajukan Pengaduan";
        $pengaduan = Pengaduan::all();
        return view ('ajukanpengaduan', [
            'pengaduan' => $pengaduan
        ], compact('title'));
    }

    public function create()
    {
        return view('ajukanpengaduan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis_terlapor' => 'required',
            'lingkup' => 'required',
            'judul' => 'required|max:255',
            'tanggal_kejadian' => 'required',
            'keterangan' => 'required',
            'nama_terlapor' => 'required',
            'jabatan_terlapor' => 'required',
            'instansi_terlapor' => 'required',
            'nama_pelapor' => 'nullable',
            'nomor_identitas' => 'nullable',
            'nomor_hp' => 'nullable',
            'email' => 'nullable',
            'instansi_pelapor' => 'nullable',
            'judul_file' => 'nullable',
            'gambar' => 'nullable'
        ]);

        $data['jenis_terlapor'] = $request->input('jenis_terlapor', 'Nilai Default atau Nilai yang Sesuai');

        // Simpan data ke dalam database
        Pengaduan::create($data);

        return redirect()->route('aktivitassaya.index')->with('success', 'Pengaduan Berhasil Diajukan');
    }
}