<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopSection;
use App\Models\User;
use Illuminate\Http\Request;
use Sentinel;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
   public function index(){
        return view('admin.dashboard');
   }

   public function userProfile(){
        return view('admin.auth.user-profile');
   }

   public function changePassword(){
        return view('admin.auth.change-password');
   }

   public function updateProfile(Request $request){
       try {
           $user = User::find($request->user_id);
           $user->first_name   = $request->first_name;
           $user->last_name    = $request->last_name;
           $user->email        = $request->email;


//            if (!blank($request->file('image'))) {
//                $requestImage   = $request->file('image');
//                $user->image    = $this->updateImage($requestImage, $user->image, 'user');
//            }
           $user->save();

//           if (!blank($request->file('image'))){
//               $requestImage           = $request->file('image');
//               $this->updateImage($requestImage, 'user_image/'.$user->id.'.jpg','user_photo',$user->id);
//           }


//           return redirect()->back()->with();
           return redirect()->back()->with(['success' => __('User Updated Successfully')]);



       } catch (\Exception $e) {
           dd($e);

       }
   }

   public function updatePassword(Request $request){

       try {
           $user = Sentinel::getUser();
           if (Hash::check($request->new_password, $user->password)) {
               return response()->json([
                   'error' => __('New password cannot be same as current password')
               ]);
           }
           if (Hash::check($request->current_password, $user->password)) {
               $user->password = bcrypt($request->new_password);
               $user->save();
           } elseif ($request->is_password_set == 0) {
               $user->password         = bcrypt($request->new_password);
               $user->is_password_set  = 1;
               $user->save();
               return redirect()->back()->withInput()->with([
                   'success' => __('Password Set Successfully'),
                   'data' => $user
               ]);
           } else {
               return redirect()->back()->withInput()->with([
                   'error' => __('Current Password does not match with old password')
               ]);
           }


           return true;
       } catch (\Exception $e) {


       }
   }

}
