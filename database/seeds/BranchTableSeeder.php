<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('branches')->insert([
         	'branch_id'=>1,
            'branch_name' => 'Gh Media',
            'branch_location' => 'Achimota',
            'branch_capital' => 40000,
            'name_of_agent'=>'Jacob Teye',
            'date_established'=>'2019/04/01',
        
         
            
        ]);
         DB::table('branches')->insert([
            
            'branch_name' => 'old station',
            'branch_location' => 'Achimota',
            'branch_capital' => 40000,
            'name_of_agent'=>'Jessica',
            'date_established'=>'2019/04/01',
        
         
            
        ]);
           DB::table('branches')->insert([
        
            'branch_name' => 'zoom park',
            'branch_location' => 'Achimota',
            'branch_capital' => 40000,
            'name_of_agent'=>'Janet',
            'date_established'=>'2019/04/01',
        
         
            
        ]);
             DB::table('branches')->insert([
        
            'branch_name' => 'Estate',
            'branch_location' => 'Achimota',
            'branch_capital' => 40000,
            'name_of_agent'=>'Deborah',
            'date_established'=>'2019/04/01',
        
         
            
        ]);
        // DB::table('branches')->insert([
        //  	'branch_id'=>1,
        //     'branch_name' => 'Old Station',
        //     'branch_location' => 'Achimota',
        //     'branch_capital' => 2000,
        //     'name_of_agent'=>'Daniel',
        //     'confirmed_by_id' => 1,
        //     'updated_by_id' => 1
            
        // ]);
        //  DB::table('branches')->insert([
        //  	'branch_id'=>1,
        //     'branch_name' => 'Overhead',
        //     'branch_location' => 'Achimota',
        //     'branch_capital' => 20000,
        //     'name_of_agent'=>'Peace',
        //     'confirmed_by_id' => 1,
        //     'updated_by_id' => 1
            
        // ]);
        //   DB::table('branches')->insert([
        //  	'branch_id'=>1,
        //     'branch_name' => 'Estate',
        //     'branch_location' => 'Achimota',
        //     'branch_capital' => 20000,
        //     'name_of_agent'=>'deborah',
        //     'confirmed_by_id' => 1,
        //     'updated_by_id' => 1
            
        // ]);
        //    DB::table('branches')->insert([
        //  	'branch_id'=>1,
        //     'branch_name' => 'Old Office',
        //     'branch_location' => 'Achimota',
        //     'branch_capital' => 30000,
        //     'name_of_agent'=>'Jessica',
        //     'confirmed_by_id' => 1,
        //     'updated_by_id' => 1
            
        // ]);
    }
}
