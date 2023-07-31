@extends('layout.auth')

@section('title', 'Register')

@section('content')
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR AKUN</h3>
        <form action="#" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input value="{{ old('full_name') }}" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" id="floatingInput" placeholder="Masukkan nama lengkap">
                <label for="floatingInput">Nama Lengkap</label>
            </div>
            @error('full_name')
                <div class="d-flex justify-content-end mb-3">
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror
            <div class="form-floating mb-3">
                <input value="{{ old('username') }}" type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Masukkan username">
                <label for="username">Username</label>
            </div>
            @error('username')
                <div class="d-flex justify-content-end mb-3">
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror
            <div class="form-floating mb-3">
                <input value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            @error('email')
                <div class="d-flex justify-content-end mb-3">
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror
            <div class="form-floating mb-3">
                <select class="form-select  @error('department') is-invalid @enderror" name="department" id="department" aria-label="Floating label select example">
                    <option disabeld>Pilih department</option>
                    <option value="kesehatan">Kesehatan</option>
                    <option value="perawat">Perawat</option>
                </select>
                <label for="department">Department</label>
            </div>
            @error('department')
                <div class="d-flex justify-content-end mb-3">
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror
            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            @error('password')
                <div class="d-flex justify-content-end mb-3">
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror
            <div class="form-floating">
                <input type="password" class="form-control" name="password_confirmation" id="confirm_password" placeholder="Konfirmasi Password">
                <label for="confirm_password">Konfirmasi Password</label>
            </div>

            <div class="row mt-2 mb-3">
                <div class="col-6">
                    <a class="text-decoration-none" href="{{ route('auth.login.page') }}">Sudah punya akun? Login</a>
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