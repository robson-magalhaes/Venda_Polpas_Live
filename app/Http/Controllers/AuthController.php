<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    public function index(Request $req){
        return redirect(route('login'));
    }
    public function login(Request $req){
        return view('login');
    }

    public function action_login(Request $req){
        $validator = $req->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($validator)){
            // $nome = $req->name;
            return redirect(route('home'));
        }
        return redirect(route('login'));
    }

    public function logout(Request $req){
        Auth::logout();
        return redirect()->route('login');
    }

    public function registrar(Request $req){
        return view('registrar');
    }

    public function action_register(Request $req){
        //Inserir usuario
        // $user = new User;
        // $user->name = $req->name;
        // $user->password = $req->password;
        // $user->save();

        ////Outro modo de como Inserir usuario
        $data = $req->only('name', 'password');
        $data['password'] = Hash::make($data['password']);
        
        User::create($data);
        
        return redirect(route('login'));
    }
}
