<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detail_Hasiltes;

class DetailHasiltesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mild
        Detail_Hasiltes::create([
            'hasil__tes_id' => 1,
            'pernyataan_id' => 1
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 1,
            'pernyataan_id' => 2
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 1,
            'pernyataan_id' => 3
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 1,
            'pernyataan_id' => 4
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 1,
            'pernyataan_id' => 6
        ]);

        // Clinic
        Detail_Hasiltes::create([
            'hasil__tes_id' => 2,
            'pernyataan_id' => 1
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 2,
            'pernyataan_id' => 2
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 2,
            'pernyataan_id' => 3
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 2,
            'pernyataan_id' => 4
        ]);
        Detail_Hasiltes::create([
            'hasil__tes_id' => 2,
            'pernyataan_id' => 5
        ]);
    }
}
