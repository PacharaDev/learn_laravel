<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    public function register_view(){
        return view("auth.register");

    }
    public function login_view(){
        return view("auth.login");
        
    }
    public function register_store(Request $request){
        $request -> validate([
            "email" => "email|unique:users",
            "password" => "min:6|confirmed"
        ]);
        $data = $request -> all();
        User::create($data);      
        return Redirect::to("/login");
    }
    public function login_auth(Request $request){
        $request -> validate([
            "email" => "email",
            "password" => "min:6"
        ]);
        $data = $request -> all();
        if(Auth::attempt(["email" => $data["email"], "password" => $data["password"]]) ){
            return Redirect::to("/customers");
        }else{
            return Redirect::to("/login");
        }
    }
    public function logout(){
        Auth::logout();
        return Redirect::to("/login");
    }
}
