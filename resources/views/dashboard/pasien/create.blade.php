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

    <div class="container-fluid bg-light" style="border-radius:10px">
        <div class="container py-4">
            <h3 class="mb-4">Tambah Pasien</h3>
            <form action="{{ route('pasiens.store') }}" method="POST" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label for="pasien_type" class="form-label font-label">Tipe Pasien</label>
                    <select class="form-select" aria-label="Pasien Type" name="pasien_type">
                        <option value="1">Umum</option>
                        <option value="2">Tidak Diketahui</option>
                        <option value="3">Bayi Baru Lahir</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap Pasien">
                </div>

                <div class="mb-3">
                    <label for="nomor_rekam_medis" class="form-label">No. Rekam Medis</label>
                    <input type="number" class="form-control" name="nomor_rekam_medis" id="nomor_rekam_mesis" placeholder="No. Rekam Medis Pasien">
                </div>

                <div class="mb-3">
                    <label for="nik" class="form-label">Nama Lengkap</label>
                    <input type="number" class="form-control" name="nik" id="nik" placeholder="NIK Pasien">
                </div>

                <div class="mb-3">
                    <label for="nomor_id_lain" class="form-label">No. ID Lain</label>
                    <input type="text" class="form-control" name="nomor_id_lain" id="nomor_id_lain" placeholder="No. ID Lain Pasien">
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label font-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Jenis Kelamin" name="jenis_kelamin">
                        <option value="1">Tidak Diketahui</option>
                        <option value="2">Laki - laki</option>
                        <option value="3">Perempuan</option>
                        <option value="4">Tidak Mengisi</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nama_ibu_kandung" class="form-label">Nama Ibu Kandung</label>
                    <input type="text" class="form-control" name="nama_ibu_kandung" id="nama_ibu_kandung    " placeholder="Nama Lengkap Pasien">
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir Pasien">
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                </div>

                
            </form>
        </div>
    </div>
@endsection

@section('specific-js')
    {{-- Taruh spesifik JS halaman disini --}}
@endsection

