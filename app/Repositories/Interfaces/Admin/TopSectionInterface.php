<?php

namespace App\Repositories\Interfaces\Admin;

interface TopSectionInterface
{
    public function store($request);

    public function show();

    public function edit($id);

    public function destroy($id);

    public function update($request, $id);

}
