@extends('layouts.app')

@section('content')
<header class="jumbotron text-center bg-primary text-white">
    <div class="container">
        <h1 class="display-4">Halo, Saya Ahmad Rizky Febianto</h1>
        <p class="lead">Seorang Pengembang Web pemula / junior web development</p>
        <div class="social-icons">
            <a href="https://github.com/AhmadRizkyFebianto" style="color: white"><i class="fa-brands fa-github fa-bounce fa-xl mx-1"></i></a>
            <a href="https://www.instagram.com/rizkyfebianto666/?igshid=MzMyNGUyNmU2YQ%3D%3D" style="color: white"><i class="fa-brands fa-instagram fa-bounce fa-xl mx-3"></i></a>
            <a href="https://wa.me/+6282337224017" style="color: white"><i class="fa-brands fa-whatsapp fa-bounce fa-xl mx-1"></i></a>
        </div>
    </div>
</header>

<!-- About Section -->
<section class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <h2>Tentang Saya</h2>
            <p>Saya adalah seorang pengembang web pemula yang ingin mencoba untuk menjadi fullstack dev yang lumayan jago</p>
        </div>
        <div class="col-lg-6">
            <h2>Keterampilan</h2>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>Framework Laravel dan Bootstrap</li>
                <li>Next JS dasar banget</li>
                <li>Framewok flutter dasar juga</li>
            </ul>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Portfolio</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-6">
                    <img src="{{ asset('images/gambar1.PNG') }}" class="card-img-top" alt="Proyek 1">
                    <div class="card-body">
                        <h5 class="card-title">Proyek 1</h5>
                        <p class="card-text">Ini adalah tugas projek akhir Matakuliah Interaksi manusia dan komputer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-6">
                    <img src="{{ asset('images/gambar2.PNG') }}" class="card-img-top" alt="Proyek 2">
                    <div class="card-body">
                        <h5 class="card-title">Proyek 2</h5>
                        <p class="card-text">ini adalah tugas projek akhir mata kuliah pemrograman antarmuka aplikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
