<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kode_barang = ['PRD001', 'PRD002', 'PRD003', 'PRD004', 'PRD005', 'PRD006', 'PRD007', 'PRD008', 'PRD009', 'PRD010',
                        'PRD011', 'PRD012', 'PRD013', 'PRD014', 'PRD015', 'PRD016', 'PRD017', 'PRD018', 'PRD019', 'PRD020'];

        $nama_barang = ['Indomie', 'Pocari Sweat', 'Silverqueen', 'Pepsodent', 
                        'Buburia', 'Fruit Tea', 'Lays', 'Dove',
                        'Sari Roti', 'Frisian Flag', 'Oishi', 'Lem UHU',
                        'Samyang', 'Freshtea', 'Chitato', 'Minyak Goreng Sania',
                        'Pop Mie', 'Teh Kotak', 'Oreo', 'Bango'];

        $kategori_barang = ['Makanan', 'Minuman', 'Snack', 'Perlengkapan',
                            'Makanan', 'Minuman', 'Snack', 'Perlengkapan',
                            'Makanan', 'Minuman', 'Snack', 'Perlengkapan',
                            'Makanan', 'Minuman', 'Snack', 'Perlengkapan',
                            'Makanan', 'Minuman', 'Snack', 'Perlengkapan'];

        $harga = [3000, 6000, 12500, 11000, 6000, 7000, 8700, 45000, 15000, 14500, 
                16000, 28000, 25000, 3000, 2800, 28000, 10000, 6000, 7000, 20000];

        $qty = [100, 50, 45, 33, 10, 29, 82, 10, 45, 0, 0, 32, 40, 14, 55, 16, 87, 28, 99, 100];

        for($i=0; $i < 20; $i++){
            DB::table('barangs')->insert([
                'kode_barang' => $kode_barang[$i],
                'nama_barang' => $nama_barang[$i],
                'kategori_barang' => $kategori_barang[$i],
                'harga' => $harga[$i],
                'qty' => $qty[$i]
            ]);
        } 
    }
}
