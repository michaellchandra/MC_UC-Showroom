<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kendaraan',
        'id_customer',
        'jumlahKendaraan',
        'totalBiaya'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id_kendaraan');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }
}
