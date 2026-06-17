<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Evaluasi Kuis Berpikir Komputasional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f1f3f5; }
        .result-card { border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card result-card bg-white p-5 border-0">
                <div class="mb-4">
                    <span class="display-1">🎯</span>
                </div>
                <h2 class="fw-bold text-dark mb-2">Hasil Evaluasi Kuis</h2>
                <p class="text-muted mb-4">Berpikir Komputasional - Informatika Kelas 10</p>
                <hr>
                
                <div class="my-4">
                    <h5 class="text-secondary">Skor Akhir Anda:</h5>
                    <h1 class="display-2 fw-bold text-success">{{ $finalScore }}</h1>
                </div>

                <div class="row bg-light rounded p-3 mb-4 text-start">
                    <div class="col-6">
                        <span class="text-muted d-block">Benar:</span>
                        <strong class="text-success fs-5">{{ $score }} Soal</strong>
                    </div>
                    <div class="col-6">
                        <span class="text-muted d-block">Total Pertanyaan:</span>
                        <strong class="text-dark fs-5">{{ $totalQuestions }} Soal</strong>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <a href="/dashboard" class="btn btn-primary btn-lg rounded-pill px-4">Kembali ke Dashboard</a>
                    <a href="/logout" class="btn btn-outline-danger btn-sm border-0 mt-2">Keluar Sistem</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>