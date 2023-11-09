<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Jadwal;
use App\Models\Mapel;


class JadwalController extends Controller
{
    protected $kelas;
    protected $mapel;
    protected $jadwal;


    public function __construct(Kelas $kelas, Mapel $mapel, Jadwal $jadwal)
    {
        $this->kelas = $kelas;
        $this->mapel = $mapel;
        $this->jadwal = $jadwal;

    }

    public function index()
    {
        //
        $jadwal = Jadwal::join('mapel', 'jadwal.mapel', '=', 'mapel.id_mapel')
        ->join('kelas', 'jadwal.kelas', '=', 'kelas.id_kelas')
        ->select('jadwal.*', 'mapel.*', 'kelas.*')
        ->get();
        return view('jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        $kelas = $this->kelas->all();
        $mapel = $this->mapel->all();
        return view('jadwal.create',compact('mapel','kelas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mapel' => 'required',
            'kelas' => 'required',
            'jam' => 'required',   
        ]);

       

        Jadwal::create([
            'mapel' => $request->input('mapel'),
            'kelas' => $request->input('kelas'),
            'jam' => $request->input('jam'),
        ]);

        return redirect('/jadwal')->with('success', 'Data jadwal berhasil disimpan');
    }

    public function edit($id)
    {
        $jadwal = $this->jadwal->find($id);
        $mapel = $this->mapel->all();
        $kelas = $this->kelas->all();

        return view('jadwal.edit', compact('jadwal','mapel','kelas'));
    }

    public function update(Request $request , $id){
        $jadwal = Jadwal::find($id);

        $this->validate($request, [
            'mapel' => 'required',
            'kelas' => 'required',
            'jam' => 'required',
        ]);


            $jadwal->mapel = $request->input('mapel');
            $jadwal->kelas = $request->input('kelas');
            $jadwal->jam = $request->input('jam');
            $jadwal->save();
            return redirect("/jadwal");

    }

    public function delete($id){
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect("/jadwal");
        
    }


}
