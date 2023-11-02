<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
   

    protected $siswa;
    protected $kelas;

    
    public function __construct(Siswa $siswa , Kelas $kelas){
        $this->siswa = $siswa;
        $this->kelas = $kelas;
    }

    public function index()
    {
        
        $siswa = $this->siswa->all();
        return view('siswa.index',compact('siswa'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'namasiswa' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'kelas' => 'required',

        ]);

        $this->siswa->create($request->all());
        return redirect('/siswa')->with('success', 'Data kelas berhasil disimpan');

    }

       
    public function create()
    {
        $kelas = $this->kelas->all();
        return view('siswa.create', compact('kelas'));
    }

   
    public function show(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {
        
    }

   
    public function destroy(string $id)
    {
        
    }
}
