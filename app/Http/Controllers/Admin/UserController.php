<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\Interfaces\Admin\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile(){

        return view('admin.auth.user-profile');
    }

    public function changePassword(){

        return view('admin.auth.change-password');
    }

    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function updateProfile(UserUpdateRequest $request){

        $this->user->updateProfile($request);
        return redirect()->back()->with(['success' => __('User Updated Successfully')]);
    }

    public function updatePassword(Request $request){

      $this->user->updatePassword($request);
      return back()->with(['success' => __('Password Updated Successfully')]);
    }
}
