<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_mapel';
    protected $table = "mapel";  // sesuai nama dengan nama table
    protected $fillable = [
        'id_mapel',
        'namamapel',
        'id_guru',
        'updated_at',
        'created_at'
    ];
}
