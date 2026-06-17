<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Kehadiran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); min-height: 100vh; font-family: 'Segoe UI', sans-serif; }
        .card-absensi { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); background-color: white; }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-absensi p-4">
                <div class="card-body">
                    <h3 class="text-center fw-bold mb-2">Presensi Kelas</h3>
                    <p class="text-center text-muted small mb-4">Silakan isi identitas Anda dengan benar</p>
                    
                    <form action="/absensi/simpan" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control form-control-lg" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Status Kehadiran</label>
                            <select name="status" class="form-select form-select-lg" required>
                                <option value="Hadir">Hadir</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill mb-2" style="background-color: #6a11cb; border:none;">Kirim Kehadiran</button>
                        <a href="/dashboard" class="btn btn-outline-secondary w-100 rounded-pill btn-sm">Kembali ke Dashboard</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>