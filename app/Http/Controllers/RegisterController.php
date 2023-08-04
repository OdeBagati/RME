<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('dashboard.asesmen.asesmenAwal');
    }

    public function store(Request $request)
    {
        $tipePasien = $request->input('pasien_type');
        $noRM = $request->input('nomor_rekam_medis');
        $namaLengkap = $request->input('nama_lengkap');
        $tempatLahir = $request->input('tempat_lahir');
        $tanggalLahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamatPasien');
        $provinsi = $request->input('provinsi');
        $kota = $request->input('kota');
        $kecamaan = $request->input('kecamatan');
        $statusPernikahan = $request->input('statusPernikahan');
        $jenisKelamin = $request->input('jenis_kelamin');
        $pekerjaan = $request->input('pekerjaan');
        $pendidikan = $request->input('pendidikan');
        $namaIbu = $request->input('namaIbu');
        $telpRumah = $request->input('noTelpRumah');
        Pasien::create([
            'pasien_type' => $tipePasien,
            'nomor_rekam_medis' => $noRM,
            'nama_lengkap' => $namaLengkap,
            'tempat_lahir' => $tempatLahir,
            'tanggal_lahir' => $tanggalLahir,
            'alamat' => $alamat,
            'provinsi' => $provinsi,
            'kota_kabupaten' => $kota,
            'kecamatan' => $kecamaan,
            'status_pernikahan' => $statusPernikahan,
            'jenis_kelamin' => $jenisKelamin,
            'pekerjaan' => $pekerjaan,
            'pendidikan' => $pendidikan,
            'nama_lengkap_ibu_kandung' => $namaIbu,
            'nomor_telepon_rumah' => $telpRumah
        ]);
        return redirect('/pasiens');
    }
}
