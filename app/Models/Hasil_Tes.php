<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil_Tes extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function tests()
    {
        return $this->belongsTo(Test::class);
    }

    public function pernyataans()
    {
        return $this->belongsToMany(Pernyataan::class, 'detail__hasiltes', 'hasil__tes_id', 'pernyataan_id');
    }
}
