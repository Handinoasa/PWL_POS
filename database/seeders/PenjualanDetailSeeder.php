<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;

        for ($i = 1; $i <= 10; $i++) {
            // Transaksi ke-$i membeli 3 barang yang berbeda
            $data[] = [
                'detail_id' => $detail_id++,
                'penjualan_id' => $i,
                'barang_id' => 1, // TV Samsung
                'harga' => 2500000,
                'jumlah' => 1
            ];
            $data[] = [
                'detail_id' => $detail_id++,
                'penjualan_id' => $i,
                'barang_id' => 4, // Kemeja Pria
                'harga' => 150000,
                'jumlah' => 2
            ];
            $data[] = [
                'detail_id' => $detail_id++,
                'penjualan_id' => $i,
                'barang_id' => 7, // Indomie Goreng
                'harga' => 3000,
                'jumlah' => 5
            ];
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
