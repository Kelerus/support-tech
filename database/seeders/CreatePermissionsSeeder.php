<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreatePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $editTicket = Permission::create([ 'name' => 'editTicket' ]);
        $deleteTicket = Permission::create([ 'name' => 'deleteTicket' ]);

        $createCategory = Permission::create([ 'name' => 'createCategory' ]);
        $editCategory = Permission::create([ 'name' => 'editCategory' ]);
        $deleteCategory = Permission::create([ 'name' => 'deleteCategory' ]);

        $createCity = Permission::create([ 'name' => 'createCity' ]);
        $editCity = Permission::create([ 'name' => 'editCity' ]);
        $deleteCity = Permission::create([ 'name' => 'deleteCity' ]);

        $user = Role::create([ 'name' => 'user' ]);
        $tech = Role::create([ 'name' => 'tech' ]);
        $admin = Role::create([ 'name' => 'admin' ]);
        $superAdmin = Role::create([ 'name' => 'superAdmin']);

        $tech->givePermissionTo([$editTicket->name, $deleteTicket->name]);
        $admin->givePermissionTo([
            $createCategory->name, $editCategory->name,
            $deleteCategory->name, $createCity->name,
            $editCity->name, $deleteCity->name
        ]);

    }
}
