<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin User
        $admin = User::create([
            'role_id'           => 1,
            'name'              => 'Super admin',
            'email'             => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('admin123'), 
            'remember_token'    => Str::random(10),
        ]);

        // Teacher User
        $teacher = User::create([
            'role_id'           => 2,
            'name'              => 'Seeder Teacher',
            'email'             => 'teacher@gmail.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('teacher123'), 
            'remember_token'    => Str::random(10),
        ]);

        // Student User
        $student = User::create([
            'role_id'           => 3,
            'name'              => 'Seeder Student',
            'email'             => 'student@gmail.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('student123'), 
            'remember_token'    => Str::random(10),
        ]);


    }
}
