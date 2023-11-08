<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_jadwal';
    protected $table = "jadwal";  // sesuai nama dengan nama table
    protected $fillable = [
        'id_jadwal',
        'mapel',
        'kelas',
        'jam',
        'updated_at',
        'created_at'
    ];
}
