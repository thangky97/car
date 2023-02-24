<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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


        // $arrData1 = [];

        // for($i =0; $i<5;$i++){
        //     array_push($arrData1, [
        //         'name' => 'admin' ,
        //         'email' => 'admin@gmail.com',
        //         'password' => Hash::make('123456'),
        //         'phone' => '0931657128',
        //         'username' => 'admin',
        //         'birthday' => '2023-02-13',
        //         'role' => rand(0, 1),
        //         'status' => rand(0, 1),
        //         'new_id' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ]);
        // }

        // DB::table('admin')->insert(
        //     $arrData1
        // );
    }
}
