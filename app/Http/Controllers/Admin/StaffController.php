<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function index()
    {
        return view('admin.staffs.index');
    }


    public function create()
    {
//        $roles          = $this->roles->all()->get();
//        $permissions    = $this->permissions->all();

        $roles          = Role::all();
        $permissions    = Permission::all();
        return view('admin.staffs.add', compact('roles', 'permissions'));
    }


    public function store(Request $request)
    {
        //
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
        //
    }
}
