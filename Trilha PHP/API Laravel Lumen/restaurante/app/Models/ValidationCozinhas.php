<?php


namespace App\Models;


class ValidationCozinhas
{
    const RULE_COZINHA = [
        'tipo' => 'required | max:30 | min:3 ',
        'pratoPrincipal' => 'max:30 | min:3 ',
        'numeroPratos' => 'numeric | digits_between: 1,3',
        'numeroCozinheiros' => 'numeric | digits_between: 1,3',
        'tempoPreparo' => 'numeric | digits_between: 1,2',
        'horaAbertura' => 'numeric | max:23 | min:0 | digits_between:1,2',
        'horaFechamento' => 'numeric | max:23 | min:0 | digits_between:1,2'
    ];
}
