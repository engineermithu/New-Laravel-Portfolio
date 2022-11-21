<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffStoreRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\Admin\StaffInterface;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    protected $staff;

    public function __construct(StaffInterface $staff)
    {
        $this->staff   = $staff;
    }

    public function index()
    {
        $permissions    = Permission::all();
        $staffs   = User::all();
        return view('admin.staffs.index',compact('staffs'));
    }


    public function create()
    {
//        $roles          = $this->roles->all()->get();
//        $permissions    = $this->permissions->all();

        $roles          = Role::all();
        $permissions    = Permission::all();
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
        //
    }


    public function update(Request $request, $id)
    {
        //
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
}
