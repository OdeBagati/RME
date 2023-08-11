@extends('layout.dashboard')

@section('title','Edit Pasien')

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
                    <li class="breadcrumb-item active" aria-current="page">Edit Data Pasien</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid" style="border-radius:10px">
        <div class="container py-4">
    
            <h3 class="mb-4">Edit Pasien</h3>

            <form action="{{ route('pasiens.update', $pasien) }}" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                @method('PUT')
                {{-- Pasien Umum --}}
                @if ($pasien->pasien_type == "1")
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
                                                    <input value="{{ old('nomor_rekam_medis', $pasien->nomor_rekam_medis) }}" type="number" class="form-control @error('nomor_rekam_medis') is-invalid @enderror" name="nomor_rekam_medis" id="nomor_rekam_mesis" placeholder="No. RM Pasien">
                                                    @error('nomor_rekam_medis')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                    <input value="{{ old('nama_lengkap', $pasien->nama_lengkap) }}" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap Pasien">
                                                    @error('nama_lengkap')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                    <input value="{{ old('tempat_lahir', $pasien->tempat_lahir) }}" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir Pasien">
                                                    @error('tempat_lahir')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                    <input value="{{ old('tanggal_lahir', $pasien->tanggal_lahir) }}" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir">
                                                    @error('tanggal_lahir')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_lahir" class="form-label">Alamat Lengkap</label>
                                            <input value="{{ old('alamat', $pasien->alamat) }}" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Alamat Lengkap Pasien">
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    <small>*{{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Negara</label>
                                                    <input value="{{ old('negara', $pasien->negara) }}" type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" id="negara" placeholder="Negara">
                                                    @error('negara')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Provinsi</label>
                                                    <input value="{{ old('provinsi', $pasien->provinsi) }}" type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="nama_ibu_kandung" placeholder="Provinsi">
                                                    @error('provinsi')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Kota</label>
                                                    <input value="{{ old('kota_kabupaten',$pasien->kota_kabupaten) }}" type="text" class="form-control @error('kota_kabupaten') is-invalid @enderror" name="kota_kabupaten" id="nama_ibu_kandung" placeholder="Kota">
                                                    @error('kota_kabupaten')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Kecamatan</label>
                                                    <input value="{{ old('kecamatan', $pasien->kecamatan) }}" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="nama_ibu_kandung" placeholder="Kecamatan">
                                                    @error('kecamatan')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Kode Pos</label>
                                                <input value="{{ old('kode_pos', $pasien->kode_pos) }}" type="text" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" id="kodePos" placeholder="Kode Pos">
                                                @error('kode_pos')
                                                    <div class="invalid-feedback">
                                                        <small>*{{ $message }}</small>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tempat_lahir" class="form-label">Alamat Domisili</label>
                                            <input value="{{ old('alamat_domisili', $pasien->alamat_domisili) }}" type="text" class="form-control @error('alamat_domisili') is-invalid @enderror" name="alamat_domisili" id="alamat" placeholder="Alamat Domisili Pasien">
                                            @error('alamat_domisili')
                                                <div class="invalid-feedback">
                                                    <small>*{{ $message }}</small>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Negara</label>
                                                    <input value="{{ old('negara_domisili', $pasien->negara_domisili) }}" type="text" class="form-control @error('negara_domisili') is-invalid @enderror" name="negara_domisili" id="negaraDomisili" placeholder="Negara">
                                                    @error('negara_domisili')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Provinsi</label>
                                                    <input value="{{ old('provinsi_domisili', $pasien->provinsi_domisili) }}" type="text" class="form-control @error('provinsi_domisili') is-invalid @enderror" name="provinsi_domisili" id="provinsiDomisili" placeholder="Provinsi">
                                                    @error('provinsi_domisili')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Kota</label>
                                                    <input value="{{ old('kota_kabupaten_domisili', $pasien->kota_kabupaten_domisili) }}" type="text" class="form-control @error('kota_kabupaten_domisili') is-invalid @enderror" name="kota_kabupaten_domisili" id="kotaDomisili" placeholder="Kota">
                                                    @error('kota_kabupaten_domisili')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Kecamatan</label>
                                                    <input value="{{ old('kecamatan_domisili', $pasien->kecamatan_domisili) }}" type="text" class="form-control @error('kecamatan_domisili') is-invalid @enderror" name="kecamatan_domisili" id="kecamatan_domisili" placeholder="Kecamatan">
                                                    @error('kecamatan_domisili')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nama_ibu_kandung" class="form-label">Kode Pos</label>
                                                <input value="{{ old('kode_pos_domisili', $pasien->kode_pos_domisili) }}" type="text" class="form-control @error('kode_pos_domisili') is-invalid @enderror" name="kode_pos_domisili" id="kode_pos_domisili" placeholder="Kode Pos">
                                                @error('kode_pos_domisili')
                                                    <div class="invalid-feedback">
                                                        <small>*{{ $message }}</small>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">Status Pernikahan</label>
                                                    <select class="form-select" aria-label="Status Pernikahan" name="status_pernikahan">
                                                        <option value="1" @selected($pasien->status_pernikahan == "1")>Belum Menikah</option>
                                                        <option value="2" @selected($pasien->status_pernikahan == "2")>Sudah Menikah</option>
                                                        <option value="3" @selected($pasien->status_pernikahan == "3")>Cerai Hidup</option>
                                                        <option value="4" @selected($pasien->status_pernikahan == "4")>Cerai Mati</option>
                                                    </select>
                                                    @error('status_pernikahan')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="jenis_kelamin" class="form-label font-label">Jenis Kelamin</label>
                                                    <select class="form-select" aria-label="Jenis Kelamin" name="jenis_kelamin">
                                                        <option value="0" @selected($pasien->jenis_kelamin == "0")>Tidak Diketahui</option>
                                                        <option value="1" @selected($pasien->jenis_kelamin == "1")>Laki - laki</option>
                                                        <option value="2" @selected($pasien->jenis_kelamin == "2")>Perempuan</option>
                                                        <option value="3" @selected($pasien->jenis_kelamin == "3")>Tidak Dapat Ditentukan</option>
                                                        <option value="4" @selected($pasien->jenis_kelamin == "4")>Tidak Mengisi</option>
                                                    </select>
                                                    @error('jenis_kelamin')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">Pekerjaan</label>
                                                    <input value="{{ old('pekerjaan', $pasien->pekerjaan) }}" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="nomor_id_lain" placeholder="Pekerjaan">
                                                    @error('pekerjaan')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">Pendidikan</label>
                                                    <select class="form-select" aria-label="Pendidikan" name="pendidikan">
                                                        <option value="0" @selected($pasien->pendidikan == "0")>Tidak Sekolah</option>
                                                        <option value="1" @selected($pasien->pendidikan == "1")>SD</option>
                                                        <option value="2" @selected($pasien->pendidikan == "2")>SLTP Sederajat</option>
                                                        <option value="3" @selected($pasien->pendidikan == "3")>SLTA Sederajat</option>
                                                        <option value="4" @selected($pasien->pendidikan == "4")>D1 - D3 Sederajat</option>
                                                        <option value="5" @selected($pasien->pendidikan == "5")>D4</option>
                                                        <option value="6" @selected($pasien->pendidikan == "6")>S1</option>
                                                        <option value="7" @selected($pasien->pendidikan == "7")>S2</option>
                                                        <option value="8" @selected($pasien->pendidikan == "8")>S3</option>
                                                    </select>
                                                    @error('pendidikan')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">Nama Ibu Kandung</label>
                                                    <input value="{{ old('nama_ibu_kandung', $pasien->nama_ibu_kandung) }}" type="text" class="form-control @error('nama_ibu_kandung') is-invalid @enderror" name="nama_ibu_kandung" id="nomor_id_lain" placeholder="Nama Ibu Kandung Pasien">
                                                    @error('nama_ibu_kandung')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">No. Telepon rumah</label>
                                                    <input value="{{ old('nomor_telepon_rumah', $pasien->nomor_telepon_rumah) }}" type="text" class="form-control @error('nomor_telepon_rumah') is-invalid @enderror" name="nomor_telepon_rumah" id="nomor_id_lain" placeholder="No. Telepon Rumah">
                                                    @error('nomor_telepon_rumah')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">NIK</label>
                                                    <input value="{{ old('nik', $pasien->nik) }}" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" placeholder="NIK">
                                                    @error('nik')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">No. Id Lain</label>
                                                    <input value="{{ old('nomor_id_lain', $pasien->nomor_id_lain) }}" type="text" class="form-control @error('nomor_id_lain') is-invalid @enderror" name="nomor_id_lain" id="nomor_id_lain" placeholder="No. Id Lain">
                                                    @error('nomor_id_lain')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">Agama</label>
                                                    <input value="{{ old('agama', $pasien->agama) }}" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" id="agama" placeholder="Agama">
                                                    @error('agama')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_id_lain" class="form-label">Bahasa</label>
                                                    <input value="{{ old('bahasa', $pasien->bahasa) }}" type="text" class="form-control @error('bahasa') is-invalid @enderror" name="bahasa" id="bahasa" placeholder="Bahasa">
                                                    @error('bahasa')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                    <input value="{{ old('nomor_hp', $pasien->nomor_hp) }}" type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" id="noTelpSelular" placeholder="No Telpon Selular">
                                                    @error('nomor_hp')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
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
                        <div class="row mt-4">
                            <div class="d-flex justify-content-center align-items- center">
                                <button type="submit" class="btn btn-large btn-success mb-4">Lanjut</button>
                            </div>
                        </div>
                    </section>
                @elseif($pasien->pasien_type == 2)
                    {{-- Pasien Tidak Dikenal --}}
                    <section id="unknown">
                        <input type="text" name="nama_lengkap" value="-" hidden>
                        <div class="card bg-white mt-4">
                            <div class="card-body mx-3">

                                <h4 class="text-success">Form Pasien Tidak Dikenal</h4>

                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="nomor_rekam_medis" class="form-label">Perkiraan Umur</label>
                                                    <input value="{{ old('perkiraan_umur', $pasien->perkiraan_umur) }}" type="number" class="form-control @error('perkiraan_umur') is-invalid @enderror" name="perkiraan_umur" id="perkiraanUmur" placeholder="Perkiraan Umur">
                                                    @error('perkiraan_umur')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tempat_lahir" class="form-label">Lokasi Ditemukan</label>
                                                    <input value="{{ old('lokasi_ditemukan', $pasien->lokasi_ditemukan) }}" type="text" class="form-control @error('lokasi_ditemukan') is-invalid @enderror" name="lokasi_ditemukan" id="lokasiDitemukan" placeholder="Lokasi Ditemukan">
                                                    @error('lokasi_ditemukan')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Ditemukan</label>
                                                    <input value="{{ old('tanggal_ditemukan', $pasien->tanggal_ditemukan) }}" type="date" class="form-control @error('tanggal_ditemukan') is-invalid @enderror" name="tanggal_ditemukan" id="tanggal_ditemukan">
                                                    @error('tanggal_ditemukan')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="jenis_kelamin" class="form-label font-label">Jenis Kelamin</label>
                                                    <select class="form-select" aria-label="Jenis Kelamin" name="jenis_kelamin">
                                                        <option value="0" @selected($pasien->jenis_kelamin == "0")>Tidak Diketahui</option>
                                                        <option value="1" @selected($pasien->jenis_kelamin == "1")>Laki - laki</option>
                                                        <option value="2" @selected($pasien->jenis_kelamin == "2")>Perempuan</option>
                                                        <option value="3" @selected($pasien->jenis_kelamin == "3")>Tidak Dapat Ditentukan</option>
                                                        <option value="4" @selected($pasien->jenis_kelamin == "4")>Tidak Mengisi</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="tempat_lahir" class="form-label">Identitas Penanggung Jawab Pasien</label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tempat_lahir" class="form-label">Nama</label>
                                                    <input value="{{ old('nama_penanggung_jawab', $pasien->nama_penanggung_jawab) }}" type="text" class="form-control @error('nama_penanggung_jawab') is-invalid @enderror" name="nama_penanggung_jawab" id="nama" placeholder="Nama">
                                                    @error('nama_penanggung_jawab')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                    <input value="{{ old('nomor_hp_penanggung_jawab', $pasien->nomor_hp_penanggung_jawab) }}" type="text" class="form-control @error('nomor_hp_penanggung_jawab') is-invalid @enderror" name="nomor_hp_penanggung_jawab" id="noTelpSelular" placeholder="No Telpon Selular">
                                                    @error('nomor_hp_penanggung_jawab')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Hubungan Penanggung Jawab</label>
                                                    <input value="{{ old('hubungan_penanggung_jawab_dengan_pasien', $pasien->hubungan_penanggung_jawab_dengan_pasien) }}" type="text" class="form-control @error('hubungan_penanggung_jawab_dengan_pasien') is-invalid @enderror" name="hubungan_penanggung_jawab_dengan_pasien" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                                    @error('hubungan_penanggung_jawab_dengan_pasien')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <label for="tempat_lahir" class="form-label">Identitas Pengantar Jawab Pasien</label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tempat_lahir" class="form-label">Nama</label>
                                                    <input value="{{ old('nama_pengantar', $pasien->nama_pengantar) }}" type="text" class="form-control @error('nama_pengantar') is-invalid @enderror" name="nama_pengantar" id="nama" placeholder="Nama">
                                                    @error('nama_pengantar')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                    <input value="{{ old('nomor_hp_pengantar', $pasien->nomor_hp_pengantar) }}" type="text" class="form-control @error('nomor_hp_pengantar') is-invalid @enderror" name="nomor_hp_pengantar" id="noTelpSelular" placeholder="No Telpon Selular">
                                                    @error('nomor_hp_pengantar')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Hubungan Pengantar</label>
                                                    <input value="{{ old('hubungan_pengantar_dengan_pasien', $pasien->hubungan_pengantar_dengan_pasien) }}" type="text" class="form-control @error('hubungan_pengantar_dengan_pasien') is-invalid @enderror" name="hubungan_pengantar_dengan_pasien" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                                    @error('hubungan_pengantar_dengan_pasien')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="d-flex justify-content-center align-items- center">
                                <button type="submit" class="btn btn-large btn-success mb-4">Lanjut</button>
                            </div>
                        </div>
                    </section>
                @else
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
                                                    <label for="nik_ibu_kandung" class="form-label">NIK Ibu Kandung</label>
                                                    <input value="{{ old('nik_ibu_kandung', $pasien->nik_ibu_kandung) }}" type="text" class="form-control @error('nik_ibu_kandung') is-invalid @enderror" name="nik_ibu_kandung" id="nik_ibu_kandung" placeholder="NIK">
                                                    @error('nik_ibu_kandung')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_lengkap" class="form-label">Nama Bayi</label>
                                                    <input value="{{ old('nama_lengkap', $pasien->nama_lengkap) }}" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Bayi">
                                                    @error('nama_lengkap')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nomor_rekam_medis" class="form-label">Nomor Rm</label>
                                                    <input value="{{ old('nomor_rekam_medis', $pasien->nomor_rekam_medis) }}" type="text" class="form-control @error('nomor_rekam_medis') is-invalid @enderror" name="nomor_rekam_medis" id="nomor_rekam_medis" placeholder="Nomor Rekam Medis">
                                                    @error('nomor_rekam_medis')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                    <input value="{{ old('tanggal_lahir', $pasien->tanggal_lahir) }}" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir">
                                                    @error('tanggal_lahir')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="jenis_kelamin" class="form-label font-label">Jenis Kelamin</label>
                                                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Jenis Kelamin" name="jenis_kelamin">
                                                        <option value="0" @selected($pasien->jenis_kelamin == "0")>Tidak Diketahui</option>
                                                        <option value="1" @selected($pasien->jenis_kelamin == "1")>Laki - laki</option>
                                                        <option value="2" @selected($pasien->jenis_kelamin == "2")>Perempuan</option>
                                                        <option value="3" @selected($pasien->jenis_kelamin == "3")>Tidak Dapat Ditentukan</option>
                                                        <option value="4" @selected($pasien->jenis_kelamin == "4")>Tidak Mengisi</option>
                                                    </select>
                                                    @error('jenis_kelamin')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <label for="tempat_lahir" class="form-label">Identitas Penanggung Jawab Pasien</label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_penanggung_jawab" class="form-label">Nama</label>
                                                    <input value="{{ old('nama_penanggung_jawab', $pasien->nama_penanggung_jawab) }}" type="text" class="form-control @error('nama_penanggung_jawab') is-invalid @enderror" name="nama_penanggung_jawab" id="nama_penanggung_jawab" placeholder="Nama">
                                                    @error('nama_penanggung_jawab')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                    <input value="{{ old('nomor_hp_penanggung_jawab', $pasien->nomor_hp_penanggung_jawab) }}" type="text" class="form-control @error('nomor_hp_penanggung_jawab') is-invalid @enderror" name="nomor_hp_penanggung_jawab" id="noTelpSelular" placeholder="No Telpon Selular">
                                                    @error('nomor_hp_penanggung_jawab')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Hubungan Penanggung Jawab</label>
                                                    <input value="{{ old('hubungan_penanggung_jawab_dengan_pasien', $pasien->hubungan_penanggung_jawab_dengan_pasien) }}" type="text" class="form-control @error('hubungan_penanggung_jawab_dengan_pasien') is-invalid @enderror" name="hubungan_penanggung_jawab_dengan_pasien" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                                    @error('hubungan_penanggung_jawab_dengan_pasien')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <label for="tempat_lahir" class="form-label">Identitas Pengantar Jawab Pasien</label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="tempat_lahir" class="form-label">Nama</label>
                                                    <input value="{{ old('nama_pengantar', $pasien->nama_pengantar) }}" type="text" class="form-control @error('nama_pengantar') is-invalid @enderror" name="nama_pengantar" id="nama" placeholder="Nama">
                                                    @error('nama_pengantar')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">No. Telpon Selular</label>
                                                    <input value="{{ old('nomor_hp_pengantar', $pasien->nomor_hp_pengantar) }}" type="text" class="form-control @error('nomor_hp_pengantar') is-invalid @enderror" name="nomor_hp_pengantar" id="noTelpSelular" placeholder="No Telpon Selular">
                                                    @error('nomor_hp_pengantar')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_ibu_kandung" class="form-label">Hubungan Pengantar</label>
                                                    <input value="{{ old('hubungan_pengantar_dengan_pasien', $pasien->hubungan_pengantar_dengan_pasien) }}" type="text" class="form-control @error('hubungan_pengantar_dengan_pasien') is-invalid @enderror" name="hubungan_pengantar_dengan_pasien" id="hubunganPengantar" placeholder="Hubungan Pengantar">
                                                    @error('hubungan_pengantar_dengan_pasien')
                                                        <div class="invalid-feedback">
                                                            <small>*{{ $message }}</small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="d-flex justify-content-center align-items- center">
                                <button type="submit" class="btn btn-large btn-success mb-4">Lanjut</button>
                            </div>
                        </div>
                    </section>
                @endif
            </form>
        </div>
    </div>
@endsection

@section('specific-js')
   
@endsection

