<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'quantidade',
        'valor',
        'produtos_id',
        'cliente_id'
    ];

    protected $hidden = [
        'remember_token',
    ];
    // public function Carts(){
    //     return $this->hasOne(Carts::class, 'produtos_id');
    // }
}
