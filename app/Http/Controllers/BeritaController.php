<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('backend.content.berita.list', compact('berita'));
    }

    public function tambah()
    {
        return view('backend.content.berita.formTambah');
    }

    public function prosesTambah(Request $request)
    {
        $this->validate($request, [
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'gambar_berita' => 'required',
        ]);

        $request->file('gambar_berita')->store('public');
        $gambar_berita = $request->file('gambar_berita')->hashName();

        $berita = new Berita();
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;
        $berita->gambar_berita = $gambar_berita;

        try {
            $berita->save();
            return redirect(route('berita.index'))->with('pesan', ['success', 'Berhasil tambah berita']);
        } catch (\Exception $e) {
            return redirect(route('berita.index'))->with('pesan', ['danger', 'Gagal tambah berita']);
        }
    }

    public function ubah($id)
    {
        $berita = Berita::findOrFail($id);
        return view('backend.content.berita.formUbah', compact('berita'));
    }

    public function prosesUbah(Request $request, $id)
    {
        $this->validate($request, [
            'judul_berita' => 'required',
            'isi_berita' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;

        if ($request->hasFile('gambar_berita')) {
            $request->file('gambar_berita')->store('public');
            $gambar_berita = $request->file('gambar_berita')->hashName();
            $berita->gambar_berita = $gambar_berita;
        }

        try {
            $berita->save();
            return redirect(route('berita.index'))->with('pesan', ['success', 'Berhasil ubah berita']);
        } catch (\Exception $e) {
            return redirect(route('berita.index'))->with('pesan', ['danger', 'Gagal ubah berita']);
        }
    }

    public function hapus($id)
    {
        $berita = Berita::findOrFail($id);

        try {
            $berita->delete();
            return redirect(route('berita.index'))->with('pesan', ['success', 'Berhasil hapus berita']);
        } catch (\Exception $e) {
            return redirect(route('berita.index'))->with('pesan', ['danger', 'Gagal hapus berita']);
        }
    }
}
