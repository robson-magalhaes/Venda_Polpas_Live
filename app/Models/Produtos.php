<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'imagem',
        'valor',
        'quantidade'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
