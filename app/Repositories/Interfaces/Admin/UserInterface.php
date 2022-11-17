<?php

namespace App\Repositories\Interfaces\Admin;

interface UserInterface
{
    public function updateProfile($request);

    public function updatePassword($request);

}
