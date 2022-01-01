<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['ISBN'=>'9786026940124', 'publisher_id'=>1, 'author_id'=>1,'categories_id'=>1, 'title'=>'IPA & IPS', 'description'=>'Pada dasarnya sifat anak IPA dan IPs berbeda drastis. Hanya karena perbedaanya, mereka tidak penah akur.Mau sama kakak kelas ataupun satu angkatan sama aja,kayak kucing dan anjing.', 'price'=>75000, 'year'=> 2005, 'language'=>'Bahasa', 'page'=>336, 'img'=> 'https://img.wattpad.com/cover/84785969-352-k335922.jpg', 'stock'=>'36', 'sold'=> '2', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['ISBN'=>'9780062457738', 'publisher_id'=>3, 'author_id'=>6, 'categories_id'=>2, 'title'=>'The Subtle Art of Not Giving a Fck', 'description'=>'In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be positive all the time so that we can truly become better, happier people', 'price'=>190500, 'year'=>2019, 'language'=>'English', 'page'=> 240, 'img'=>'https://ebooks.gramedia.com/ebook-covers/34319/thumb_image_normal/ID_HCO2016MTH09TSAONGAF.jpeg', 'stock'=>20, 'sold'=>50, 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['ISBN'=>'9786230303432', 'publisher_id'=>2, 'author_id'=>8, 'categories_id'=>3, 'title'=>'Hai Miiko #32', 'description'=>'Kali ini, Miiko dan kawan-kawan akan pergi wisata sekolah!',  'price'=>40200, 'year'=>2021, 'language'=>'Bahasa', 'page'=>176, 'img'=>'https://cdn.gramedia.com/uploads/items/9786230303432_Miiko_32_REGULAR-1.jpg', 'stock'=>50, 'sold'=>20, 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()]
        ]);

        DB::table('users')->insert([
            ['name'=>'Dummy', 'email'=>'dummyemail@gmail.com', 'password'=>bcrypt('dummydummy21'), 'address'=>'Jl. Dummy dum dum', 'phone'=>'0896522222']
        ]);
    }
}
