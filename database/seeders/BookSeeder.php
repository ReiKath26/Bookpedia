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
            ['ISBN'=>'9786026940124', 
            'publisher_id'=>1, 
            'author_id'=>1,
            'categories_id'=>1, 
            'title'=>'IPA & IPS', 
            'description'=>'Pada dasarnya sifat anak IPA dan IPs berbeda drastis. Hanya karena perbedaanya, mereka tidak penah akur.Mau sama kakak kelas ataupun satu angkatan sama aja,kayak kucing dan anjing.', 
            'price'=>75000, 
            'year'=> 2005, 
            'language'=>'Bahasa', 
            'page'=>336, 
            'img'=> 'https://img.wattpad.com/cover/84785969-352-k335922.jpg', 
            'stock'=>'36', 
            'sold'=> '2', 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'9780062457738', 
            'publisher_id'=>3, 
            'author_id'=>6, 
            'categories_id'=>2, 
            'title'=>'The Subtle Art of Not Giving a Fck', 
            'description'=>'In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be positive all the time so that we can truly become better, happier people', 
            'price'=>190500, 
            'year'=>2019, 
            'language'=>'English', 
            'page'=> 240, 
            'img'=>'https://ebooks.gramedia.com/ebook-covers/34319/thumb_image_normal/ID_HCO2016MTH09TSAONGAF.jpeg', 
            'stock'=>20, 
            'sold'=>50, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'9786230303432', 
            'publisher_id'=>2, 
            'author_id'=>8, 
            'categories_id'=>3, 
            'title'=>'Hai Miiko #32', 
            'description'=>'Kali ini, Miiko dan kawan-kawan akan pergi wisata sekolah!',  
            'price'=>40200, 
            'year'=>2021, 
            'language'=>'Bahasa', 
            'page'=>176, 
            'img'=>'https://cdn.gramedia.com/uploads/items/9786230303432_Miiko_32_REGULAR-1.jpg', 'stock'=>50, 
            'sold'=>20, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],
            
            ['ISBN'=>'8907635172891', 
            'publisher_id'=>4, 
            'author_id'=>9, 
            'categories_id'=>4, 
            'title'=>'Knowledge to Freedom', 
            'description'=>'Sebuah buku yang menceritakan tentang pengetahuan yang lebih dalam.',  
            'price'=>58000, 
            'year'=>2003, 
            'language'=>'Bahasa', 
            'page'=>200, 
            'img'=>'https://th.bing.com/th/id/OIP.10KFwqkiTlwVvaohnKY8kAHaKu?pid=ImgDet&rs=1', 'stock'=>250, 
            'sold'=>120, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'563789172637', 
            'publisher_id'=>1, 
            'author_id'=>3, 
            'categories_id'=>1, 
            'title'=>'Harry Potter', 
            'description'=>'Sebuah dunia fantasi yang penuh perjalanan misterius di dalamnya',  
            'price'=>58000, 
            'year'=>1997, 
            'language'=>'English', 
            'page'=>200, 
            'img'=>'https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2014/7/30/1406719264487/fd90e162-93de-41b1-aea5-f8e49227e85b-1360x2040.jpeg?w=1200&q=55&auto=format&usm=12&fit=max&s=6aec5983026d71051e0abf881c79ab6f', 'stock'=>250, 
            'sold'=>120, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'892635617827', 
            'publisher_id'=>3, 
            'author_id'=>5, 
            'categories_id'=>3, 
            'title'=>'Doraemon', 
            'description'=>'catatan legendaris tentang pembuatan karakter serta cerita orisinal di balik komik kelahiran Doraemon yang dituliskan langsung oleh sang pengarang sendiri',  
            'price'=>32000, 
            'year'=>1969, 
            'language'=>'Bahasa', 
            'page'=>90, 
            'img'=>'https://4.bp.blogspot.com/-3LhRgMMcGTo/Tc-30WPX-II/AAAAAAAAHW8/tbKldTVOdKs/s1600/Doraemon+special%252C+edisi+khusus%252C+edisi+spesial%252C+edisi+istimewa%252C+nobita%252C+doraemon%252C+robot+kucing.jpg', 'stock'=>350, 
            'sold'=>250, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'672543678172', 
            'publisher_id'=>6, 
            'author_id'=>7, 
            'categories_id'=>1, 
            'title'=>'Bumi', 
            'description'=>'menceritakan tentang seorang anak perempuan yang berumur 15 tahun bernama Raib. Sejak kecil ia sudah mempunyai sebuah rahasia, yaitu kekuatan untuk bisa menghilang',  
            'price'=>78000, 
            'year'=>2017, 
            'language'=>'Bahasa', 
            'page'=>160, 
            'img'=>'https://1.bp.blogspot.com/-8APpXxN1HJs/Xthl-2c47SI/AAAAAAAAGGc/jMbRQw4znsMAJPpw_Psc7_tWCAMhb0B9gCLcBGAsYHQ/s1600/6E0E24BB-3CBE-47DF-8327-6EC62D7CCB00.jpeg', 
            'stock'=>350, 
            'sold'=>250, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'253647189273', 
            'publisher_id'=>2, 
            'author_id'=>9, 
            'categories_id'=>4, 
            'title'=>'The Pesonal MBA', 
            'description'=>'Menceritakan soal bisnis dan trick and tips untuk berbisnis',  
            'price'=>156000, 
            'year'=>2014, 
            'language'=>'English', 
            'page'=>300, 
            'img'=>'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/5/30/29544018/29544018_31c83d76-09c9-46df-bb23-2ac356055c0d_600_600', 
            'stock'=>100, 
            'sold'=>99, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'5243567152432', 
            'publisher_id'=>5, 
            'author_id'=>6, 
            'categories_id'=>2, 
            'title'=>'B.J.Habibie Si Jenius', 
            'description'=>'Menceritakan riwayat seseorang yang memiliki IQ tinggi diatas rata-rata',  
            'price'=>99000, 
            'year'=>2013, 
            'language'=>'Bahasa', 
            'page'=>189, 
            'img'=>'https://2.bp.blogspot.com/-2QbnpVkOvKs/WtFwjhxqARI/AAAAAAAACxA/GOd7CqJFCjQnuxMQGKVlTj_isf7MObk6gCLcBGAs/s1600/aa.png', 
            'stock'=>45, 
            'sold'=>10, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'9028736471898', 
            'publisher_id'=>2, 
            'author_id'=>4, 
            'categories_id'=>4, 
            'title'=>'100 Personal Development Books', 
            'description'=>'100 kebiasaan yang akan mengubah hidupmu',  
            'price'=>75000, 
            'year'=>1999, 
            'language'=>'Bahasa', 
            'page'=>95, 
            'img'=>'https://i.pinimg.com/originals/9c/6d/62/9c6d62309fa2adb9aee2fd9482d259fa.jpg', 
            'stock'=>10, 
            'sold'=>2, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'67273817263546', 
            'publisher_id'=>1, 
            'author_id'=>6, 
            'categories_id'=>3, 
            'title'=>'Inuyasha', 
            'description'=>'Cerita berawal di Tokyo, Jepang, seorang gadis SMU bernama Higurashi Kagome. Dia sedang mencari kucingnya Buyo yang jatuh ke sumur, karena adiknya takut untuk masuk.',  
            'price'=>32000, 
            'year'=>1978, 
            'language'=>'Bahasa', 
            'page'=>65, 
            'img'=>'https://www.bukukita.com/babacms/displaybuku/108699_f.jpg', 
            'stock'=>1000, 
            'sold'=>998, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],

            ['ISBN'=>'524357162783', 
            'publisher_id'=>2, 
            'author_id'=>3, 
            'categories_id'=>4, 
            'title'=>'Never Split The Difference', 
            'description'=>'Negoitating as if your life depended on it',  
            'price'=>55000, 
            'year'=>2001, 
            'language'=>'English', 
            'page'=>90, 
            'img'=>'https://ecs7.tokopedia.net/img/cache/700/product-1/2020/4/23/29544018/29544018_c2797184-3f56-4274-af5d-666c68b3e9ad_600_600', 
            'stock'=>800, 
            'sold'=>220, 
            'created_at' => Carbon::now(), 
            'updated_at'=> Carbon::now()],
        ]);

        DB::table('users')->insert([
            ['name'=>'Dummy', 'email'=>'dummyemail@gmail.com', 'password'=>bcrypt('dummydummy21'), 'address'=>'Jl. Dummy dum dum', 'phone'=>'0896522222', 'status'=>'user'],
            ['name'=>'Admin', 'email'=>'adminlogin@gmail.com', 'password'=>bcrypt('adminlogin'), 'address'=>'none', 'phone'=>'07777777777', 'status'=>'admin']
        ]);
    }
}
