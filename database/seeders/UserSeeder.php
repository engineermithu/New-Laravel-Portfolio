<?php

namespace Database\Seeders;

use App\Models\Role;
use  Cartalyst\Sentinel\Users\UserInterface;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Sentinel;
class UserSeeder extends Seeder{

    public function run(){
        $supperAdminRole    = Role::find(1);
        $data = [
            'first_name'    => 'Supper',
            'last_name'     => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      =>  12345678,
            'phone'         => '01726184147',
            'user_type'     => 'admin',
            'permissions'   => $this->superAdminPermissions()
        ];

        $supperAdmin        = Sentinel::create($data);

        $activation = Activation::create($supperAdmin);

        echo  $activation;

        Activation::complete($supperAdmin, $activation->code);

        $supperAdminRole->users()->attach($supperAdmin);
    }
    private function superAdminPermissions(){

        return[
            'staff_create',
            'staff_read',
            'staff_update',
            'staff_delete',

            'top_section_create',
            'top_section_read',
            'top_section_update',
            'top_section_delete',

            'role_create',
            'role_read',
            'role_update',
            'role_delete',
        ];
    }

}
