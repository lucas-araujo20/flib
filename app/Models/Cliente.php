<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'celular',
        'user_id',
    ];

    public function livros(){
        return $this->belongsToMany(Livro::class)
                ->withPivot(['active', 'id']);
    }
}
