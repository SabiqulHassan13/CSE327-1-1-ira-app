<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Role
        $role1 = Role::create([
            'name'  =>  'Admin',
            'slug'  =>  Str::slug('Admin'),
        ]);

        // Teacher Role
        $role2 = Role::create([
            'name'  =>  'Teacher',
            'slug'  =>  Str::slug('Teacher'),
        ]);

        // Student Role
        $role3 = Role::create([
            'name'  =>  'Student',
            'slug'  =>  Str::slug('Student'),
        ]);

    }
}
