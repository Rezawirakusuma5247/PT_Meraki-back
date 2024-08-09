<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class PermissionSeeder extends Seeder
{
    use HasRoles;
    public function run(): void
    {
       $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin'
            ],
            ['name'=>'admin']);

        $permission = Permission::updateOrCreate(
            [
                'name' => 'admin',
            ],
            ['name' => 'admin']
        );



        $role_admin->givePermissionTo($permission);
        $user = User::find(1);
        $user->assignRole(['admin']);
    }
}
