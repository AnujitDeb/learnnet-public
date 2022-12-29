<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminBalance;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'first_name'=>'Anujit',
            'last_name'=>'Deb',
            'email'=>'anujitdeb99@gmail.com',
            'phone'=>'01688614633',
            'country'=>'Bangladesh',
            'institution'=>'SUB',
            'type'=>'admin',
            'permission'=>'approved',
            'skill'=>'Ex-manager at some Company',
            'password'=>bcrypt('111111'),
            'remember_token'=> $this->str_random(10)
        ]);

        User::create([
            'first_name'=>'Prachurja',
            'last_name'=>'Kanti',
            'email'=>'prachurjakanti@gmail.com',
            'phone'=>'01688944648',
//            'country'=>'Canada',
            'institution'=>'MIST',
            'type'=>'instructor',
            'skill'=>'Teacher, trainer',
            'permission'=>'approved',
            'password'=>bcrypt('111111'),
            'remember_token'=> $this->str_random(10)
        ]);

        User::create([
            'first_name'=>'Niaz',
            'last_name'=>'Ahmed',
            'email'=>'niazahamed@gmail.com',
            'phone'=>'01614523633',
            'country'=>'Brazil',
            'institution'=>'JU',
            'type'=>'student',
            'permission'=>'approved',
            'password'=>bcrypt('111111'),
            'remember_token'=> $this->str_random(10)
        ]);

    }

    private function str_random(int $int)
    {
    }
}
