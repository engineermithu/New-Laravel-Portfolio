<?php

namespace App\Repositories\Admin;

use App\Models\User;
use App\Repositories\Interfaces\Admin\StaffInterface;
use http\Env\Request;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

class StaffRepository implements StaffInterface
{
    public function store($request)
    {
//        dd($request->all());
        $imageName = '';
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images/', $imageName);
//            $student_image->move('../../../../../images/students',$imageName);

        }
        try {
            $staff                  = new User();
            $staff->first_name      = $request->first_name;
            $staff->last_name       = $request->last_name;
            $staff->phone           = $request->phone;
            $staff->date_of_birth   = $request->date_of_birth;
            $staff->gender          = $request->gender;
            $staff->email           = $request->email;
            $staff->password        = bcrypt($request->password);
            $staff->user_type       = "staff";
            $staff->permissions     = isset($request->permissions) ? $request->permissions : [];

            $staff->role_id         = $request->role != '' ? $request->role : null;
            $staff->image           = $imageName;
            $staff->save();

//            $activation = Activation::create($staff);
//            Activation::complete($staff, $activation->code);

        } catch (\Exception $e) {
            echo $e;
        }
    }
}
