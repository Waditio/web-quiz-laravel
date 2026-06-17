<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pembelajaran - Informatika Kelas 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card-menu { transition: transform 0.2s; cursor: pointer; }
        .card-menu:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Informatika Kelas 10</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link btn btn-danger btn-sm text-white px-3" href="/logout">Keluar</a>
        </div>
    </div>
</nav>

<div class="container my-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <h2 class="fw-bold">Selamat Datang di Portal Pembelajaran</h2>
            <p class="text-muted">Silakan pilih menu di bawah ini untuk memulai aktivitas belajar hari ini.</p>
        </div>
    </div>

    <div class="row g-4 justify-content-center mt-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0" onclick="window.location.href='/siswa'" style="cursor:pointer;">
            <div class="card-body text-center p-4">
                <div class="display-4 mb-3">📝</div>
                <h5 class="fw-bold">Presensi Absensi</h5>
                <p class="text-muted small">Silakan isi daftar hadir atau absensi kelas terlebih dahulu sebelum memulai sesi pembelajaran hari ini.</p>
                <span class="btn btn-primary btn-sm rounded-pill px-4">Isi Absensi</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0" onclick="window.location.href='/materi/1'" style="cursor:pointer transition: transform 0.2s;">
            <div class="card-body text-center p-4">
                <div class="display-4 mb-3">📱</div>
                <h5 class="fw-bold">Etika Digital & Dampak Sosial</h5>
                <p class="text-muted small">Mempelajari aturan netiket berkomunikasi, UU ITE, ancaman siber, dan cara mengamankan data pribadi.</p>
                <span class="btn btn-outline-primary btn-sm rounded-pill px-4">Baca Materi</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0" onclick="window.location.href='/materi/2'" style="cursor:pointer transition: transform 0.2s;">
            <div class="card-body text-center p-4">
                <div class="display-4 mb-3">💻</div>
                <h5 class="fw-bold">Sistem Komputer & Algoritma</h5>
                <p class="text-muted small">Mempelajari arsitektur hardware, software, konektivitas jaringan internet, dan fondasi coding dasar.</p>
                <span class="btn btn-outline-success btn-sm rounded-pill px-4">Baca Materi</span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>