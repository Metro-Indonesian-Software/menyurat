<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $system_roles = config('central.system_roles');
        $system_permissions = config('central.system_permissions');

        $admin = null;
        $user = null;

        foreach($system_roles as $type => $role) {
            if($type === "administrator") {
                $admin = Role::create([ "name" => $role,]);
            }
            else if($type === "user") {
                $user = Role::create([ "name" => $role,]);
            }
        }

        foreach($system_permissions as $permission) {
            Permission::create(["name" => $permission,]);
        }

        $admin->givePermissionTo(["users_manage"]);
        $user->givePermissionTo(["letters_manage"]);
    }
}
