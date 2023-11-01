<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
   
    public function index()
    {
        //
        $kelas = Kelas:: all();
        return view('kelas.index', compact(["kelas"]));
    }

    
    public function store(Request $request)
    {
        //
        $this->validate($request,
            [
                'namakelas' => 'required',
                'walikelas' => 'required',
                'ketuakelas' => 'required',
                'kursi' => 'required',
                'meja' => 'required',

            ]
        );

        Kelas::create($request->all());
        return redirect()->route('kelas.index')->with('success','Kelas Berhasil Ditambah');
    }

}