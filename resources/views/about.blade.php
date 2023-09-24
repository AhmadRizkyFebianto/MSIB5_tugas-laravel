@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    <header class="jumbotron text-center bg-primary text-white">
        <div class="container">
            <h1 class="display-4">Tentang Universitas Jember</h1>
            <p class="lead">Tempat Untuk Mengejar Impian Saya</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Tentang Kami</h2>
                <p>Universitas jember adalah Universitas Jember adalah institusi pendidikan tinggi yang telah mengikrarkan diri sebagai Kampus Kebangsaan dan Kampus Pancasila.</p>
            </div>
            <div class="col-lg-6">
                <h2>Fasilitas</h2>
                <ul>
                    <li>Laboratorium</li>
                    <li>Perpustakaan Luas</li>
                    <li>Gedung Kuliah yang Nyaman</li>
                    <li>Klub Mahasiswa Aktif</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Program Studi pada Fakultas Ilmu Komputer</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Program Studi Informatika</h5>
                            <p class="card-text">Teknik Informatika adalah bidang ilmu teknik yang mempelajari tentang ilmu komputer, teknologi perangkat lunak dan aplikasinya di dunia industri.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Program Studi Teknologi Informasi</h5>
                            <p class="card-text">Teknologi informasi adalah bidang ilmu yang mempelejari analisis system, development system, kemampuan manajerial dan masih banyak lagi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Program Studi Sistem informasi</h5>
                            <p class="card-text">Sistem informasi adalah bidang ilmu yang berfokus kepada analisis data, kompleksitas dan efisiensi pemecahan masalah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
