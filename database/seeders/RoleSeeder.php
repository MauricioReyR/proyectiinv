<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles
        $admin= Role::create(['name' => 'Administratior']);
        $author= Role::create(['name' => 'Author']);

        //Permisos
       Permission::create(['name' =>'home.index',
                          'description' => 'Ver el Dashboard']);

        Permission::create(['name' =>'productos.index',
                          'description' => 'Ver los productos']);
        
        Permission::create(['name' =>'productos.create',
                            'description' => 'crear los productos']);

        Permission::create(['name' =>'productos.Edit',
                            'description' => 'Editar los productos']);

        Permission::create(['name' =>'productos.destroy',
                            'description' => 'Borrar los productos']);                   
 
    }
}
