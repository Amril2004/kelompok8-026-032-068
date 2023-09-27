<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pernyataans()
    {
        return $this->hasMany(Pernyataan::class);
    }

    public function hasil__tes()
    {
        return $this->hasMany(Hasil_Tes::class);
    }
}
