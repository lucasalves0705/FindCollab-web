<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'rg',
        'cpf',
        'logradouro',
        'numero',
        'cidade',
        'estado',
        'areaFormacao',
        'areaAtuacao',
        'anoFormacao',
        'telefone',
        'email',
        'nomeUsuario',
        'senha'

    ];
}
