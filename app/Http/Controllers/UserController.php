<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use App\Models\User;



class UserController extends Controller
{
    function login(Request $req)
    {
        //return $req->input();
        //return User::where(['email'=>$req->email])->first();
        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            //return "Username or password is not right";
            //Session()->flash('nologin','Username or password is not right');
            return back()->with('nologin','Login Error');
            return "error";
        }
        else
        {
            //return view('footer');
            $req->session()->put('user',$user);
            return redirect('/');
        }
        
    }
    function register(Request $req)
    {
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');

    }
}
