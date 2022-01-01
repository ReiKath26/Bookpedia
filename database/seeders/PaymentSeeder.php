<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            ['payment_method'=>'BCA','payment_type'=>'Transfer', 'payment_desc'=>'Bank Transfer BCA', 'admin_fee'=>3500, 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['payment_method'=>'OVO', 'payment_type'=>'virtual wallet', 'payment_desc'=>'Bayar pakai OVO', 'admin_fee'=>2000, 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()]
        ]);
    }
}
