<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Kuis</title>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100 vh;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
        }
        .btn-primary {
            background: #764ba2;
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #5a3a7e;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="width: 380px;">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-dark">Welcome!</h2>
                <p class="text-muted">Silahkan login untuk mulai kuis</p>
            </div>
            @if(session('error')) <div class="alert alert-danger py-2 small text-center">{{ session('error') }}</div> @endif
            <form action="/login" method="POST">
    @csrf
    
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="user" class="form-control" placeholder="Masukkan username" required>
    </div>
    
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="pass" class="form-control" placeholder="Masukkan password" required>
    </div>
    
    <button type="submit" class="btn btn-primary w-100">MASUK</button>
</form>
</body>
</html>
