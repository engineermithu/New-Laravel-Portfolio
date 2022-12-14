<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Sentinel;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [

            'staff' => [
                'create'    => 'staff_create',
                'read'      => 'staff_read',
                'update'    => 'staff_update',
                'delete'    => 'staff_delete'
            ],

            'top section' => [
                'create'    => 'top_section_create',
                'read'      => 'top_section_read',
                'update'    => 'top_section_update',
                'delete'    => 'top_section_delete',
            ],

            'role' => [
                'create'    => 'role_create',
                'read'      => 'role_read',
                'update'    => 'role_update',
                'delete'    => 'role_delete'
            ],
        ];
        foreach ($attributes as $key => $attribute) {
            $permission             = new Permission();
            $permission->attribute  = $key;
            $permission->keywords   = $attribute;
            $permission->save();
        }
    }
}
