<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class QuizController extends Controller {
    public function showLogin() { return view('login'); }
    public function processLogin(Request $request) {
        if ($request->user == "admin" && $request->pass == "12345") {
            session(['logged_in' => true]);
            return redirect('/dashboard');
        }
        return back()->with('error', 'Login Gagal!');
    }

    public function showDashboard() { return view('dashboard'); }
    public function showAbsensi() { return view('absensi'); }
    public function simpanAbsensi(Request $request) {
        return redirect('/dashboard')->with('success', 'Absensi Berhasil!');
    }

    // Menampilkan materi berdasarkan ID
    public function showMateri($id) {
        if ($id == 1) return view('materi_etika'); // Jalur Etika
        return view('materi_dasar'); // Jalur Sistem Komputer
    }

    public function showQuiz($id) {
        if ($id == 1) {
            // SOAL MODUL 1: ETIKA DIGITAL
            $questions = [
                ['soal' => 'Apa yang dimaksud dengan Netiket?', 'opsi' => ['A' => 'Internet Lambat', 'B' => 'Etika Berinternet', 'C' => 'Virus Komputer'], 'jawaban' => 'B'],
                ['soal' => 'Menyebarkan berita bohong di media sosial disebut...', 'opsi' => ['A' => 'Hoax', 'B' => 'Update', 'C' => 'Download'], 'jawaban' => 'A'],
                ['soal' => 'UU yang mengatur tentang teknologi informasi di Indonesia adalah...', 'opsi' => ['A' => 'UU Perkawinan', 'B' => 'UU ITE', 'C' => 'UU Lalu Lintas'], 'jawaban' => 'B'],
                ['soal' => 'Tindakan merundung orang lain secara online disebut...', 'opsi' => ['A' => 'Cyber Bullying', 'B' => 'E-Commerce', 'C' => 'Coding'], 'jawaban' => 'A'],
                ['soal' => 'Manakah contoh data pribadi yang harus dilindungi?', 'opsi' => ['A' => 'Warna Favorit', 'B' => 'NIK KTP', 'C' => 'Judul Lagu'], 'jawaban' => 'B'],
                ['soal' => 'Istilah untuk mengambil karya orang lain tanpa izin adalah...', 'opsi' => ['A' => 'Plagiarisme', 'B' => 'Kreativitas', 'C' => 'Sharing'], 'jawaban' => 'A'],
                ['soal' => 'Apa fungsi utama dari password yang kuat?', 'opsi' => ['A' => 'Biar Cepat Login', 'B' => 'Keamanan Akun', 'C' => 'Biar Keren'], 'jawaban' => 'B'],
                ['soal' => 'Jejak yang kita tinggalkan saat berinternet disebut...', 'opsi' => ['A' => 'Sampah Digital', 'B' => 'Jejak Digital', 'C' => 'Memori Internal'], 'jawaban' => 'B'],
                ['soal' => 'E-mail penipuan yang pura-pura dari bank disebut...', 'opsi' => ['A' => 'Phishing', 'B' => 'Fishing', 'C' => 'Surfing'], 'jawaban' => 'A'],
                ['soal' => 'Haki adalah singkatan dari...', 'opsi' => ['A' => 'Hak Atas Kekayaan Intelektual', 'B' => 'Hari Kebangkitan Isi', 'C' => 'Hak Anak Kita'], 'jawaban' => 'A'],
            ];
        } else {
            // SOAL MODUL 2: SISTEM KOMPUTER (YANG KEMAREN)
            $questions = [
                ['soal' => 'Komponen fisik komputer disebut...', 'opsi' => ['A' => 'Software', 'B' => 'Hardware', 'C' => 'Brainware'], 'jawaban' => 'B'],
                ['soal' => 'Otak komputer adalah...', 'opsi' => ['A' => 'Monitor', 'B' => 'CPU', 'C' => 'Keyboard'], 'jawaban' => 'B'],
                ['soal' => 'Contoh perangkat input adalah...', 'opsi' => ['A' => 'Mouse', 'B' => 'Printer', 'C' => 'Speaker'], 'jawaban' => 'A'],
                ['soal' => 'Langkah logis penyelesaian masalah disebut...', 'opsi' => ['A' => 'Software', 'B' => 'Algoritma', 'C' => 'Hardware'], 'jawaban' => 'B'],
                ['soal' => 'Bahasa pemrograman populer untuk pemula adalah...', 'opsi' => ['A' => 'Bahasa Kalbu', 'B' => 'Python', 'C' => 'Windows'], 'jawaban' => 'B'],
                ['soal' => 'RAM berfungsi sebagai penyimpanan...', 'opsi' => ['A' => 'Permanen', 'B' => 'Sementara', 'C' => 'Cadangan'], 'jawaban' => 'B'],
                ['soal' => 'Kesalahan penulisan kode disebut...', 'opsi' => ['A' => 'Bug', 'B' => 'Fix', 'C' => 'Update'], 'jawaban' => 'A'],
                ['soal' => 'Windows dan Linux adalah contoh...', 'opsi' => ['A' => 'Aplikasi', 'B' => 'Sistem Operasi', 'C' => 'Hardware'], 'jawaban' => 'B'],
                ['soal' => 'Alat untuk menghubungkan internet adalah...', 'opsi' => ['A' => 'Modem', 'B' => 'Monitor', 'C' => 'Mouse'], 'jawaban' => 'A'],
                ['soal' => 'Penyimpanan data yang sangat cepat adalah...', 'opsi' => ['A' => 'HDD', 'B' => 'SSD', 'C' => 'Disk'], 'jawaban' => 'B'],
            ];
        }
        return view('halaman_kuis', compact('questions', 'id'));
    }

    public function submitQuiz(Request $request, $id) {
    $correct = 0;
    
    // Kunci jawaban kuis
    if ($id == 1) {
        $ans = ['B','A','B','A','B','A','B','B','A','A']; // Modul 1
    } else {
        $ans = ['B','B','A','B','B','B','A','B','A','B']; // Modul 2
    }
    
    $userAns = $request->input('answers', []);
    foreach ($ans as $i => $a) { 
        if (($userAns[$i] ?? '') == $a) {
            $correct++; 
        }
    }
    
    $finalScore = ($correct / 10) * 100;
    
    // PERBAIKAN DI SINI: Kita kirimkan '$total' dan '$totalQuestions' sekaligus agar aman
    return view('hasil', [
        'finalScore' => $finalScore, 
        'score' => $correct, 
        'total' => 10,                 // Ini untuk mengatasi error '$total' di blade kamu
        'totalQuestions' => 10
    ]);
}

    public function logout() { session()->flush(); return redirect('/'); }
}