<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'contenido',
        'url_img',
    ];

    public function scopeIdDescending($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }
}
