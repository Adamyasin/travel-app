<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JadwalTravel extends Model
{
    use HasFactory;

    protected $table = 'jadwal_travel';
    protected $fillable = ['tujuan', 'tanggal_keberangkatan', 'kuota', 'harga_tiket'];
    protected $casts = ['tanggal_keberangkatan' => 'datetime'];

    public function pemesanan(): HasMany
    {
        return $this->hasMany(Pemesanan::class);
    }
}
