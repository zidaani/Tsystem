<?php

use Illuminate\Database\Seeder;

class TransactonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction')->insert([
         	'trans_id'=>1,
            'branch_id' => 1,
            'uid' => 1,
            'daily_amount'=> 40,
            'date' => '1997/02/06',
            'confirmed_by_id' => 1,
            'updated_by_id' => 1
            
        ]);
         DB::table('transaction')->insert([
         	
            'branch_id' => 1,
            'uid' => 1,
            'daily_amount'=> 90,
            'date' => '1997/02/06',
            'confirmed_by_id' => 1,
            'updated_by_id' => 1
            
        ]);
          DB::table('transaction')->insert([
         	
            'branch_id' => 1,
            'uid' => 1,
            'daily_amount'=> 70,
            'date' => '1997/02/06',
            'confirmed_by_id' => 1,
            'updated_by_id' => 1
            
        ]);
           DB::table('transaction')->insert([
         	
            'branch_id' => 1,
            'uid' => 1,
            'daily_amount'=> 80,
            'date' => '1997/02/06',
            'confirmed_by_id' => 1,
            'updated_by_id' => 1
            
        ]);
            DB::table('transaction')->insert([
         	
            'branch_id' => 2,
            'uid' => 2,
            'daily_amount'=> 100,
            'date' => '1997/02/06',
            'confirmed_by_id' => 1,
            'updated_by_id' => 1
            
        ]);
             DB::table('transaction')->insert([
         	
            'branch_id' => 3,
            'uid' => 3,
            'daily_amount'=> 120,
            'date' => '1997/02/06',
            'confirmed_by_id' => 1,
            'updated_by_id' => 1
            
        ]);
    }
}
