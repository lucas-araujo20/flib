<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'enredo',
        'imagem',
        'autor',
        'user_id',
    ];

    public function clientes(){
        return $this->belongsToMany(Cliente::class)
                ->withPivot(['active', 'id']);
    }
}
