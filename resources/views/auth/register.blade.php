@extends('layouts.app')
@section('title', '| Register')
@section('content')
<section class="breadcrumbs" style="margin-top: 110px">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h5>Halaman Register</h5>
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li>Register</li>
            </ol>
        </div>
    </div>
</section>
<section class="align-items-center">
    <div class="container">
        <div class="row justify-content-md-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset('images/register.png') }}" alt="login">
            </div>  
            <div class="col-md-4">
                <p class="font-weight-bold mb-0 fs-22">Buat Akun</p>
                <form class="needs-validation mt-3" novalidate method="POST" action="{{ route('register.checkNIK') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control fs-15 @if ($errors->has('nama')) is-invalid @endif" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap" autocomplete="off" autofocus required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control fs-15 @if ($errors->has('email')) is-invalid @endif" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="off" autofocus required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                        <input type="password" class="form-control fs-15 @if ($errors->has('password')) is-invalid @endif" name="password" placeholder="Password" autocomplete="off" autofocus required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg fs-15" data-toggle="modal" data-target="#loading"><i class="bi bi-arrow-right m-r-5"></i>Buat</button>
                    </div>
                </form>
                <hr class="mt-4">
                <p class="fs-14">Sudah punya akun ?<a href="{{ route('login') }}" class="ml-2 text-success">Login</a></p>
            </div>
        </div>
    </div>
</section>
@include('layouts.loading')
@endsection
