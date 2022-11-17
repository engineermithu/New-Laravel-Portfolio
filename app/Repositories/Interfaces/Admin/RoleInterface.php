<?php

namespace App\Repositories\Interfaces\Admin;

interface RoleInterface
{
    public function paginate($limit);

    public function all();

    public function get($id);

    public function store($request);

    public function update($request);

}
