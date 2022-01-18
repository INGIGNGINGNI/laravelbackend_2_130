<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'name' => 'Ingkamon Poolnual',
                'email' => '622021130@tsu.ac.th',
                'password' => Hash::make('123456'),
                'address' => 'Thaksin University',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kanokporn Nakpin',
                'email' => '622021094@tsu.ac.th',
                'password' => Hash::make('223344'),
                'address' => 'Thaksin University',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Naphat Keawpiban',
                'email' => 'naphat.k@tsu.ac.th',
                'password' => Hash::make('112234'),
                'address' => 'Thaksin University',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
