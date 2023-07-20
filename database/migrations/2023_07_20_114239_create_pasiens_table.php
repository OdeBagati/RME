<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->enum('pasien_type', ['1', '2', '3'])->nullable();
            $table->string('nama_lengkap');
            $table->string('nomor_rekam_medis')->nullable();
            $table->string('nik', 17)->nullable();
            $table->string('nomor_id_lain', 100)->nullable();
            $table->enum('jenis_kelamin', ['0', '1', '2', '3', '4'])->default('0');
            $table->string('nama_ibu_kandung', 100)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama', 100)->nullable();
            $table->string('suku', 100)->nullable();
            $table->string('bahasa', 100)->nullable();
            $table->integer('umur')->nullable();
            $table->text('alamat')->nullable();
            $table->string('rt', 100)->nullable();
            $table->string('rw', 100)->nullable();
            $table->string('kelurahan_desa', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kota_kabupaten', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('negara', 100)->nullable();
            $table->string('kode_pos', 100)->nullable();
            $table->string('alamat_domisili', 100)->nullable();
            $table->string('rt_domisili', 100)->nullable();
            $table->string('rw_domisili', 100)->nullable();
            $table->string('kelurahan_desa_domisili', 100)->nullable();
            $table->string('kecamatan_domisili', 100)->nullable();
            $table->string('kota_kabupaten_domisili', 100)->nullable();
            $table->string('provinsi_domisili', 100)->nullable();
            $table->string('negara_domisili', 100)->nullable();
            $table->string('kode_pos_domisili', 100)->nullable();
            $table->string('nomor_telepon_rumah', 100)->nullable();
            $table->string('nomor_hp', 100)->nullable();
            $table->enum('pendidikan', ['0', '1', '2', '3', '4', '5', '6', '7', '8'])->default('0');
            $table->string('pekerjaan', 100)->nullable();
            $table->enum('status_pernikahan', ['1', '2', '3', '4'])->nullable();
            $table->integer('perkiraan_umur')->nullable();
            $table->text('lokasi_ditemukan')->nullable();
            $table->date('tanggal_ditemukan')->nullable();
            $table->string('nama_penanggung_jawab', 255)->nullable();
            $table->string('nomor_hp_penanggung_jawab', 255)->nullable();
            $table->string('hubungan_penanggung_jawab_dengan_pasien', 255)->nullable();
            $table->string('nama_pengantar', 255)->nullable();
            $table->string('nomor_hp_pengantar', 255)->nullable();
            $table->string('hubungan_pengantar_dengan_pasien', 255)->nullable();
            $table->string('nama_lengkap_ibu_kandung', 255)->nullable();
            $table->string('nik_ibu_kandung', 255)->nullable();
            $table->string('tempat_lahir_ibu_kandung', 255)->nullable();
            $table->date('tanggal_lahir_ibu_kandung')->nullable();
            $table->tinyInteger('status_puasa')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
