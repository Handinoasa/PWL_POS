<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Jangan lupa tambahkan ini

class KategoriController extends Controller
{
    public function index()
    {
        /* Percobaan 1: Insert Data */
        /*$data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil';
        */

        /* Percobaan 2: Update Data */
            /*$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')
            ->update(['kategori_nama' => 'Camilan']);
            return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';
        */
        
        /*Percobaan 3: Delete Data */
            /*$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
            return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';
        */

        /* Percobaan 4: Select Data */
        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}