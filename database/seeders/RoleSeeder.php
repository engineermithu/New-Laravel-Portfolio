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
            'name'          => 'Editor',
            'slug'          => 'editor',
            'permissions'   => json_encode($this->staffPermissions())
        ]);
    }

    private function staffPermissions(){

        return [
            'editor_create',
            'editor_read',
            'editor_update',
            'editor_delete',

            'staff_create',
            'staff_read',
            'staff_update',
            'staff_delete',

            'role_create',
            'role_read',
            'role_update',
            'role_delete',
        ];
    }
}
