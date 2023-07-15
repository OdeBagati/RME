@extends('layout.auth')

@section('title', 'Register')

@section('content')
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR AKUN</h3>
        <form action="#" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="full_name" id="floatingInput" placeholder="Masukkan nama lengkap">
                <label for="floatingInput">Nama Lengkap</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                <label for="username">Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="department" id="department" aria-label="Floating label select example">
                    <option disabeld>Pilih department</option>
                    <option value="1">Kesehatan</option>
                    <option value="2">Perawat</option>
                </select>
                <label for="department">Department</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Konfirmasi Password">
                <label for="confirm_password">Konfirmasi Password</label>
            </div>

            <div class="row mt-2 mb-3">
                <div class="col-6">
                    <a class="text-decoration-none" href="#">Sudah punya akun? Login</a>
                </div>
                <div class="col-6">
                    <a class="text-decoration-none d-flex justify-content-end" href="#">Lupa Password?</a>
                </div>
            </div>

            <div class="form-floating mt-3 d-flex align-items-center justify-content-center text-center">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </form>
    </div>
@endsection