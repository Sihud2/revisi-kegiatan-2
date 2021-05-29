<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new user;
        $user1->name = "Jono";
        $user1->jurusan = "Teknik Informatika";
        $user1->id_buku = "B02";
        $user1->nama_buku = "Rekayasa Perangkat Lunak";
        $user1->tanggal_pinjam = "12-02-2021";
        $user1->tanggal_pengembalian = "00-00-0000";
        $user1->save();
        
        $user2 = new user;
        $user2->name = "Joni";
        $user2->jurusan = "Teknik Informatika";
        $user2->id_buku = "B01";
        $user2->nama_buku = "Arsitektur Komputer";
        $user2->tanggal_pinjam = "10-02-2021";
        $user2->tanggal_pengembalian = "00-00-0000";
        $user2->save();

        $user3 = new user;
        $user3->name = "Bono";
        $user3->jurusan = "Teknik Informatika";
        $user3->id_buku = "B03";
        $user3->nama_buku = "Sistem Operasi";
        $user3->tanggal_pinjam = "14-02-2021";
        $user3->tanggal_pengembalian = "00-00-0000";
        $user3->save();
    }
}
