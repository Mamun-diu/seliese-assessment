<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('home.login-form');
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validate){
            $user = User::where('email',$request->email)->first();
            if($user && \Hash::check($request->password, $user->password)){
                $request->session()->put('user',$user);
                return redirect()->route('home');
            }else{
                $request->session()->flash('error', "Email or password is not matched");
                return Redirect()->back();
            }

        }
    }

    public function logout()
    {
        \Session::forget('user');
        return redirect('/');
    }
}
