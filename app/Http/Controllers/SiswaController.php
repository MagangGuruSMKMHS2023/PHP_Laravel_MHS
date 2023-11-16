<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use Elibyy\TCPDF\Facades\TCPDF;


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
        
        $siswa = Siswa::join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->select('siswa.*', 'kelas.*')
        ->get();
        return view('siswa.index',compact('siswa'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'namasiswa' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'id_kelas' => 'required',
            'gambar_siswa' => 'required|image|mimes:jpeg,png,jpg'

        ]);
        $gambar_siswa = $request->file('gambar_siswa');
        $gambar_siswa_name = time(). '.' . $gambar_siswa->getClientOriginalExtension();
        $gambar_siswa->move(public_path('upload_gambar'), $gambar_siswa_name);

        // $this->siswa->create($request->all());
        Siswa::create([
            'namasiswa' => $request->input('namasiswa'),
            'alamat' => $request->input('alamat'),
            'jeniskelamin' => $request->input('jeniskelamin'),
            'id_kelas' => $request->input('id_kelas'),
            'gambar_siswa' => $gambar_siswa_name

        ]);
        return redirect('/siswa')->with('success', 'Data kelas berhasil disimpan');

    }

       
    public function create()
    {
        $kelas = $this->kelas->all();
        return view('siswa.create', compact('kelas'));
    }

   
    public function show()
    {
        $siswa = Siswa::join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->select('siswa.*', 'kelas.*')
        ->orderBy('siswa.id_siswa','desc')
        ->limit(1)
        ->get();
        return view('siswa.detail',compact('siswa'));
    }

    public function regis()
    {
        $kelas = $this->kelas->all();
        return view('siswa.regis', compact('kelas'));
    }

    public function registrasi(Request $request)
    {
        $this->validate($request, [
            'namasiswa' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'id_kelas' => 'required',

        ]);

        $this->siswa->create($request->all());
        return redirect('/show')->with('success', 'Data kelas berhasil disimpan');

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
            'id_kelas' => 'required',
            'gambar_siswa' => 'image|mimes:jpeg,png,jpg'
           
        ]);

        if($request->hasFile('gambar_siswa')){
            $gambar_siswa = $request->file('gambar_siswa');
            $gambar_siswa_name = time(). '.' . $gambar_siswa->getClientOriginalExtension();
            $gambar_siswa->move(public_path('upload_gambar'), $gambar_siswa_name); 
            $siswa->gambar_siswa = $gambar_siswa_name;
        }

       
            $siswa->namasiswa = $request->input('namasiswa');
            $siswa->alamat = $request->input('alamat');
            $siswa-> jeniskelamin = $request->input('jeniskelamin');
            $siswa->id_kelas = $request->input('id_kelas');
        
            $siswa->save();
            return redirect("/siswa"); 
    }

   
    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect("/siswa");   
    }

    public function cari(Request $request){
        $search = $request->input('cari');
        $siswa = Siswa::where('kelas','LIKE',"%$search%")
                        ->orWhere('namasiswa','LIKE',"%$search%")
                        ->get();
       return view('siswa.index', compact('siswa'));                 
    }

    public function pdf(Request $request)
    {
        $filename = 'Regis SIswa.pdf';

        $siswa = Siswa::join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->select('siswa.*', 'kelas.*')
        ->orderBy('siswa.id_siswa','desc')
        ->limit(1)
        ->get();
  
        $html = view()->make('siswapdf', compact('siswa'))->render();
  
        $pdf = new TCPDF;
          
        $pdf::SetTitle('DataSiswa ');
        $pdf::AddPage('P','A4');
        $pdf::writeHTML($html, true, false, true, false, '');
  
        $pdf::Output(public_path($filename), 'F');
  
        return response()->download(public_path($filename));
    }
}
