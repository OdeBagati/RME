<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        $countUmum = Pasien::where('pasien_type', '1')->count();
        $countUnknown = Pasien::where('pasien_type', '2')->count();
        $countBayi = Pasien::where('pasien_type', '3')->count();

        $data = [
            'pasiens' => $pasiens,
            'countUmum' => $countUmum,
            'countUnknown' => $countUnknown,
            'countBayi' => $countBayi
        ];

        return view('dashboard.pasien', $data);
    }
}
