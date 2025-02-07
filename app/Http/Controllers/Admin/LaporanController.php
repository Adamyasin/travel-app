<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalTravel;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = JadwalTravel::withCount('penumpang')->get(); // Hitung jumlah penumpang per jadwal
        return response()->json($laporan);
    }
}
