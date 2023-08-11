<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUmumPasienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "nomor_rekam_medis" => "required|max:255",
            "nama_lengkap" => "required|max:255",
            "status_pernikahan" => "required|in:1,2,3,4",
            "jenis_kelamin" => "required|in:0,1,2,3,4",
            "tempat_lahir" => "required|max:100",
            "tanggal_lahir" => "required|date",
            "pekerjaan" => "required|max:100",
            "pendidikan" => "required|in:0,1,2,3,4,5,6,7,8",
            "alamat" => "required|max:5000",
            "nama_ibu_kandung" => "required|max:100",
            "nomor_telepon_rumah" => "required",
            "negara" => "required|max:100",
            "provinsi" => "required|max:100",
            "kota_kabupaten" => "required|max:100",
            "nik" => "required|digits:17",
            "nomor_id_lain" => "required|max:100",
            "kecamatan" => "required|max:100",
            "agama" => "required|max:100",
            "bahasa" => "required|max:100",
            "nomor_hp" => "required|max:100",
            "kode_pos" => "required|max:100",
            "alamat_domisili" => "required|max:100",
            "negara_domisili" => "required|max:100",
            "provinsi_domisili" => "required|max:100",
            "kota_kabupaten_domisili" => "required|max:100",
            "kecamatan_domisili" => "required|max:100",
            "kode_pos_domisili" => "required|max:100",
        ];
    }
}
