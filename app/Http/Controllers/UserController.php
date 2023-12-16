<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function auth(Request $req){
        $credentials = $req->only('email','password');
    
        if(Auth::attempt($credentials)){
            return redirect('template');
        }
    
        return redirect()->back();
    }
    
    function register(){
        return view('register');
    }

    function create(Request $req){
    
        $validate = $this->validate($req,[
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        $validate['password'] = bcrypt($req->password);
    
        User::create($validate);
        return redirect('login');
    
         function logout(){
           Auth::logout();
           return redirect('login');
        }
    }
    function show(){
        return view('template');
    }
}
