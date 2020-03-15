<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Profile Permission
        $createProfile = Permission::create(['name' => 'Create Profile','slug' => 'create_profile']);
        $editProfile = Permission::create(['name' => 'Edit Profile', 'slug' => 'edit_profile']);
        $viewProfile = Permission::create(['name' => 'View Profile','slug' => 'view_profile']);
        $deletProfile = Permission::create(['name' => 'Delete Profile', 'slug' => 'delete_profile']);

        // User Permission
        $createUser = Permission::create(['name' => 'Create User','slug' => 'create_user']);
        $editUser = Permission::create(['name' => 'Edit User', 'slug' => 'edit_user']);
        $viewUser = Permission::create(['name' => 'View User','slug' => 'view_user']);
        $deletUser = Permission::create(['name' => 'Delete User', 'slug' => 'delete_user']);

        // Role Permission
        $createRole = Permission::create(['name' => 'Create Role','slug' => 'create_role']);
        $editRole = Permission::create(['name' => 'Edit Role', 'slug' => 'edit_role']);
        $viewRole = Permission::create(['name' => 'View Role','slug' => 'view_role']);
        $deletRole = Permission::create(['name' => 'Delete Role', 'slug' => 'delete_role']);

        // Permission permission
        $createPermission = Permission::create(['name' => 'Create Permission','slug' => 'create_permission']);
        $editPermission = Permission::create(['name' => 'Edit Permission', 'slug' => 'edit_permission']);
        $viewPermission = Permission::create(['name' => 'View Permission','slug' => 'view_permission']);
        $deletPermission = Permission::create(['name' => 'Delete Permission', 'slug' => 'delete_permission']);
    
        // attach admin role
        $adminRole = Role::whereName('admin')->first();
        $adminRole->permissions()->attach($createProfile); 
        $adminRole->permissions()->attach($editProfile); 
        $adminRole->permissions()->attach($viewProfile); 
        $adminRole->permissions()->attach($deletProfile); 
        $adminRole->permissions()->attach($createUser); 
        $adminRole->permissions()->attach($editUser); 
        $adminRole->permissions()->attach($viewUser); 
        $adminRole->permissions()->attach($deletUser); 
        $adminRole->permissions()->attach($createRole); 
        $adminRole->permissions()->attach($editRole); 
        $adminRole->permissions()->attach($viewRole); 
        $adminRole->permissions()->attach($deletRole); 
        $adminRole->permissions()->attach($createPermission); 
        $adminRole->permissions()->attach($editPermission); 
        $adminRole->permissions()->attach($viewPermission); 
        $adminRole->permissions()->attach($deletPermission); 

        // attach user role
        $userRole = Role::whereName('user')->first();
        $userRole->permissions()->attach($createProfile); 
        $userRole->permissions()->attach($editProfile); 
        $userRole->permissions()->attach($viewProfile); 
        $userRole->permissions()->attach($deletProfile); 
    }
}
