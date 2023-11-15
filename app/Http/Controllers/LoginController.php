<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Models\User;

class LoginController extends Controller
{
    protected $user;
   


    public function __construct(User $user)
    {
        $this->user = $user;

    }

   public function landing()
   {
    return view('landing');
   } 
   public function index()
   {
    return view('auth.login');
   }

   public function login(Request $request)
   {
        
        $data = [
            'email'=> $request->input('email'),
            'password'=> $request->input('password'),

        ];

        if (Auth::Attempt($data))
        {
            return redirect('/kelas');
        }else{
            Session::flash('error','Email atau Password salah');
            return redirect('/');
        }

   }

   public function logout()
   {
        Auth::logout();
        return redirect('/');
   }

}
