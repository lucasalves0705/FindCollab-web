<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        "codigo",
        "nome",
        "rua",
        "bairro",
        "cep",
        "numero",
        "complemento",
        "cidade",
        "estado",
        "fone1",
        "fone2",
        "email",
        "senha",
        "rg",
        "sexo",
        "cpf",
        "ano_formacao",
        "area_atuacao",
        "area_formacao",
    ];
}
