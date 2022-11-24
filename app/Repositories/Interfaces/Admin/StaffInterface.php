<?php

namespace App\Repositories\Interfaces\Admin;

interface StaffInterface
{
    public function store($request);
//
//    public function paginate($request, $limit);

    public function get($id);

    public function all($request);

    public function update($request,$id);



}
