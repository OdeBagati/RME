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

        return view('dashboard.pasien.index', $data);
    }

    public function create()
    {
        return view('dashboard.pasien.create');
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
        $nik = $request->input('nik');
        $negara = $request->input('negara');
        $kodePos = $request->input('kodePos');
        $alamatDomisili = $request->input('alamatDomisili');
        $negaraDomisili = $request->input('negaraDomisili');
        $provinsiDomisili = $request->input('provinsiDomisili');
        $kotaDomisili = $request->input('kotaDomisili');
        $kecamaanDomisili = $request->input('kecamatanDomisili');
        $kodePosDomisili = $request->input('kodePosDomisili');
        $telpPasien = $request->input('noTelpSelular');
        $agama = $request->input('agama');
        $noId = $request->input('noId');
        $bahasa = $request->input('bahasa');
        $metodePembayaran = $request->input('metodePembayaran');
        Pasien::create([
            'pasien_type' => $tipePasien,
            'nomor_rekam_medis' => $noRM,
            'nama_lengkap' => $namaLengkap,
            'tempat_lahir' => $tempatLahir,
            'tanggal_lahir' => $tanggalLahir,
            'alamat' => $alamat,
            'negara' => $negara,
            'provinsi' => $provinsi,
            'kota_kabupaten' => $kota,
            'kecamatan' => $kecamaan,
            'kode_pos' => $kodePos,
            'status_pernikahan' => $statusPernikahan,
            'jenis_kelamin' => $jenisKelamin,
            'pekerjaan' => $pekerjaan,
            'pendidikan' => $pendidikan,
            'nama_ibu_kandung' => $namaIbu,
            'nomor_telepon_rumah' => $telpRumah,
            'nomor_id_lain' => $noId,
            'bahasa' => $bahasa,
            'nik' => $nik,
            'agama' => $agama,
            'alamat_domisili' => $alamatDomisili,
            'negara_domisili' => $negaraDomisili,
            'provinsi_domisili' => $provinsiDomisili,
            'kota_kabupaten_domisili' => $kotaDomisili,
            'kecamatan_domisili' => $kecamaanDomisili,
            'kode_pos_domisili' => $kodePosDomisili,
            'nomor_hp' => $telpPasien,
        ]);
        return redirect('/registerPasien/create');
    }
}
