<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'tipe',
        'model',
        'tahun',
        'jumlahPenumpang',
        'manufaktur',
        'harga',
        'tipeBahanBakar',
        'luasKargo',
        'ukuranBagasi',
        'kapasitasBahanBakar'
    ];

    public function orders() {
        return $this->hasMany(Order::class);
    }

}
