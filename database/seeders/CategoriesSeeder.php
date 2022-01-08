<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=> 'Fiction', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=> 'Non-fiction', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=>'Comics', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=>'Self Development', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=>'Imported Book', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()]
        ]);
    }
}
