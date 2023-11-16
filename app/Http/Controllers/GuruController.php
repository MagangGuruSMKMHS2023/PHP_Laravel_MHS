<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $guru;
    
    public function __construct(Guru $guru){
        $this->guru = $guru;
    }

    public function index()
    {
        //
        $guru = $this->guru->all();
        return view('guru.index',compact('guru'));
    }

    

    
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'namaguru' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'gambar_guru' => 'required|image|mimes:jpeg,png,jpg'

        ]);
        $gambar_guru = $request->file('gambar_guru');
        $gambar_guru_name = time(). '.' . $gambar_guru->getClientOriginalExtension();
        $gambar_guru->move(public_path('upload_gambar'), $gambar_guru_name);

        // $this->guru->create($request->all());

        Guru::create([
            'namaguru' => $request->input('namaguru'),
            'alamat' => $request->input('alamat'),
            'jeniskelamin' => $request->input('jeniskelamin'),
            'gambar_guru' => $gambar_guru_name
        ]);
        return redirect('/guru')->with('success', 'Data Guru berhasil disimpan');

    }

    
    public function create()
    {
        return view('guru.create');
    }

    public function edit($id)
    {
        $guru = $this->guru->find($id);
        return view('guru.edit', compact('guru'));
    }


    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);

        $this->validate($request, [
            'namaguru' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'gambar_png' => 'image|mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('gambar_guru')){
            $gambar_guru = $request->file('gambar_guru');
            $gambar_guru_name = time(). '.' . $gambar_guru->getClientOriginalExtension();
            $gambar_guru->move(public_path('upload_gambar'), $gambar_guru_name); 
            $guru->gambar_guru = $gambar_guru_name;
        }

       
            $guru->namaguru = $request->input('namaguru');
            $guru->alamat = $request->input('alamat');
            $guru-> jeniskelamin = $request->input('jeniskelamin');
        

            $guru->save();
            return redirect("/guru"); 
    }

   
    public function delete($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect("/guru");
    }

    public function cari(Request $request){
        $search = $request->input('cari');
        $guru = Guru::where('id','LIKE',"%$search%")
                        ->orWhere('namaguru','LIKE',"%$search%")
                        ->get();
       return view('guru.index', compact('guru'));                 
    }
}
