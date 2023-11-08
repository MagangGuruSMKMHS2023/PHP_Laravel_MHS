<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function index()
    {
        //
        $user = $this->user->all();
        return view('user.index',compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
           
        ]);
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect('/user')->with('success', 'Data User berhasil disimpan');

    }

    
    public function create()
    {
        return view('user.create');
    }

    public function edit($id)
    {
        $user = $this->user->find($id);
        return view('user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
           
        ]);

       
            $user->name = $request->input('name');
            $user->email = $request->input('email');
        

            $user->save();
            return redirect("/user"); 
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect("/user");
    }

}
