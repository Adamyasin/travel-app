<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalTravel;
use App\Models\Pemesanan;

class JadwalTravelController extends Controller
{
    public function index()
    {
        $jadwal = JadwalTravel::withCount('penumpang')->get(); // Hitung jumlah penumpang per jadwal
        return response()->json($jadwal);
    }

    public function store(Request $request)
    {
        $jadwal = JadwalTravel::updateOrCreate(
            ['id' => $request->id], // Jika ada ID, update; jika tidak, buat baru
            [
                'tujuan' => $request->tujuan,
                'tanggal_keberangkatan' => $request->tanggal_keberangkatan,
                'kuota' => $request->kuota,
                'harga_tiket' => $request->harga_tiket
            ]
        );

        return response()->json($jadwal);
    }

    public function destroy($id)
    {
        JadwalTravel::find($id)->delete();
        return response()->json(['success' => true]);
    }

    public function getPenumpang($id)
    {
        $penumpang = Pemesanan::where('jadwal_id', $id)->get(); // Ambil semua penumpang dari jadwal travel
        return response()->json($penumpang);
    }
}
