<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    protected $kelas;

    public function __construct(Kelas $kelas)
    {
        $this->kelas = $kelas;
    }

    public function index()
    {
        $kelas = $this->kelas->all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'namakelas' => 'required',
            'walikelas' => 'required',
            'ketuakelas' => 'required',
            'kursi' => 'required',
            'meja' => 'required',
            'gambar_kelas' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $gambar_kelas = $request->file('gambar_kelas');
        $gambar_kelas_name = time(). '.' . $gambar_kelas->getClientOriginalExtension();
        $gambar_kelas->move(public_path('upload_gambar'), $gambar_kelas_name);

        // $this->kelas->create($request->all());

        Kelas::create([
            'namakelas' => $request->input('namakelas'),
            'walikelas' => $request->input('walikelas'),
            'ketuakelas' => $request->input('ketuakelas'),
            'kursi' => $request->input('kursi'),
            'meja' => $request->input('meja'),
            'gambar_kelas' => $gambar_kelas_name,
        ]);

        return redirect('/kelas')->with('success', 'Data kelas berhasil disimpan');
    }
}
