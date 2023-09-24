@extends('layouts.app')

@section('title')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <!-- Konten di sebelah kanan -->
            <h1 id="welcome">Halo, Saya Ahmad Rizky Febianto</h1>
            <p>Seorang Pengembang Web yang sedang belajar</p>
            <h2>Tentang Saya</h2>
            <p>
                Saya adalah seorang pengembang web pemula, saya dari Universitas Jember, Prodi Teknologi Informasi Kegiatan saya sekarang mengikuti kegiatan pembelejaran Full Stack Web Development di PT Gits Indonesia. Hobi saya yaitu bermain Game (Valorant). Rencana kedepannya saya mau menjadi Ultraman:D
            </p>
            <a href="{{ route("profile") }}" class="btn" id="button">Tentang Saya</a>
            {{-- <a href="{{ route('profile') }}" style="text-decoration: none; color:black;"><h4>About me</h4></a> --}}
        </div>
    </div>
</div>
    {{-- <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" id="welcome">Welcome to the Dashboard Home</h5>
                    <p class="card-text">Saya backend pemula / junior backend dev</p>
                    <a href="{{ route('profile') }}" class="btn btn-primary mx-2">About me</a>
                    <a href="{{ route('campus') }}" class="btn btn-primary">About Campus</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="" alt="">
                    <ul>
                        <li>Logged in 2 hours ago</li>
                        <li>Updated profile information</li>
                        <li>Posted a new blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
