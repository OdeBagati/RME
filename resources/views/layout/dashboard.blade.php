<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard RME</title>

    <style>
        .table>:not(caption)>*>* {
            background-color: #7cf9d6;
        }

        table.dataTable.table-striped>tbody>tr.odd>* {
            background-color: #eeffe6;
        }
    </style>
</head>
<body class="bg-secondary">
    <div class="container-fluid bg-light">
        <div class="container bg-light py-2 mb-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pasien</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid bg-light" style="border-radius:10px">
        <h3 class="mb-4 pt-4">DATA PASIEN</h3>
        <div>
            <table id="example" class="table table-striped table-ressponsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama/No. RM</th>
                        <th>Tgl. Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Reg/Tgl. Reg.</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>Nama/No. RM</td>
                        <td>Tgl. Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>No. Reg/Tgl. Reg.</td>
                        <td>Lokasi</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                    <tr class="text-center">
                        <td>Nama/No. RM</td>
                        <td>Tgl. Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>No. Reg/Tgl. Reg.</td>
                        <td>Lokasi</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                    <tr class="text-center">
                        <td>Nama/No. RM</td>
                        <td>Tgl. Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>No. Reg/Tgl. Reg.</td>
                        <td>Lokasi</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                    <tr class="text-center">
                        <td>Nama/No. RM</td>
                        <td>Tgl. Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>No. Reg/Tgl. Reg.</td>
                        <td>Lokasi</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                    <tr class="text-center">
                        <td>Nama/No. RM</td>
                        <td>Tgl. Lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>No. Reg/Tgl. Reg.</td>
                        <td>Lokasi</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama/No. RM</th>
                        <th>Tgl. Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Reg/Tgl. Reg.</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script src="{{ ('assets/js/jquery.js') }}"></script>
    <script src="{{ ('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>