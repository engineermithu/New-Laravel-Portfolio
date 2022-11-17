<?php

namespace App\Repositories\Admin;

use App\Models\Permission;
use App\Repositories\Interfaces\Admin\PermissionInterface;

class PermissionRepository implements PermissionInterface
{
    public function all()
    {
        return Permission::all();
    }

}
