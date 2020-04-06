<?php

use Illuminate\Database\Seeder;

class InvestmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
DB::table('investments')->insert([
           'name' => 'Financial Plan',
           'amount' => 6000,
           'status'=> false,
           'earnings' => 0,
           'description' => 'N/A'
        ]);

        DB::table('investments')->insert([
            'name' => 'Cooporative System',
            'amount' => 0,
            'status'=> false,
            'earnings' => 0,
            'description' => 'N/A'
         ]);

         DB::table('investments')->insert([
            'name' => 'Networking System',
            'amount' => 0,
            'status'=> false,
            'earnings' => 0,
            'description' => 'N/A'
         ]);

         DB::table('investments')->insert([
            'name' => 'Mentoring System',
            'amount' => 0,
            'status'=> false,
            'earnings' => 0,
            'description' => 'N/A'
         ]);

         DB::table('investments')->insert([
            'name' => 'Investment Plan',
            'amount' => 0,
            'status'=> false,
            'earnings' => 0,
            'description' => 'N/A'
         ]);

         DB::table('investments')->insert([
            'name' => 'Educational Plan',
            'amount' => 0,
            'status'=> false,
            'earnings' => 0,
            'description' => 'N/A'
         ]);

         DB::table('investments')->insert([
            'name' => 'Business Plan',
            'amount' => 0,
            'status'=> false,
            'earnings' => 0,
            'description' => 'N/A'
         ]);

         DB::table('investments')->insert([
            'name' => 'Retirement Plan',
            'amount' => 0,
            'status'=> false,
            'earnings' => 0,
            'description' => 'N/A'
         ]);
    }
}
