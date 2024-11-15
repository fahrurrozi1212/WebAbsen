<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    public function absen(Request $request)
    {
        $request->validate([
            'lokasi' => 'nullable|string',
        ]);

        Absensi::create([
            'user_id' => Auth::id(),
            'tanggal' => now()->toDateString(),
            'waktu' => now()->toTimeString(),
            'lokasi' => $request->input('lokasi'),
        ]);

        return redirect()->back()->with('success', 'Berhasil absen!');
    }
}
