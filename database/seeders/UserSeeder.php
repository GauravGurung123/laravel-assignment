<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        
        // for($i = 1 ; $i <= 10 ; $i++){
        // 	DB::table('users')->insert([
        // 	'name' => 'user'.$i,
        // 	'age' => $i+12,
        // 	'bio' => 'description '. Str::random(10),
        //     'image' => 'dummy.png',
        // 	'email' => Str::random(10).'@test.com',
        //     'password' => Hash::make('password'), 
        //     'remember_token' => Str::random(10),
        // ]);
        // }
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'age'            => 28,
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('pass'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Author',
                'age'            => 28,
                'email'          => 'author@author.com',
                'password'       => bcrypt('pass'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Editor',
                'age'            => 28,
                'email'          => 'editor@editor.com',
                'password'       => bcrypt('pass'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
