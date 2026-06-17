<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2: Sistem Komputer & Algoritma Pemrograman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; color: #333; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .materi-container { max-width: 950px; margin: auto; }
        .materi-section { background: white; border-radius: 16px; padding: 40px; margin-bottom: 35px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); border-left: 6px solid #0ea5e9; }
        .badge-topik { font-size: 0.85rem; padding: 8px 16px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; background-color: #e0f2fe; color: #0369a1; }
        p { text-align: justify; line-height: 1.8; }
        li { line-height: 1.8; margin-bottom: 8px; }
        .highlight-box { background-color: #f8fafc; border-radius: 8px; padding: 20px; border-top: 3px solid #cbd5e1; margin-top: 15px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/dashboard">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-brand navbar-nav ms-auto fs-6">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold px-3" href="/absensi"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5 materi-container">
    <div class="text-center mb-5">
        <h1 class="fw-extrabold display-4 text-dark mb-2">Modul 2: Arsitektur & Logika Komputer</h1>
        <p class="text-muted fs-5">Materi Integrasi: Perangkat Keras, Perangkat Lunak, Jaringan, dan Fondasi Pemrograman</p>
        <div class="alert alert-info d-inline-block rounded-pill px-4 py-2" role="alert">
             <strong>Estimasi Waktu Baca:</strong> 15 - 20 Menit
        </div>
    </div>

    <div class="materi-section">
        <span class="badge badge-topik rounded-pill mb-2">Bagian 1: Sistem Komputer</span>
        <h2 class="fw-bold text-dark mb-4">A. Arsitektur Komputer: Perangkat Keras dan Perangkat Lunak</h2>
        
        <p>
            Komputer tidak bekerja sebagai satu komponen tunggal, melainkan sebuah ekosistem yang disebut <strong>Sistem Komputer</strong>. Sistem ini terdiri dari tiga pilar utama yang saling bergantung: <em>Hardware</em> (perangkat keras), <em>Software</em> (perangkat lunak), dan <em>Brainware</em> (manusia yang mengoperasikan). Jika salah satu komponen ini tidak ada, maka sistem komputer tidak akan bisa berfungsi sama sekali.
        </p>

        <h4 class="fw-bold text-info mt-4">1. Perangkat Keras (Hardware)</h4>
        <p>
            Hardware merupakan seluruh komponen fisik dari komputer yang dapat kita lihat, sentuh, dan pindahkan. Berdasarkan siklus pemrosesan data pada komputer, hardware diklasifikasikan menjadi empat bagian utama:
        </p>
        <ul>
            <li><strong>Perangkat Masukan (Input Device):</strong> Berfungsi sebagai pintu gerbang masuknya data dari luar ke dalam sistem komputer untuk diproses. Contoh paling mendasar adalah <em>Keyboard</em> (memasukkan karakter/perintah teks), <em>Mouse</em> (perangkat penunjuk pointer), dan <em>Scanner</em> (mengubah dokumen fisik menjadi digital).</li>
            <li><strong>Perangkat Pemrosesan (Processing Device):</strong> Ini adalah dapur pacu utama komputer. Komponen terpentingnya adalah <strong>CPU (Central Processing Unit)</strong> atau sering disebut processor. Di dalam CPU, terdapat dua bagian penting: <em>ALU (Arithmetic Logic Unit)</em> yang menghitung urusan matematika/logika, dan <em>CU (Control Unit)</em> yang mengatur lalu lintas data serta jalannya program.</li>
            <li><strong>Perangkat Penyimpanan (Storage Device):</strong> Tempat menyimpan instruksi data program. Penyimpanan dibagi menjadi dua:
                <ul>
                    <li><em>Penyimpanan Utama (Volatile):</em> Seperti <strong>RAM (Random Access Memory)</strong>, bertugas menyimpan data sementara yang sedang diproses CPU. Jika komputer mati, data di RAM hilang.</li>
                    <li><em>Penyimpanan Sekunder (Non-Volatile):</em> Seperti <strong>HDD (Hard Disk Drive)</strong> atau teknologi terbaru <strong>SSD (Solid State Drive)</strong> yang memiliki kecepatan transfer data jauh lebih tinggi untuk menyimpan file operating system dan file pribadi secara permanen.</li>
                </ul>
            </li>
            <li><strong>Perangkat Keluaran (Output Device):</strong> Berfungsi menampilkan hasil pengolahan data dari CPU ke pengguna manusia. Contohnya <em>Monitor</em> (menampilkan grafis visual), <em>Printer</em> (mencetak teks/gambar ke media kertas), dan <em>Speaker</em> (mengeluarkan output berupa suara).</li>
        </ul>

        <h4 class="fw-bold text-info mt-4">2. Perangkat Lunak (Software)</h4>
        <p>
            Jika hardware adalah tubuh komputer, maka software adalah jiwa/pikirannya. Software berupa kumpulan instruksi elektronik (program komputer) yang disusun sedemikian rupa agar komputer dapat melakukan tugas tertentu. Software terbagi menjadi:
        </p>
        <ul>
            <li><strong>Sistem Operasi (Operating System / OS):</strong> Perangkat lunak paling mendasar yang bertugas mengelola seluruh hardware komputer dan menyediakan antarmuka (*interface*) bagi aplikasi lain. Tanpa OS, komputer hanyalah besi tua tak berguna. Contoh OS populer: <em>Microsoft Windows, Linux, dan macOS</em>.</li>
            <li><strong>Program Aplikasi (Application Software):</strong> Perangkat lunak siap pakai yang diinstal di atas sistem operasi untuk membantu pekerjaan spesifik pengguna. Contohnya meliputi browser internet seperti <em>Google Chrome</em>, aplikasi perkantoran seperti <em>Microsoft Office Word</em>, serta software editor grafis.</li>
        </ul>
    </div>

    <div class="materi-section" style="border-left-color: #10b981;">
        <span class="badge badge-topik rounded-pill mb-2" style="background-color: #d1fae5; color: #065f46;">Bagian 2: Jaringan & Internet</span>
        <h2 class="fw-bold text-dark mb-4">B. Konektivitas Jaringan Komputer Global</h2>
        
        <p>
            Pada era modern saat ini, sebuah komputer yang berdiri sendiri (*stand-alone*) memiliki fungsionalitas yang terbatas. Oleh karena itu, dibangunlah konsep <strong>Jaringan Komputer</strong>, yaitu sebuah sistem yang menghubungkan dua atau lebih komputer menggunakan media transmisi tertentu (baik kabel tembaga, serat optik, maupun gelombang radio/nirkabel) agar dapat saling berbagi data, bertukar file, maupun berbagi perangkat keras seperti printer bersama.
        </p>

        <h4 class="fw-bold text-success mt-4">1. Pembagian Wilayah Jaringan</h4>
        <p>Berdasarkan jangkauan geografisnya, jaringan komputer dibedakan menjadi beberapa jenis, di antaranya yang paling mendasar diajarkan di kelas 10 adalah:</p>
        <ul>
            <li><strong>LAN (Local Area Network):</strong> Jaringan komputer berskala kecil dengan radius jangkauan yang terbatas. Biasanya digunakan di dalam satu ruangan, satu gedung sekolah, laboratorium komputer, atau area perkantoran swasta.</li>
            <li><strong>Internet (Interconnected Network):</strong> Jaringan komputer raksasa berskala global dunia yang mengintegrasikan jutaan jaringan lokal (LAN/WAN) di seluruh planet bumi secara langsung. Internet memungkinkan miliaran manusia bertukar informasi dalam hitungan milidetik tanpa batas jarak.</li>
        </ul>

        <h4 class="fw-bold text-success mt-4">2. Perangkat Keras Jaringan (Networking Hardware)</h4>
        <p>Untuk menyusun sebuah jaringan internet yang dapat mentransmisikan data dalam jumlah besar secara akurat, dibutuhkan hardware khusus:</p>
        <ul>
            <li><strong>Modem (Modulator Demodulator):</strong> Alat vital yang berfungsi mengubah sinyal analog (misal dari kabel telepon/fiber optik) menjadi sinyal digital yang dimengerti oleh komputer, dan sebaliknya.</li>
            <li><strong>Router:</strong> Perangkat pintar jaringan yang bertugas mengatur lalu lintas dan merutekan paket data antar-jaringan yang berbeda segmen, memastikan data terkirim lewat jalur tercepat sampai ke alamat tujuan.</li>
            <li><strong>Switch / Hub:</strong> Alat pembagi jaringan yang berfungsi menghubungkan banyak komputer sekaligus di dalam lingkup satu jaringan lokal (LAN).</li>
        </ul>
    </div>

    <div class="materi-section" style="border-left-color: #f59e0b;">
        <span class="badge badge-topik rounded-pill mb-2" style="background-color: #fef3c7; color: #92400e;">Bagian 3: Fondasi Coding</span>
        <h2 class="fw-bold text-dark mb-4">C. Logika Berpikir Komputasional & Dasar Coding</h2>
        
        <p>
            Komputer pada dasarnya adalah mesin yang patuh namun tidak memiliki inisiatif sendiri. Agar komputer dapat memecahkan suatu masalah atau menjalankan fitur aplikasi, manusia harus memberikan serangkaian instruksi yang sangat jelas, detail, dan tidak ambigu. Proses perancangan panduan berpikir inilah yang melahirkan ilmu <strong>Algoritma dan Pemrograman</strong>.
        </p>

        <h4 class="fw-bold text-warning mt-4">1. Esensi dari Algoritma</h4>
        <p>
            <strong>Algoritma</strong> adalah urutan langkah-langkah yang logis, sistematis, berurutan, dan terstruktur yang disusun secara runtut untuk menyelesaikan suatu masalah tertentu atau menyelesaikan pekerjaan. Di kehidupan nyata, algoritma mirip seperti resep memasak langkah demi langkah. Dalam dunia komputer, algoritma harus ditulis secara logis agar komputer tidak salah menginterpretasikan instruksi tersebut.
        </p>

        <h4 class="fw-bold text-warning mt-4">2. Pengenalan Bahasa Pemrograman (Coding)</h4>
        <p>
            Setelah algoritma selesai dirancang di atas kertas (bisa menggunakan flowchart atau pseudocode), langkah selanjutnya adalah menerjemahkan urutan langkah tersebut ke dalam bahasa yang dipahami oleh mesin komputer. Bahasa ini disebut <strong>Bahasa Pemrograman</strong>.
        </p>
        <p>
            Bahasa pemrograman tingkat tinggi didesain menggunakan kosakata bahasa Inggris yang mudah dipahami manusia namun terstruktur rapat sesuai aturan mesin. Untuk kelas 10 SMA, bahasa pemrograman yang populer digunakan untuk melatih logika dasar adalah <strong>Python</strong> dan <strong>C++</strong> karena strukturnya yang mencerminkan cara kerja logika matematika dasar.
        </p>

        <div class="highlight-box">
            <h5 class="fw-bold text-danger">⚠️ Pemahaman Krusial: Jenis Error Saat Menulis Program</h5>
            <p class="mb-0">
                Saat siswa mempraktikkan penulisan kode program (coding) di komputer, mereka pasti akan sering menemui kegagalan program. Di dalam dunia informatika, jenis kesalahan (*error*) dikelompokkan menjadi dua tipe utama:
            </p>
            <ul class="mt-2 mb-0">
                <li><strong>Syntax Error (Kesalahan Sintaks):</strong> Terjadi karena ada pelanggaran aturan penulisan kode atau tata bahasa pemrograman (misalnya: kurang tanda kurung kurawal, lupa menaruh tanda titik koma, atau typo menulis perintah fungsi). Kesalahan ini berakibat fatal karena <strong>menyebabkan seluruh program macet total dan menolak untuk dijalankan</strong> oleh interpreter/compiler komputer.</li>
                <li><strong>Logical Error (Kesalahan Logika):</strong> Terjadi ketika kode program berhasil dijalankan tanpa ada pesan error terhenti, namun output/hasil akhir yang dikeluarkan aplikasi salah atau tidak sesuai keinginan. Hal ini dikarenakan logika berpikir atau rumus matematika yang dimasukkan programmer keliru.</li>
            </ul>
        </div>
    </div>

    <div class="text-center my-5">
        <p class="fw-bold text-secondary">Luar biasa! Kamu telah menyelesaikan seluruh rangkaian membaca Modul Bahan Ajar Kelas 10.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center gap-3">
            <a href="/quiz/2" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow fw-bold">Ambil Evaluasi Kuis Sistem Komputer! →</a>
            <a href="/dashboard" class="btn btn-outline-secondary btn-lg rounded-pill px-5 py-3 fw-bold">Kembali ke Dashboard</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>