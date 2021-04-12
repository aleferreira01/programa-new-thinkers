<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cozinhas extends Model
{
    protected $table = 'cozinha';

    protected $fillable = [
        'tipo',
        'pratoPrincipal',
        'numeroPratos',
        'numeroCozinheiros',
        'tempoPreparo',
        'horaAbertura',
        'horaFechamento'
    ];

    public $timestamps = false;

}
