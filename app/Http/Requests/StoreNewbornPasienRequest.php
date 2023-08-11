<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewbornPasienRequest extends FormRequest
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
            "pasien_type" => "required|in:1,2,3",
            "nik_ibu_kandung" => "required|numeric",
            "nama_lengkap" => "required|max:255",
            "nomor_rekam_medis" => "required",
            "tanggal_lahir" => "required|date",
            "jenis_kelamin" => "required|in:0,1,2",
            "nama_penanggung_jawab" => "required|max:255",
            "nomor_hp_penanggung_jawab" => "required|numeric",
            "hubungan_penanggung_jawab_dengan_pasien" => "required|max:255",
            "nama_pengantar" => "required|max:255",
            "nomor_hp_pengantar" => "required|numeric",
            "hubungan_pengantar_dengan_pasien" => "required|max:255",
        ];
    }
}
