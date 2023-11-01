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
            'merja' => 'required',
        ]);

        $this->kelas->create($request->all());

        return redirect()->route('kelas.create')->with('success', 'Data kelas berhasil disimpan');
    }
}
