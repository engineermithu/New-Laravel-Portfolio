<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Sentinel;
use Illuminate\Support\Facades\Hash;
use DB;
class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }

    public function login(LoginRequest $request){

        $user = User::Where('email', $request->email)->first();

        if (blank($user)){
            return redirect()->back()->withInput()->with(['message' => 'Invalid Credentials']);
        }

        if (!Hash::check($request->get('password'),$user->password)){
            return redirect()->back()->withInput()->with(['message' => 'Invalid Credentials']);
        }

        $remember_me = $request->has('remember_me') ? true : false;

        $credentials = ['email' => $request->email , 'password'=> $request->password];

        $remember_me ? Sentinel::authenticateAndRemember($credentials) : Sentinel::authenticate($credentials);

        return redirect()->route('dashboard');
    }
}
