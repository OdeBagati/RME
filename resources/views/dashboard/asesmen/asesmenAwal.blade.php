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
                    <li class="breadcrumb-item active" aria-current="page">Asesmen Awal</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-light" style="border-radius:10px">
        <div class="container py-4">
            <h3 class="mb-4">Asesmen Awal</h3>
            <form action="{{ route('pasiens.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Layanan</label>
                            <select class="form-select" aria-label="Status Pernikahan" name="statusPernikahan">
                                <option value="0">Pilih Layanan</option>
                                <option value="1">Belum Menikah</option>
                                <option value="2">Sudah Menikah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Unit</label>
                            <select class="form-select" aria-label="Status Pernikahan" name="statusPernikahan">
                                <option value="0">Pilih Layanan</option>
                                <option value="1">Belum Menikah</option>
                                <option value="2">Sudah Menikah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Kelas</label>
                            <select class="form-select" aria-label="Status Pernikahan" name="statusPernikahan">
                                <option value="0">Pilih Layanan</option>
                                <option value="1">Belum Menikah</option>
                                <option value="2">Sudah Menikah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Masuk Melalui</label>
                            <select class="form-select" aria-label="Status Pernikahan" name="statusPernikahan">
                                <option value="0">Pilih Layanan</option>
                                <option value="1">Belum Menikah</option>
                                <option value="2">Sudah Menikah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Prosedur Masuk</label>
                            <select class="form-select" aria-label="Status Pernikahan" name="statusPernikahan">
                                <option value="0">Pilih Layanan</option>
                                <option value="1">Belum Menikah</option>
                                <option value="2">Sudah Menikah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Rencana Bayar</label>
                            <select class="form-select" aria-label="Status Pernikahan" name="statusPernikahan">
                                <option value="0">Pilih Layanan</option>
                                <option value="1">Belum Menikah</option>
                                <option value="2">Sudah Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Nama Pendamping</label>
                            <input type="text" class="form-control" name="pekerjaan" id="nomor_id_lain" placeholder="Nama Pendamping">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="pekerjaan" id="nomor_id_lain" placeholder="Alamat">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Kota</label>
                            <select class="form-select" aria-label="Pendidikan" name="pendidikan">
                                <option value="0">Sumenep</option>
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
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Kecamatan</label>
                            <select class="form-select" aria-label="Pendidikan" name="pendidikan">
                                <option value="0"></option>
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
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Pekerjaan</label>
                            <select class="form-select" aria-label="Pendidikan" name="pendidikan">
                                <option value="0">Tidak Bekerja</option>
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
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">Hub. Keluarga</label>
                            <select class="form-select" aria-label="Pendidikan" name="pendidikan">
                                <option value="0">Saudara</option>
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
                        <div class="mb-3">
                            <label for="nomor_id_lain" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" name="pekerjaan" id="nomor_id_lain" placeholder="Pekerjaan">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-4">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('specific-js')

@endsection

