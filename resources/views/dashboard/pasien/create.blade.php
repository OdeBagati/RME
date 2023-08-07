@extends('layout.dashboard')

@section('title','Tambah Pasien')

@section('specific-css')
    {{-- Taruh spesifik CSS halaman disini --}}
    <style>
        .form-label {
            font-size: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid bg-light mb-3">
        <div class="container bg-light py-2 mb-2">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('pasiens.index') }}">Pasien</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data Pasien</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid" style="border-radius:10px">
        <div class="container py-4">
    
            <h3 class="mb-4">Tambah Pasien</h3>

            <form action="{{ route('pasiens.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card bg-white mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3 text-center">
                                    <label for="pasien_type" class="form-label font-label">Tipe Pasien</label>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" aria-label="Pasien Type" name="pasien_type" id="pasienType">
                                        <option value="1">Umum</option>
                                        <option value="2">Tidak Diketahui</option>
                                        <option value="3">Bayi Baru Lahir</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Pasien Umum --}}
                <section id="umum">

                    <div class="card bg-white">
                        <div class="card-body mx-3">

                            <h4 class="text-success">Form Pasien Umum</h4>

                            <div class="row mt-4">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="nomor_rekam_medis" class="form-label">No. Rekam Medis</label>
                                                <input type="number" class="form-control" name="nomor_rekam_medis" id="nomor_rekam_mesis" placeholder="No. RM Pasien">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap Pasien">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir Pasien">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tempat_lahir" class="form-label">Alamat Lengkap</label>
                                        <input type="text" class="form-control" name="alamatPasien" id="alamat" placeholder="Alamat Lengkap Pasien">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Negara</label>
                                                <input type="text" class="form-control" name="negara" id="negara" placeholder="Negara">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Provinsi</label>
                                                <input type="text" class="form-control" name="provinsi" id="nama_ibu_kandung" placeholder="Provinsi">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Kota</label>
                                                <input type="text" class="form-control" name="kota" id="nama_ibu_kandung" placeholder="Kota">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Kecamatan</label>
                                                <input type="text" class="form-control" name="kecamatan" id="nama_ibu_kandung" placeholder="Kecamatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama_ibu_kandung" class="form-label">Kode Pos</label>
                                            <input type="text" class="form-control" name="kodePos" id="kodePos" placeholder="Kode Pos">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tempat_lahir" class="form-label">Alamat Domisili</label>
                                        <input type="text" class="form-control" name="alamatDomisili" id="alamat" placeholder="Alamat Domisili Pasien">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Negara</label>
                                                <input type="text" class="form-control" name="negaraDomisili" id="negaraDomisili" placeholder="Negara">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Provinsi</label>
                                                <input type="text" class="form-control" name="provinsiDomisili" id="provinsiDomisili" placeholder="Provinsi">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Kota</label>
                                                <input type="text" class="form-control" name="kotaDomisili" id="kotaDomisili" placeholder="Kota">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Kecamatan</label>
                                                <input type="text" class="form-control" name="kecamatanDomisili" id="kecamatanDomisili" placeholder="Kecamatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama_ibu_kandung" class="form-label">Kode Pos</label>
                                            <input type="text" class="form-control" name="kodePosDomisili" id="kodePosDomisili" placeholder="Kode Pos">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">Status Pernikahan</label>
                                                <select class="form-select" aria-label="Status Pernikahan" name="statusPernikahan">
                                                    <option value="1">Belum Menikah</option>
                                                    <option value="2">Sudah Menikah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="jenis_kelamin" class="form-label font-label">Jenis Kelamin</label>
                                                <select class="form-select" aria-label="Jenis Kelamin" name="jenis_kelamin">
                                                    <option value="0">Tidak Diketahui</option>
                                                    <option value="1">Laki - laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">Pekerjaan</label>
                                                <input type="text" class="form-control" name="pekerjaan" id="nomor_id_lain" placeholder="Pekerjaan">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">Pendidikan</label>
                                                <select class="form-select" aria-label="Pendidikan" name="pendidikan">
                                                    <option value="0">Tidak Sekolah</option>
                                                    <option value="1">SD</option>
                                                    <option value="2">SLTP Sederajat</option>
                                                    <option value="3">SLTA Sederajat</option>
                                                    <option value="4">D1 - D3 Sederajat</option>
                                                    <option value="5">D4</option>
                                                    <option value="6">S1</option>
                                                    <option value="7">S2</option>
                                                    <option value="8">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">Nama Ibu Kandung</label>
                                                <input type="text" class="form-control" name="namaIbu" id="nomor_id_lain" placeholder="Nama Ibu Kandung Pasien">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">No. Telepon rumah</label>
                                                <input type="text" class="form-control" name="noTelpRumah" id="nomor_id_lain" placeholder="No. Telepon Rumah">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">No. Id Lain</label>
                                                <input type="text" class="form-control" name="noId" id="nomor_id_lain" placeholder="No. Id Lain">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">Agama</label>
                                                <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nomor_id_lain" class="form-label">Bahasa</label>
                                                <input type="text" class="form-control" name="bahasa" id="bahasa" placeholder="Bahasa">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                <input type="text" class="form-control" name="noTelpSelular" id="noTelpSelular" placeholder="No Telpon Selular">
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="metodePembayaran" id="metodePembayaran" value="bpjs">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                BPJS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="metodePembayaran" id="metodePembayaran" value="mandiri">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                MANDIRI
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="metodePembayaran" id="metodePembayaran" value="asuransiLainnya" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Asuransi Lainnya
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </section>
                
                {{-- Pasien Tidak Dikenal --}}
                <section id="unknown">

                    <div class="card bg-white mt-4">
                        <div class="card-body mx-3">

                            <h4 class="text-success">Form Pasien Tidak Dikenal</h4>

                            <div class="row mt-3">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="nomor_rekam_medis" class="form-label">Perkiraan Umur</label>
                                                <input type="number" class="form-control" name="perkiraanUmur" id="perkiraanUmur" placeholder="Perkiraan Umur">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Lokasi Ditemukan</label>
                                                <input type="text" class="form-control" name="lokasiDitemukan" id="lokasiDitemukan" placeholder="Lokasi Ditemukan">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Ditemukan</label>
                                                <input type="date" class="form-control" name="tanggalDitemukan" id="tanggal_ditemukan">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="jenis_kelamin" class="form-label font-label">Jenis Kelamin</label>
                                                <select class="form-select" aria-label="Jenis Kelamin" name="jenis_kelamin">
                                                    <option value="0">Tidak Diketahui</option>
                                                    <option value="1">Laki - laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="tempat_lahir" class="form-label">Identitas Penanggung Jawab Pasien</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="namaPenanggungJawab" id="nama" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                <input type="text" class="form-control" name="noTelpSelularPenanggungJawab" id="noTelpSelular" placeholder="No Telpon Selular">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Hubungan Penanggung Jawab</label>
                                                <input type="text" class="form-control" name="hubunganPengantarPenanggungJawab" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="tempat_lahir" class="form-label">Identitas Pengantar Jawab Pasien</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="namaPengantar" id="nama" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                <input type="text" class="form-control" name="noTelpSelularPengantar" id="noTelpSelular" placeholder="No Telpon Selular">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Hubungan Pengantar</label>
                                                <input type="text" class="form-control" name="hubunganPengantarPengantar" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </section>
                
                {{-- Bayi Baru Lahir --}}
                <section id="newborn">

                    <div class="card bg-white mt-4">
                        <div class="card-body mx-3">

                            <h4 class="text-success mb-3">Form Bayi Baru Lahir</h4>

                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_lengkap" class="form-label">NIK Ibu Kandung</label>
                                                <input type="text" class="form-control" name="nikIbuKandung" id="nik" placeholder="NIK">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Nama Bayi</label>
                                                <input type="text" class="form-control" name="namaBayi" id="namaBayi" placeholder="Nama Bayi">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Nomor Rm</label>
                                                <input type="text" class="form-control" name="nomorRm" id="nomor_rekam_medis" placeholder="Nomor Rekam Medis">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggalLahir" id="tanggal_lahir">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="jenis_kelamin" class="form-label font-label">Jenis Kelamin</label>
                                                <select class="form-select" aria-label="Jenis Kelamin" name="jenis_kelamin">
                                                    <option value="0">Tidak Diketahui</option>
                                                    <option value="1">Laki - laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="tempat_lahir" class="form-label">Identitas Penanggung Jawab Pasien</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="namaPenanggungJawab" id="nama" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                <input type="text" class="form-control" name="noTelpSelularPenanggungJawab" id="noTelpSelular" placeholder="No Telpon Selular">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Hubungan Penanggung Jawab</label>
                                                <input type="text" class="form-control" name="hubunganPengantarPenanggungJawab" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="tempat_lahir" class="form-label">Identitas Pengantar Jawab Pasien</label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="namaPengantar" id="nama" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                <input type="text" class="form-control" name="noTelpSelularPengantar" id="noTelpSelular" placeholder="No Telpon Selular">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Hubungan Pengantar</label>
                                                <input type="text" class="form-control" name="hubunganPengantarPengantar" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </section>
                
                <div class="row mt-4">
                    <div class="d-flex justify-content-center align-items- center">
                        <button type="submit" class="btn btn-large btn-success mb-4">Lanjut</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection

@section('specific-js')

@endsection

