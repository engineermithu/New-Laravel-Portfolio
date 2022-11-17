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
