@extends('layout.dashboard')

@section('title', 'Data Pasien')

@section('specific-css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
    <style>
        .table>:not(caption)>*>* {
            background-color: #7cf9d6;
        }

        table.dataTable.table-striped>tbody>tr.odd>* {
            background-color: #eeffe6;
        }
        
        .fa-hospital {
            font-size: 50px;
            color:#3DE5A7;
;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid bg-white mb-3">
        <div class="container py-2 mb-2">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pasien</li>
                </ol>
            </nav>
        </div>
        <div class="row pb-4 text-center">
            <div class="col-lg-4 col-12 p-4">
                <div class="card w-100">
                    <div class="card-body bg-light">
                        <i class="fa-solid fa-hospital mb-4"></i>
                        <p><b>Pasien Umum</b></p>
                        <p style="margin-top: -1rem;">{{ $countUmum }} orang</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 p-4">
                <div class="card w-100">
                    <div class="card-body bg-light">
                        <i class="fa-solid fa-hospital mb-4"></i>
                        <p><b>Pasien Tidak Diketahui</b></p>
                        <p style="margin-top: -1rem;">{{ $countUnknown }} orang</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 p-4">
                <div class="card w-100">
                    <div class="card-body bg-light">
                        <i class="fa-solid fa-hospital mb-4"></i>
                        <p><b>Pasien Bayi Baru Lahir</b></p>
                        <p style="margin-top: -1rem;">{{ $countBayi }} orang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white" style="border-radius:10px">
        <h3 class="mb-3 pt-4">DATA PASIEN</h3>
        <a href="{{ route('pasiens.create') }}" class="btn btn-success mb-4">Tambah Pasien Baru</a>
        <div>
            <table id="example" class="table table-striped table-ressponsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama/No. RM</th>
                        <th>Tgl. Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Hp</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pasiens as $pasien)
                        <tr class="text-center">
                            <td>{{ $pasien->nama_lengkap }}<br><b>No. RM.</b>{{ $pasien->nomor_rekam_medis }}</td>
                            <td>{{ $pasien->tempat_lahir }}, {{ $pasien->tanggal_lahir }}</td>
                            <td>
                                @if($pasien->jenis_kelamin=="4")
                                    <p>Tidak Mengisi</p>
                                @elseif($pasien->jenis_kelamin=="3")
                                    <p>Tidak Dapat Ditentukan</p>
                                @elseif($pasien->jenis_kelamin=="2")
                                    <p>Perempuan</p>
                                @elseif($pasien->jenis_kelamin=="1")
                                    <p>Laki - laki</p>
                                @else
                                    <p>Tidak Diketahui</p>
                                @endif
                            </td>
                            <td>{{ $pasien->nomor_hp }}</td>
                            <td>{{ $pasien->alamat }}</td>
                            <td>
                                @if($pasien->pasien_type=="3")
                                    <p>Bayi baru lahir</p>
                                @elseif($pasien->pasien_type=="2")
                                    <p>Tidak Diketahui</p>
                                @else
                                    <p>Umum</p>
                                @endif
                            </td>
                            <td>Aksi</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama/No. RM</th>
                        <th>Tgl. Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Hp</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection