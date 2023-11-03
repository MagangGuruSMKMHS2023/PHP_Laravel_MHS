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
        ]);

        $this->guru->create($request->all());
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
           
        ]);

       
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
}
