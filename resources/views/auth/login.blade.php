@extends('layout.auth')

@section('title', 'Login')

@section('content')
    <div class="card-body">
        <h3 class="text-center mb-3">Login</h3>
        <form action="{{ route('auth.login.post') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input value="{{ old('username') }}" type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="floatingInput" placeholder="Masukkan username atau email">
                <label for="floatingInput">Username atau Email</label>
            </div>
            @error('username')
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
            <div class="row mt-2 mb-3">
                <div class="col-6">
                    <a class="text-decoration-none" href="{{ route('auth.register.page') }}">Belum punya akun? Daftar</a>
                </div>
                <div class="col-6">
                    <a class="text-decoration-none d-flex justify-content-end" href="#">Lupa Password?</a>
                </div>
            </div>

            <div class="form-floating mt-3 d-flex align-items-center justify-content-center text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
@endsection