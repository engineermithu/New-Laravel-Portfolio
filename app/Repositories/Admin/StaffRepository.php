<?php

namespace App\Repositories\Admin;

use App\Models\User;
use App\Repositories\Interfaces\Admin\StaffInterface;
use http\Env\Request;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use DB;

class StaffRepository implements StaffInterface
{

    public function all($request)
    {
        return User::with('role')->where('user_type', 'staff')
            ->when($request->q != null, function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('email', 'LIKE', '%' . $request->q . '%');
                    $q->orWhere('phone', 'LIKE', '%' . $request->q . '%');
                    $q->orWhere(DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%" . $request->q . "%");
                });
            })->latest()->paginate();
    }

    public function store($request)
    {
//        dd($request->all());
        $imageName = '';
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images/', $imageName);

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

            $staff->role_id = $request->role != '' ? $request->role : null;
            $staff->image = $imageName;
            $staff->save();

            $activation = Activation::create($staff);
            Activation::complete($staff, $activation->code);

        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function get($id)
    {
        return User::find($id);
    }

    public function update($request, $id)
    {
//        dd($request->all());
        try {
            $staff                  = $this->get($request->id);
            $staff->first_name      = $request->first_name;
            $staff->last_name       = $request->last_name;
            $staff->phone           = $request->phone;
            $staff->date_of_birth   = $request->date_of_birth;
            $staff->gender          = $request->gender;
            $staff->email           = $request->email;

            if ($request->password != ''):
                $staff->password = bcrypt($request->password);
            endif;
            $staff->role_id         = $request->role != '' ? $request->role : null;
            $staff->permissions     = isset($request->permissions) ? $request->permissions : [];
            $staff->save();

//            if (!blank($request->file('image'))){
//                $requestImage           = $request->file('image');
//                $this->updateImage($requestImage, 'user_image/'.$staff->id.'.jpg','user_photo',$staff->id);
//            }

            DB::commit();
            return true;

        } catch (\Exception $exception) {
            DB::rollback();
            return false;
//            dd('ok');
        }
    }

}
