<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Sentinel;
use Illuminate\Support\Facades\Hash;
use DB;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }

    public function login(LoginRequest $request){
//        dd($request->all());

        $user = User::Where('email', $request->email)->first();

        if (blank($user)){
            return redirect()->back()->with(['error' => 'Invalid Email']);
        }

        if (!Hash::check($request->get('password'),$user->password)){
            return redirect()->back()->with(['error' => 'Invalid Password']);
        }

        $remember_me = $request->has('remember_me') ? true : false;

        $credentials = ['email' => $request->email , 'password'=> $request->password];

        $remember_me ? Sentinel::authenticateAndRemember($credentials) : Sentinel::authenticate($credentials);

        return redirect()->route('dashboard');
    }

    public function logout(){

        try {
            Sentinel::logout();
            return redirect()->route('login')->with(['success' => 'Logout Successfully']);
        }catch (\Exception $e){
            return redirect()->route('admin/dashboard')->with(['error'=> 'Oops! Something Went Wrong!']);
        }

    }
}
