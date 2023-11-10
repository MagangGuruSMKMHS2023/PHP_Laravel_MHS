<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Nilai;
use Elibyy\TCPDF\Facades\TCPDF;

class NilaiController extends Controller
{
    protected $kelas;
    protected $siswa;
    protected $nilai;

    public function __construct(Kelas $kelas, Siswa $siswa, Nilai $nilai)
    {
        $this->kelas = $kelas;
        $this->siswa = $siswa;
        $this->nilai = $nilai;


    }

    public function index()
    {
        //
        $kelas = $this->kelas->all();

        $nilai = Nilai::join('siswa', 'nilai.id_siswa', '=', 'siswa.id_siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->select('nilai.*', 'siswa.*','kelas.*')
        ->get();
        return view('nilai.index', compact('nilai','kelas'));
    }

    public function create()
    {
        $kelas = $this->kelas->all();
        $siswa = $this->siswa->all();
        return view('nilai.create',compact('siswa','kelas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_siswa' => 'required',
            'tugas' => 'required',
            'kuis' => 'required',
            'uts' => 'required',
            'uas' => 'required',   
        ]);

        $total_nilai = 0.10 * $request->input('tugas') + 0.20 * $request->input('kuis') + 0.30 * $request->input('uts') + 0.40 * $request->input('uas');

        if($total_nilai > 90){
            $keterangan = 'A Sangat Bagus';
        } elseif ($total_nilai > 80) {
            $keterangan = 'B Baik';
        }elseif ($total_nilai > 75) {
            $keterangan = 'C Lumayan';
        }elseif ($total_nilai > 69) {
            $keterangan = 'D Cukup';
        }elseif ($total_nilai > 50) {
            $keterangan = 'E Sangat Kurang';
        }else{ 
                $keterangan = 'F Butuh Belajar Kiat';
        }

        Nilai::create([
            'id_siswa' => $request->input('id_siswa'),
            'tugas' => $request->input('tugas'),
            'kuis' => $request->input('kuis'),
            'uts' => $request->input('uts'),
            'uas' => $request->input('uas'),
            'total_nilai' => $total_nilai,
            'keterangan' => $keterangan,

        ]);

        return redirect('/nilai')->with('success', 'Data nilai berhasil disimpan');
    }


    public function edit($id)
    {
        $nilai = $this->nilai->find($id);
        $siswa = $this->siswa->all();
        $kelas = $this->kelas->all();

        return view('nilai.edit', compact('nilai','siswa','kelas'));
    }

    public function update(Request $request , $id){
        $nilai = Nilai::find($id);

        $this->validate($request, [
            'id_siswa' => 'required',
            'tugas' => 'required',
            'kuis' => 'required',
            'uts' => 'required',
            'uas' => 'required',   
        ]);

        $total_nilai = 0.10 * $request->input('tugas') + 0.20 * $request->input('kuis') + 0.30 * $request->input('uts') + 0.40 * $request->input('uas');

        if($total_nilai > 90){
            $keterangan = 'A Sangat Bagus';
        } elseif ($total_nilai > 80) {
            $keterangan = 'B Baik';
        }elseif ($total_nilai > 75) {
            $keterangan = 'C Lumayan';
        }elseif ($total_nilai > 69) {
            $keterangan = 'D Cukup';
        }elseif ($total_nilai > 50) {
            $keterangan = 'E Sangat Kurang';
        }else{ 
                $keterangan = 'F Butuh Belajar Kiat';
        }

            $nilai->id_siswa = $request->input('id_siswa');
            $nilai->tugas = $request->input('tugas');
            $nilai->kuis = $request->input('kuis');
            $nilai->uts = $request->input('uts');
            $nilai->uas = $request->input('uas');
            $nilai->total_nilai = $total_nilai;
            $nilai->keterangan = $keterangan;

            $nilai->save();
            return redirect("/nilai");

    }

    public function delete($id){
        $nilai = Nilai::find($id);
        $nilai->delete();
        return redirect("/nilai");
        
    }
    
    public function pdf(Request $request)
    {
       
        $carikelas = $request->input('kelas');
        $filename = 'Nilai Siswa '. $carikelas .' .pdf';

        $nilai = Nilai::join('siswa', 'nilai.id_siswa', '=', 'siswa.id_siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->select('nilai.*', 'siswa.*','kelas.*')
        ->where('kelas.namakelas','=', $carikelas)
        ->get();

        $kelas = Kelas::where('namakelas','=',$carikelas)
        ->limit(1)
        ->get();
  
        $html = view()->make('nilaisiswa', compact('nilai','kelas'))->render();
  
        $pdf = new TCPDF;
          
        $pdf::SetTitle('NilaiSiswa '.$carikelas);
        $pdf::AddPage('L','A4');
        $pdf::writeHTML($html, true, false, true, false, '');
  
        $pdf::Output(public_path($filename), 'F');
  
        return response()->download(public_path($filename));
    }
}
