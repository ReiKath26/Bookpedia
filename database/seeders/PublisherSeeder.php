<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            ['name'=> 'Coconut Books', 
            'address'=> 'Unlisted', 
            'phone'=> '08119981898',
            'url'=>'https://linktr.ee/coconutbooks', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=> 'Gramedia Pustaka Utama', 
            'address'=> 'Jl. Palmerah Barat No.29-37 Jakarta 10270 - Indonesia', 
            'phone'=> '(021)53650110',
            'url'=>'https://www.gpu.id/', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=> 'Elex Media Komputindo', 
            'address'=> 'Jl. Palmerah Barat 29-31 -- Jakarta 10270', 
            'phone'=> '(021)53691066',
            'url'=>'https://elexmedia.id/', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=> 'Syntax Publishing',
            'address'=> 'Jl. bogoria No. 90 - Bogor',
            'phone'=> '(021)14563782',
            'url'=> 'https://syntaxpublishing.co.id/',
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=> 'deepublish',
            'address' => 'Jl. Kamboja II No. 89 - Bandung',
            'phone'=> '(021)63871829',
            'url'=> 'https://penerbitdeepublish.com/',
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['name'=> 'AyPublisher',
            'address'=> 'Kabupaten Sidoarjo, Jawa Timur',
            'phone'=> '(021)90726378',
            'url'=> 'https://aypublisher.co.id/',
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()]
        ]);
    }
}
