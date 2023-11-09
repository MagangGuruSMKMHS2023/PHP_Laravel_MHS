<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembangan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pengembangan';
    protected $table = "pengembangan";  // sesuai nama dengan nama table
    protected $fillable = [
        'id_pengembangan',
        'namapengembangan',
        'jumlah',
        'jenis',
        'updated_at',
        'created_at'
    ];
}
