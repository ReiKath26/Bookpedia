<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['name'=> 'Putri Azzahra', 'desc'=>'ChaChaii di wattpad', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Tere Liye', 'desc'=>'Tere Liye (lahir di Lahat, Indonesia, 21 Mei 1979;), dikenal sebagai penulis novel. Beberapa karyanya yang pernah diangkat ke layar kaca yaitu Hafalan Shalat Delisa dan Moga Bunda Disayang Allah. ', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Olivia Lin', 'desc'=>'Penulis belum memiliki deskripsi', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Dee Lestari', 'desc'=>'Dewi Lestari Simangunsong yang akrab dipanggil Dee adalah seorang penulis dan penyanyi asal Indonesia. ', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Lexie Xu', 'desc'=>'Penulis asal pontianak ini memilih genre thriller untuk novel-novel yang ditulisnya. Ia juga seorang Sherlokian dan juga salah satu penggemar dari sutradara J.J Abrams. Karya-karya yang sudah lahir dari Lixie Xu yaitu Johan Series yang terdiri dari empat buku : Obsesi, Pengurus MOS Harus Mati, Permainan Maut, dan Teror, serta Omen Series yang sudah terbit lima buku.', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Mark Manson', 'desc'=>'Mark Manson (lahir 9 Maret 1984) adalah seorang penulis self-help, blogger dan pengusaha Amerika.', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Fellexandro Ruby', 'desc'=>'Penulis belum memiliki deskripsi', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Ono Eriko', 'desc'=>'Penulis belum memiliki deskripsi', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()],
            ['name'=> 'Koyoharu Gotouge', 'desc'=>'Penulis belum memiliki deskripsi', 'created_at' => Carbon::now(), 'updated_at'=> Carbon::now()]
        ]);
    }
}
