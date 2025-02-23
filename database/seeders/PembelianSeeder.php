<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // 

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("produk")->insert([
                'produk' => "ikan kakap",
                'no'     => 1,
                'harga'  => 5000000,
                'jumlah' => 2,
                'total_harga' => 10000000
            ]);
            DB::table("produk")->insert([
                    'produk' => "kerang  dara",
                    'no'     => 2,
                    'harga'  => 7500000,
                    'jumlah' => 1,
                    'total_harga' => 7500000
            ]);
    }
}
