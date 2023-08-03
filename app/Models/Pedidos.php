<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'produto',
        'quantidade'
    ];
    protected $hidden = [
        'remember_token',
    ];
}
