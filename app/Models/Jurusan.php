<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_jurusan';
    protected $table = "jurusan";  // sesuai nama dengan nama table
    protected $fillable = [
        'id_jurusan',
        'namajurusan',
        'deskripsi',
        'updated_at',
        'created_at'
    ];
}
