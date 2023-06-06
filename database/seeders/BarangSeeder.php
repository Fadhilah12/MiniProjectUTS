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
        DB::table('barangs')->insert([
            [
                'kode_barang' => '1A',
                'nama_barang' => 'Kyunggie Sanrio',
                'harga_barang' => 250000,
                'deskripsi_barang' => 'Flat Shoes',
                'satuan_id' => 1,
            ],
            [
                'kode_barang' => '2B',
                'nama_barang' => 'Kyunggie Tutu',
                'harga_barang' => 400000,
                'deskripsi_barang' => 'Dress',
                'satuan_id' => 2,
            ],
        ]);
    }
}
