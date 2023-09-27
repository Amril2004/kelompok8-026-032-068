<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pernyataan;

class PernyataanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pernyataan::create([
            'pernyataan' => 'Tidak dapat melihat hal positif dari suatu kejadian',
            'poin' => 1,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Merasa sepertinya tidak kuat lagi melakukan kegiatan',
            'poin' => 1,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Pesimis',
            'poin' => 1,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Merasa diri tidak layak',
            'poin' => 1,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Merasa hidup tidak berharga',
            'poin' => 1,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Cenderung bereaksi berlebihan pada situasi lingkungan',
            'poin' => 2,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Perubahan denyut jantung dan nadi tanpa alasan yang jelas (berdebar)',
            'poin' => 2,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Mudah panik',
            'poin' => 2,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Kesulitan untuk tenang setelah terjadi sesuatu yang mengganggu',
            'poin' => 2,
            'test_id' => 1,
            'status' => 1,
        ]);
        Pernyataan::create([
            'pernyataan' => 'Berkeringat tanpa pencetus yang jelas (misalnya: tangan berkeringat)',
            'poin' => 2,
            'test_id' => 1,
            'status' => 1,
        ]);
    }
}
