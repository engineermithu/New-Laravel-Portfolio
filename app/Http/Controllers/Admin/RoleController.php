<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleUpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\Interfaces\Admin\RoleInterface;
use App\Repositories\Interfaces\Admin\PermissionInterface;
use App\Traits\SlugTrait;
use http\Env\Response;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    use SlugTrait;

    protected $roles;
    protected $permissions;

    public function __construct(RoleInterface $roles, PermissionInterface $permissions)
    {
        $this->roles        = $roles;
        $this->permissions  = $permissions;
    }

    public function index(){
        $roles          = $this->roles->all()->get();
//        dd($roles)
        $permissions    = $this->permissions->all();
        return view('admin.role.index', compact('roles', 'permissions'));
    }

    public function create(){
        $permissions    = Permission::all();
        return view('admin.role.add', compact('permissions'));
    }

    public function show(){
        $data = Role::all();
        return response()->json($data);
    }

    public function store(Request $request){
//        dd($request->all());

        $data = $this->roles->store($request);
//        return response()->json([$data]);
        return redirect()->route('admin.roles')->with(['success'=> 'Role Added Successfully']);

//        if ($this->roles->store($request)):
//            return redirect('admin.roles')->throwResponse(['success' => __('Role Added Successfully')]);
//        else:
//            return back()->with(['error' => __('Something Went Wrong!')]);
//        endif;

    }


    public function edit($id)
    {

//        try {
            $role           = $this->roles->get($id);
//            dd($role);
            $permissions    = $this->permissions->all();
            return view('admin.role.edit', compact('role', 'permissions'));

//        } catch (\Exception $e) {
//            return redirect()->back()->with(['error' => __('Something Went Wrong!')]);
//        }
    }

    public function delete($id)
    {
        try {
           $data= Role::find($id)->delete();
            return response()->json($data);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('Something Went Wrong!')]);
        }
    }

    public function update(RoleUpdateRequest $request)
    {
        if ($this->roles->update($request)):
            return redirect()->route('admin.roles')->with(['success' => __('Role Updated Successfully')]);
        else:
            return back()->withInput()->with(['error' => __('Something Went Wrong!')]);
        endif;
    }



}
