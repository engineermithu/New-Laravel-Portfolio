<?php

namespace App\Repositories\Admin;

use App\Models\Role;
use App\Repositories\Interfaces\Admin\RoleInterface;
use App\Traits\SlugTrait;
use DB;
use function redirect;

class RoleRepository implements RoleInterface
{
    use SlugTrait;

    public function all()
    {
        return Role::latest();
    }

    public function paginate($limit)
    {
        return $this->all()->paginate($limit);
    }

    public function get($id)
    {
        return Role::find($id);
    }


    public function store($request)
    {
//        dd($request->permissions);

        try {
            $role               = new Role();
            $role->name         = $request->name;
            $role->slug         = $this->getSlug($request->name, $request->slug);
            $role->permissions  = isset($request->permissions)?  json_encode($request->permissions ): [];

//            dd($role);
//
//            foreach($request->permissions as $key => $p){
//                $data = array(
//                    'permissions'            => $p['permissions'],
//
//                );
//             dd($data);
//            }
            $role->save();



        } catch (\Exception $e) {

            if (($request->name == $role->name)) {
                return redirect()->back()->with(['error' => $role->name . ' ' . 'is already exit, plz try unique name']);
            } else {
                return redirect()->back()->with(['error' => 'Something Went Wrong!']);
            }


        }
    }

    public function update($request)
    {
        DB::beginTransaction();
        try {
            $role               = Role::find($request->role_id);
            $role->name         = $request->name;
            $role->slug         = $this->getSlug($request->name, $request->slug);
            $role->permissions  = isset($request->permissions) ? $request->permissions : [];
            $role->save();

            DB::commit();
            return true;

        } catch (\Exception $e) {
            DB::rollback();
            return false;
        }
    }

}
