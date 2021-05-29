<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku1 = new Buku;
        $buku1->kode_buku = "B01";
        $buku1->gambar = "buku arsitektur komputer.jpg";
        $buku1->nama_buku = "Arsitektur Komputer";
        $buku1->nama_pengarang = "Santoso Budi";
        $buku1->save();
        
        $buku2 = new Buku;
        $buku2->kode_buku = "B02";
        $buku2->gambar = "buku rpl.jpg";
        $buku2->nama_buku = "Rekayasa Perangkat Lunak";
        $buku2->nama_pengarang = "Hariyanto Bambang";
        $buku2->save();

        $buku3 = new Buku;
        $buku3->kode_buku = "B03";
        $buku3->gambar = "buku sistem operasi.jpg";
        $buku3->nama_buku = "Sistem Operasi";
        $buku3->nama_pengarang = "Wahyono Teguh";
        $buku3->save();
    }
}
