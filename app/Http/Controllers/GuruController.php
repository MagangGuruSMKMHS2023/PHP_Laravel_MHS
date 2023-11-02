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
        return redirect('/guru')->with('success', 'Data kelas berhasil disimpan');

    }

    
    public function create()
    {
        return view('guru.create');
    }

  
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
