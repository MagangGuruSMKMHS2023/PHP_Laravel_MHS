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

    public function edit($id)
    {
        $siswa = $this->siswa->find($id);
        $kelas = $this->kelas->all();

        return view('siswa.edit', compact('siswa','kelas'));
    }

   
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::find($id);
        

        $this->validate($request, [
            'namasiswa' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'kelas' => 'required',
           
        ]);

       
            $siswa->namasiswa = $request->input('namasiswa');
            $siswa->alamat = $request->input('alamat');
            $siswa-> jeniskelamin = $request->input('jeniskelamin');
            $siswa->kelas = $request->input('kelas');
        
            $siswa->save();
            return redirect("/siswa"); 
    }

   
    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect("/siswa");   
    }
}
