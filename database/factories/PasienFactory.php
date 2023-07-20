<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pasien_type' => fake()->randomElement(['1', '2', '3']),
            'nama_lengkap' => fake()->name,
            'nomor_rekam_medis' => fake()->uuid,
            'nik' => fake()->numerify('###############'),
            'nomor_id_lain' => fake()->numerify('##########'),
            'jenis_kelamin' => fake()->randomElement(['0', '1', '2', '3', '4']),
            'nama_ibu_kandung' => fake()->name('female'),
            'tempat_lahir' => fake()->city,
            'tanggal_lahir' => fake()->date,
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'suku' => fake()->country,
            'bahasa' => fake()->languageCode,
            'umur' => fake()->numberBetween(1, 100),
            'alamat' => fake()->address,
            'rt' => fake()->numerify('##'),
            'rw' => fake()->numerify('##'),
            'kelurahan_desa' => fake()->citySuffix,
            'kecamatan' => fake()->cityPrefix,
            'kota_kabupaten' => fake()->city,
            'provinsi' => fake()->state,
            'negara' => fake()->country,
            'kode_pos' => fake()->postcode,
            'alamat_domisili' => fake()->secondaryAddress,
            'rt_domisili' => fake()->numerify('##'),
            'rw_domisili' => fake()->numerify('##'),
            'kelurahan_desa_domisili' => fake()->citySuffix,
            'kecamatan_domisili' => fake()->cityPrefix,
            'kota_kabupaten_domisili' => fake()->city,
            'provinsi_domisili' => fake()->state,
            'negara_domisili' => fake()->country,
            'kode_pos_domisili' => fake()->postcode,
            'nomor_telepon_rumah' => fake()->phoneNumber,
            'nomor_hp' => fake()->phoneNumber,
            'pendidikan' => fake()->randomElement(['0', '1', '2', '3', '4', '5', '6', '7', '8']),
            'pekerjaan' => fake()->jobTitle,
            'status_pernikahan' => fake()->randomElement(['1', '2', '3', '4']),
            'perkiraan_umur' => fake()->numberBetween(1, 100),
            'lokasi_ditemukan' => fake()->text,
            'tanggal_ditemukan' => fake()->date,
            'nama_penanggung_jawab' => fake()->name,
            'nomor_hp_penanggung_jawab' => fake()->phoneNumber,
            'hubungan_penanggung_jawab_dengan_pasien' => fake()->randomElement(['Orang Tua', 'Saudara', 'Teman']),
            'nama_pengantar' => fake()->name,
            'nomor_hp_pengantar' => fake()->phoneNumber,
            'hubungan_pengantar_dengan_pasien' => fake()->randomElement(['Orang Tua', 'Saudara', 'Teman']),
            'nama_lengkap_ibu_kandung' => fake()->name('female'),
            'nik_ibu_kandung' => fake()->numerify('###############'),
            'tempat_lahir_ibu_kandung' => fake()->city,
            'tanggal_lahir_ibu_kandung' => fake()->date,
            'status_puasa' => fake()->boolean,
            'user_id' => fake()->numberBetween(1, 100)
        ];
    }
}
