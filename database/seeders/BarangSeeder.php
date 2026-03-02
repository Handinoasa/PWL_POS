<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori 1: Elektronik
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'TV Samsung', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Kulkas LG', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG03', 'barang_nama' => 'Mesin Cuci Sharp', 'harga_beli' => 1500000, 'harga_jual' => 1800000],
            // Kategori 2: Pakaian
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Kemeja Pria', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG05', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG06', 'barang_nama' => 'Jaket Hoodie', 'harga_beli' => 200000, 'harga_jual' => 250000],
            // Kategori 3: Makanan
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG07', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG08', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG09', 'barang_nama' => 'Biskuit Roma', 'harga_beli' => 8000, 'harga_jual' => 10000],
            // Kategori 4: Minuman
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG10', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG11', 'barang_nama' => 'Teh Pucuk', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG12', 'barang_nama' => 'Susu Bear Brand', 'harga_beli' => 9000, 'harga_jual' => 10000],
            // Kategori 5: ATK
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG13', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG14', 'barang_nama' => 'Bolpoin Standard', 'harga_beli' => 1500, 'harga_jual' => 2000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG15', 'barang_nama' => 'Kertas HVS A4', 'harga_beli' => 40000, 'harga_jual' => 45000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
