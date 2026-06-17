<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Kuis Interaktif</title>
    <style>
        body { 
            /* Warna background: Biru keunguan yang sangat lembut */
            background-color: #e9ecef; 
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            background-attachment: fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar { 
            background: linear-gradient(to right, #6a11cb, #2575fc) !important; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.1); 
        }
        .navbar-brand { font-weight: bold; letter-spacing: 1px; }
        
        .container { max-width: 900px; }

        .question-card {
            border: none;
            border-radius: 20px;
            background-color: #ffffff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            transition: transform 0.2s ease;
            overflow: hidden;
        }
        .question-card:hover {
            transform: translateY(-5px);
        }
        
        /* Garis warna di samping soal */
        .card-accent {
            width: 8px;
            background: #6a11cb;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .soal-text {
            font-weight: 600;
            color: #2d3436;
            margin-left: 15px;
        }

        .form-check {
            padding: 12px 15px 12px 45px;
            margin-bottom: 10px;
            border: 2px solid #f1f3f5;
            border-radius: 12px;
            transition: all 0.2s;
            cursor: pointer;
        }
        .form-check:hover {
            background-color: #f8f9fa;
            border-color: #6a11cb;
        }
        .form-check-input:checked + .form-check-label {
            color: #6a11cb;
            font-weight: bold;
        }

        .btn-submit {
            background: linear-gradient(to right, #00b09b, #96c93d);
            border: none;
            border-radius: 15px;
            padding: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            box-shadow: 0 4px 15px rgba(0,176,155,0.3);
            transition: 0.3s;
        }
        .btn-submit:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 20px rgba(0,176,155,0.4);
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark mb-5 p-3">
        <div class="container d-flex justify-content-between">
            <span class="navbar-brand">🧠 KUIS BERPIKIR KOMPUTASIONAL</span>
            <a href="/logout" class="btn btn-outline-light btn-sm rounded-pill px-3">Keluar</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="/quiz/submit/{{ $id }}" method="POST">
                    @csrf
                    
                    @foreach($questions as $index => $q)
                    <div class="card question-card mb-4 position-relative">
                        <div class="card-accent"></div>
                        <div class="card-body p-4">
                            <h5 class="text-muted mb-2" style="margin-left: 15px;">Soal #{{ $index + 1 }}</h5>
                            <p class="fs-5 soal-text">{{ $q['soal'] }}</p>
                            <hr class="my-4" style="opacity: 0.1;">
                            
                            <div class="options-container" style="margin-left: 15px;">
                                @foreach($q['opsi'] as $key => $opsi)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" 
                                           name="answers[{{$index}}]" 
                                           value="{{$key}}" 
                                           id="q{{$index}}{{$key}}" required>
                                    <label class="form-check-label w-100" for="q{{$index}}{{$key}}">
                                        {{ $opsi }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="text-center mt-5 mb-5">
                        <button type="submit" class="btn btn-submit w-100 py-3 shadow">
                            SELESAI & KIRIM JAWABAN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>