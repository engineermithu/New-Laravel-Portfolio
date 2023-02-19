<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffStoreRequest;
use App\Http\Requests\StaffUpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\Admin\StaffInterface;
use App\Repositories\Interfaces\Admin\PermissionInterface;
use App\Repositories\Interfaces\Admin\RoleInterface;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    protected $staff;
    protected $roles;
    protected $permissions;

    public function __construct(StaffInterface $staff, RoleInterface $roles,PermissionInterface $permissions)
    {
        $this->staff        = $staff;
        $this->roles        = $roles;
        $this->permissions  = $permissions;
    }

    public function index(Request $request)
    {
        $permissions    = $this->permissions->all();
        $staffs         = $this->staff->all($request);

        return view('admin.staffs.index',compact('staffs','permissions'));
    }


    public function create(Request $request)
    {
//        $roles          = $this->roles->all()->get();
//        $permissions    = $this->permissions->all();
//
//        $user      = $this->staff->paginate($request,get_system_config('paginate'));
        $roles          = $this->roles->all()->get();
        $permissions    = $this->permissions->all();
        return view('admin.staffs.add', compact('roles', 'permissions'));
    }


    public function store(StaffStoreRequest $request)
    {
//        $data = $this->staff->store($request);
        $this->staff->store($request);
//        if ($this->staff->store($request)):
            return redirect()->route('admin.staffs')->with(['success' => __('Staff Added Successfully')]);
//        else:
//            return back()->with(['error' => __('Something Went Wrong!')]);
//        endif;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        if ($user               = $this->staff->get($id)):
            if($user->user_type == 'staff'):
                $roles          = $this->roles->all()->get();
                $permissions    = $this->permissions->all();
                return view('admin.staffs.edit', compact('user','permissions','roles'));
            else:
                abort('403');
            endif;
        else:
            abort('403');
        endif;
    }


    public function update(StaffUpdateRequest  $request, $id)
    {
        $this->staff->update($request,$id);
//        if ($this->staff->update($request,$id)):
            return redirect()->route('admin.staffs')->with(['success' => 'Staff Updated Successfully']);
//        else:
//            return back()->withInput()->with(['error' => 'Something Went Wrong!']);
//        endif;
    }


    public function destroy($id)
    {
        try {
            $data = User::findOrfail($id)->delete();
            return redirect()->route('admin.staffs')->with(['success'=> 'Staff Delete Successfully']);
        }catch (\Exception $e){
            echo $e;
        }
    }

    public function changeRole(Request $request)
    {
        if (!blank($request->role_id)):
            $role_permissions = $this->roles->get($request->role_id)->permissions;
        else:
            $role_permissions = array();
        endif;
        $permissions      = $this->permissions->all();
        return view('admin.staffs.role-permissions', compact('permissions', 'role_permissions'))->render();

    }
}
