<?php

use Illuminate\Database\Seeder;
use App\TipeBarang;

class TipeBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kat = ['Elektronik','Pria','Wanita','Buku','Furniture','Kendaraan','Lain-lain'];

        for ($i=0; $i < count($kat); $i++) { 
        	TipeBarang::create([
        		'tipe_barang' => $kat[$i]
        	]);
        }
    }
}
