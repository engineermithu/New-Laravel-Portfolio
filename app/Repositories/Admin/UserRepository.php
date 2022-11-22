<?php

namespace App\Repositories\Admin;

use App\Models\User;
use App\Repositories\Interfaces\Admin\UserInterface;
use File;
use Sentinel;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserInterface
{
    public function updateProfile($request)
    {
        try {
            $user                = User::find($request->user_id);
            $deleteOldImage = 'images/'.$user->image;
            if($request->hasFile('image')) {

                $student_image = $request->file('image');
                if(file_exists($deleteOldImage)){
                    File::delete($deleteOldImage);
                }
                $imageName = date('d-m-Y-H-i') . '-' . uniqid() . '.' . $student_image->getClientOriginalExtension();
                $student_image->move('images/', $imageName);
            }
            else
            {
                $imageName = $request->image;
            }
            $user->first_name = $request->first_name;
            $user->last_name     = $request->last_name;
            $user->email         = $request->email;
            $user->phone         = $request->phone;
            $user->image         = $imageName;
            $user->update();



        } catch (\Exception $e) {
            dd($e);

        }
    }
    public function updatePassword($request)
    {
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
            return redirect()->back()->with(['success' => __('Password Updated Successfully')]);
        } catch (\Exception $e) {

        }
    }

}
