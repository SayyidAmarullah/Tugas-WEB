<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class minuman extends Model
{
    use HasFactory;
    protected $table = 'minumen';
    protected $fillable = [
        'nama_minuman',
        'jenis_minuman',
        'harga_minuman',
    ];
}
