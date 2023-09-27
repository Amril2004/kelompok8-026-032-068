<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pernyataan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tests()
    {
        return $this->belongsTo(Test::class);
    }

    public function hasil__tes()
    {
        return $this->belongsToMany(Hasil_Tes::class, 'detail__hasiltes', 'pernyataan_id', 'hasil__tes_id');
    }
}
