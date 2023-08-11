<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnknownPasienRequest extends FormRequest
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
            "nama_lengkap" => "required|max:255",
            "perkiraan_umur" => "required|integer",
            "lokasi_ditemukan" => "required|max:5000",
            "tanggal_ditemukan" => "required|date",
            "jenis_kelamin" => "required|in:0,1,2,3,4",
            "nama_penanggung_jawab" => "required|max:255",
            "nomor_hp_penanggung_jawab" => "required|numeric",
            "hubungan_penanggung_jawab_dengan_pasien" => "required|max:255",
            "nama_pengantar" => "required|max:255",
            "nomor_hp_pengantar" => "required|numeric",
            "hubungan_pengantar_dengan_pasien" => "required|max:255",
        ];
    }
}
