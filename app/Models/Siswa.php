<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_siswa';
    protected $table = "siswa";  
    protected $fillable = [
        'id_siswa',
        'namasiswa',
        'alamat',
        'jeniskelamin',
        'id_kelas',
        'gambar_siswa',
    ];
}
