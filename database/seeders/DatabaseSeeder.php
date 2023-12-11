<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('kategori')->insert([
            [
                'nama' => 'Slow Moving',
            ],
            [
                'nama' => 'Fast Moving',
            ]
        ]);

        // Seeder untuk tabel 'barang' dengan ID kategori yang sesuai
        DB::table('barang')->insert([
            [
                'id' => 1,
                'kode_barang' => 'BRG0001',
                'nama_barang' => 'Kampas Kopling Daytona',
                'id_kategori' => 1, // Sesuaikan dengan ID kategori yang sesuai
                'harga' => 75000,
                'jumlah' => 50,
            ],
            [
                'id' => 2,
                'kode_barang' => 'BRG0002',
                'nama_barang' => 'Oli Federal Matic',
                'id_kategori' => 2, // Sesuaikan dengan ID kategori yang sesuai
                'harga' => 50000,
                'jumlah' => 10,
            ]
        ]);
    }
}
