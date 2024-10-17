@extends('layout.layouts')
@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Aplikasi Data Siswa</h1>
        <p class="lead">Ini adalah aplikasi sederhana untuk mengelola data siswa menggunakan Laravel dan Bootstrap.</p>
        <hr class="my-4">
        <p>Silakan klik tombol di bawah ini untuk melihat daftar siswa.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('siswa.index') }}" role="button">Lihat Data Siswa</a>
    </div>
@endsection
