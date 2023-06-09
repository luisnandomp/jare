<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jacare extends Model
{
    use HasFactory;

    protected $table = 'jacares';

    protected $fillable = [
        'nome',
        'peso',
        'tamanho',
        'sexo',
        'vacinado'
    ];
}
