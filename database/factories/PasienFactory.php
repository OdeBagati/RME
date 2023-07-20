<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PasienFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pasien_type' => $this->faker->randomElement(['1', '2', '3']),
            'nama_lengkap' => $this->faker->name,
            'nomor_rekam_medis' => $this->faker->uuid,
            'nik' => $this->faker->numerify('###############'),
            'nomor_id_lain' => $this->faker->numerify('##########'),
            'jenis_kelamin' => $this->faker->randomElement(['0', '1', '2', '3', '4']),
            'nama_ibu_kandung' => $this->faker->name('female'),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'suku' => $this->faker->country,
            'bahasa' => $this->faker->languageCode,
            'umur' => $this->faker->numberBetween(1, 100),
            'alamat' => $this->faker->address,
            'rt' => $this->faker->numerify('##'),
            'rw' => $this->faker->numerify('##'),
            'kelurahan_desa' => $this->faker->citySuffix,
            'kecamatan' => $this->faker->cityPrefix,
            'kota_kabupaten' => $this->faker->city,
            'provinsi' => $this->faker->state,
            'negara' => $this->faker->country,
            'kode_pos' => $this->faker->postcode,
            'alamat_domisili' => $this->faker->secondaryAddress,
            'rt_domisili' => $this->faker->numerify('##'),
            'rw_domisili' => $this->faker->numerify('##'),
            'kelurahan_desa_domisili' => $this->faker->citySuffix,
            'kecamatan_domisili' => $this->faker->cityPrefix,
            'kota_kabupaten_domisili' => $this->faker->city,
            'provinsi_domisili' => $this->faker->state,
            'negara_domisili' => $this->faker->country,
            'kode_pos_domisili' => $this->faker->postcode,
            'nomor_telepon_rumah' => $this->faker->phoneNumber,
            'nomor_hp' => $this->faker->phoneNumber,
            'pendidikan' => $this->faker->randomElement(['0', '1', '2', '3', '4', '5', '6', '7', '8']),
            'pekerjaan' => $this->faker->jobTitle,
            'status_pernikahan' => $this->faker->randomElement(['1', '2', '3', '4']),
            'perkiraan_umur' => $this->faker->numberBetween(1, 100),
            'lokasi_ditemukan' => $this->faker->text,
            'tanggal_ditemukan' => $this->faker->date,
            'nama_penanggung_jawab' => $this->faker->name,
            'nomor_hp_penanggung_jawab' => $this->faker->phoneNumber,
            'hubungan_penanggung_jawab_dengan_pasien' => $this->faker->randomElement(['Orang Tua', 'Saudara', 'Teman']),
            'nama_pengantar' => $this->faker->name,
            'nomor_hp_pengantar' => $this->faker->phoneNumber,
            'hubungan_pengantar_dengan_pasien' => $this->faker->randomElement(['Orang Tua', 'Saudara', 'Teman']),
            'nama_lengkap_ibu_kandung' => $this->faker->name('female'),
            'nik_ibu_kandung' => $this->faker->numerify('###############'),
            'tempat_lahir_ibu_kandung' => $this->faker->city,
            'tanggal_lahir_ibu_kandung' => $this->faker->date,
            'status_puasa' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
