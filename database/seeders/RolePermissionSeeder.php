<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    protected $crudList=[
        'view-',
        'create-',
        'update-',
        'delete-',
    ];

    protected $permissionList=[
        'posts',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // Reset cached roles and permissions
           app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

           // create permissions
           Permission::create(['name' => 'create-post']);
           Permission::create(['name' => 'view-post']);
           Permission::create(['name' => 'edit-post']);
           Permission::create(['name' => 'delete-post']);
   
           // create roles and assign created permissions
   
           $role = Role::create(['name' => 'admin'])
           ->givePermissionTo(Permission::all());
   
           $role = Role::create(['name' => 'author'])
               ->givePermissionTo(['view-post', 'create-post']);
   
           $role = Role::create(['name' => 'editor'])
                ->givePermissionTo(['view-post', 'edit-post']);
    }

}
