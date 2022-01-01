<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shippings')->insert([
            ['shipment_company'=>'JNE', 'shipment_type'=>'Reguler', 'shipment_price'=>'15000', 'min_shipment_duration'=>3, 'max_shipment_duration'=>7],
            ['shipment_company'=>'JNE', 'shipment_type'=>'Express', 'shipment_price'=>'35000', 'min_shipment_duration'=>1, 'max_shipment_duration'=>2],
            ['shipment_company'=>'Si Cepat', 'shipment_type'=>'Reguler', 'shipment_price'=>'17000', 'min_shipment_duration'=>4, 'max_shipment_duration'=>7],
        ]);
    }
}
