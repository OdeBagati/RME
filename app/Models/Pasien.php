<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_type',
        'nama_lengkap',
        'nomor_rekam_medis',
        'nik',
        'nomor_id_lain',
        'jenis_kelamin',
        'nama_ibu_kandung',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'suku',
        'bahasa',
        'umur',
        'alamat',
        'rt',
        'rw',
        'kelurahan_desa',
        'kecamatan',
        'kota_kabupaten',
        'provinsi',
        'negara',
        'kode_pos',
        'alamat_domisili',
        'rt_domisili',
        'rw_domisili',
        'kelurahan_desa_domisili',
        'kecamatan_domisili',
        'kota_kabupaten_domisili',
        'provinsi_domisili',
        'negara_domisili',
        'kode_pos_domisili',
        'nomor_telepon_rumah',
        'nomor_hp',
        'pendidikan',
        'pekerjaan',
        'status_pernikahan',
        'perkiraan_umur',
        'lokasi_ditemukan',
        'tanggal_ditemukan',
        'nama_penanggung_jawab',
        'nomor_hp_penanggung_jawab',
        'hubungan_penanggung_jawab_dengan_pasien',
        'nama_pengantar',
        'nomor_hp_pengantar',
        'hubungan_pengantar_dengan_pasien',
        'nama_lengkap_ibu_kandung',
        'nik_ibu_kandung',
        'tempat_lahir_ibu_kandung',
        'tanggal_lahir_ibu_kandung',
        'status_puasa',
        'user_id',
    ];
}
