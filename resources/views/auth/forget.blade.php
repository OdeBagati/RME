@extends('layout.auth')

@section('title', 'Lupa Password')

@section('content')
    <div class="card-body">
        <h3 class="text-center mb-3">Lupa Password</h3>
        <form action="#" method="POST">
            @csrf
            <div class="text-center">
                <p class="mb-3">Lupa password? Kami akan mengirimkan reset link ke email terdaftar</p>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Masukkan username atau email">
                <label for="floatingInput">Username atau Email</label>
            </div>

            <div class="form-floating mt-3 d-flex align-items-center justify-content-center text-center">
                <button type="submit" class="btn btn-primary">Kirim reset password link</button>
            </div>
        </form>
    </div>
@endsection