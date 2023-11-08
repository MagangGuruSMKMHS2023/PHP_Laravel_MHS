<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;

class MapelController extends Controller
{
   protected $guru;
   protected $mapel; 

   public function __construct(Guru $guru, Mapel $mapel)
   {
       $this->guru = $guru;
       $this->mapel = $mapel;
   }

   public function index()
   {
       $mapel = $this->mapel->all();
       return view('mapel.index', compact('mapel'));
   }

   public function create()
   {
      
       $guru = $this->guru->all();
       return view('mapel.create',compact('guru'));
   }

   public function store(Request $request)
   {
       $this->validate($request, [
           'namamapel' => 'required',
           'guru' => 'required',  
       ]);

       Mapel::create([
           'namamapel' => $request->input('namamapel'),
           'guru' => $request->input('guru'),
       ]);

       return redirect('/mapel')->with('success', 'Data Mapel berhasil disimpan');
   }

   public function edit($id)
    {
        $mapel = $this->mapel->find($id);
        $guru = $this->guru->all();

        return view('mapel.edit', compact('mapel','guru'));
    }

    public function update(Request $request , $id){
        $mapel = Mapel::find($id);

        $this->validate($request, [
            'namamapel' => 'required',
            'guru' => 'required',
           
        ]);

            $mapel->namamapel = $request->input('namamapel');
            $mapel->guru = $request->input('guru');

            $mapel->save();
            return redirect("/mapel");

    }

    public function delete($id){
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect("/mapel");
        
    }

}
