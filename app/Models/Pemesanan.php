<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanans';
    protected $fillable = ['jadwal_travel_id', 'nama_penumpang', 'kode_booking', 'jumlah_bayar'];

    public function jadwalTravel()
    {
        return $this->belongsTo(JadwalTravel::class);
    }
}
