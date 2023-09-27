<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hasil_Tes;

class HasilTesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hasil_Tes::create([
            'hasil' => 'Mild Anxiety',
            'totalpoin' => 6,
            'user_id' => 1,
            'test_id' => 1
        ]);
        Hasil_Tes::create([
            'hasil' => 'Clinical Depression',
            'totalpoin' => 5,
            'user_id' => 2,
            'test_id' => 1
        ]);
    }
}
