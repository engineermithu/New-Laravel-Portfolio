<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Sentinel;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'          => 'Manager',
            'slug'          => 'manager',
            'permissions'   => json_encode($this->permissions())
        ]);
    }

    private function permissions(){

        return [
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
