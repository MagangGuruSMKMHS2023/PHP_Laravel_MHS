<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Guru;

class KelasController extends Controller
{
    protected $kelas;
    protected $guru;


    public function __construct(Kelas $kelas, Guru $guru)
    {
        $this->kelas = $kelas;
        $this->guru = $guru;

    }

    public function index()
    {
        $kelas = $this->kelas->all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        $guru = $this->guru->all();
        return view('kelas.create',compact('guru'));
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

    public function edit($id)
    {
        $kelas = $this->kelas->find($id);
        $guru = $this->guru->all();

        return view('kelas.edit', compact('kelas','guru'));
    }

    public function update(Request $request , $id){
        $kelas = Kelas::find($id);

        $this->validate($request, [
            'namakelas' => 'required',
            'walikelas' => 'required',
            'ketuakelas' => 'required',
            'kursi' => 'required',
            'meja' => 'required',
            'gambar_kelas' => 'image|mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('gambar_kelas')){
            $gambar_kelas = $request->file('gambar_kelas');
            $gambar_kelas_name = time(). '.' . $gambar_kelas->getClientOriginalExtension();
            $gambar_kelas->move(public_path('upload_gambar'), $gambar_kelas_name); 
            $kelas->gambar_kelas = $gambar_kelas_name;
        }

            $kelas->namakelas = $request->input('namakelas');
            $kelas->walikelas = $request->input('walikelas');
            $kelas-> ketuakelas = $request->input('ketuakelas');
            $kelas->kursi = $request->input('kursi');
            $kelas-> meja = $request->input('meja');

            $kelas->save();
            return redirect("/kelas");

    }

    public function delete($id){
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect("/kelas");
        
    }

    public function cari(Request $request){
        $search = $request->input('cari');
        $kelas = Kelas::where('id_kelas','LIKE',"%$search%")
                        ->orWhere('namakelas','LIKE',"%$search%")
                        ->get();
       return view('kelas.index', compact('kelas'));                 
    }



}
