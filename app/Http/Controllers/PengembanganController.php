<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembangan;

class PengembanganController extends Controller
{
    protected $pengembangan;
    
    public function __construct(Pengembangan $pengembangan){
        $this->pengembangan = $pengembangan;
    }

    public function index()
    {
        //
        $pengembangan = $this->pengembangan->all();
        return view('pengembangan.index',compact('pengembangan'));
    }

    

    
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'namapengembangan' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
        ]);

        $this->pengembangan->create($request->all());
        return redirect('/pengembangan')->with('success', 'Data Pengembangan berhasil disimpan');

    }

    
    public function create()
    {
        return view('pengembangan.create');
    }

    public function edit($id)
    {
        $pengembangan = $this->pengembangan->find($id);
        return view('pengembangan.edit', compact('pengembangan'));
    }


    public function update(Request $request, $id)
    {
        $pengembangan = Pengembangan::find($id);

        $this->validate($request, [
            'namapengembangan' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
           
        ]);

       
            $pengembangan->namapengembangan = $request->input('namapengembangan');
            $pengembangan->jumlah = $request->input('jumlah');
            $pengembangan-> jenis = $request->input('jenis');
        

            $pengembangan->save();
            return redirect("/pengembangan"); 
    }

   
    public function delete($id)
    {
        $pengembangan = Pengembangan::find($id);
        $pengembangan->delete();
        return redirect("/pengembangan");
    }
}
