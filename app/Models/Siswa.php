<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "siswa";  
    protected $fillable = [
        'id',
        'namasiswa',
        'alamat',
        'jeniskelamin',
        'kelas',
    ];
}