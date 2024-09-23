<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array = [];
        array_push($permissions_array, Permission::create(['name' => 'crear']));
        array_push($permissions_array, Permission::create(['name' => 'editar']));
        array_push($permissions_array, Permission::create(['name' => 'eliminar']));
        $viewPermission = Permission::create(['name' => 'ver']);
        array_push($permissions_array, $viewPermission);
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $superAdminRole->syncPermissions($permissions_array);
        $viewRole = Role::create(['name' => 'ver']);
        $viewRole->givePermissionTo($viewPermission);

        $userSuperAdmin = User::create([
            'name' => 'administrador',
            'email' => 'administrado@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
        //assign role
        $userSuperAdmin->assignRole('super_admin');
        //create user
        $userView = User::create([
            'name' => 'Encargado',
            'email' => 'Encargado@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        //assign role
        $userView->assignRole('ver');
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
