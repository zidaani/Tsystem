<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
         	'branch_id'=>1,
            'first_name' => 'John',
            'last_name' => 'Ziba',
            'other_name'=> 'Zidaani',
            'education' => 'Tertiary',
            'date_of_birth' => '30/12/1997',
            'sex' => 'male',
            'home_town' => 'Bolgatanga',
            'residential_address' => 'Achimota Abofu',
            'type_id'=>1,
            'email' => 'johnnyzibs@gmail.com',
            'password' => Hash::make('ghana2.ziba'),
         
        ]);
           DB::table('users')->insert([
         	'branch_id'=>1,
            'first_name' => 'Jacob',
            'last_name' => 'Kwernah',
            'other_name'=> 'Sikatsu',
            'education' => 'Secondary',
            'date_of_birth' => '3/12/1997',
            'sex' => 'male',
            'home_town' => 'Krobo',
            'residential_address' => 'Achimota Abofu',
            'type_id'=>2,
            'email' => 'jakes@gmail.com',
            'password' => Hash::make('ghana2.ziba'),
         
        ]);
    }
}
