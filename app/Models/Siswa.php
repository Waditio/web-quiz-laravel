<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // PERBAIKAN: Beri tahu Laravel kolom mana saja yang boleh diisi data
    protected $fillable = ['nisn', 'nama', 'kelas'];
}