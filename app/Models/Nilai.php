<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_nilai';
    protected $table = "nilai";  // sesuai nama dengan nama table
    protected $fillable = [
        'id_nilai',
        'id_siswa',
        'tugas',
        'kuis',
        'uts',
        'uas',
        'total_nilai',
        'keterangan',
        'updated_at',
        'created_at'
    ];
}
