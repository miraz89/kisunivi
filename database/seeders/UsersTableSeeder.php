<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a Default User

        $user = User::where('email','miraz@gmail.com')->first();

        if (is_null($user)){
            DB::table('users')->insert([
                'name' => 'Miraz',
                'email' => 'miraz@gmail.com',
                'status' => User::STATUS_ACTIVE,
                'password' => bcrypt('miraz@gmail.com'),
            ]);
        }
        DB::table('settings')->insert([
            'favicon' => '',
            'logo' => '',
            'title' => 'নিজের বলার মতো একটা গল্প',
        ]);
        DB::table('abouts')->insert([
            'title' => '',
        ]);
        DB::table('abouts')->insert([
            'title' => '',
        ]);
        DB::table('abouts')->insert([
            'title' => '',
        ]);
    }
}
