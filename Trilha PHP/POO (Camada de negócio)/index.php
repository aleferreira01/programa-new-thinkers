<?php
require 'Business/CozinhaBO.php';
require 'Business/IngredienteBO.php';
require 'Business/FuncionarioBO.php';

try {

    $cozinhaBO = new CozinhaBO();
    $minhaCozinha = $cozinhaBO->criar("Mineira", 12, 23, "Pão de Queijo", 10);

    $ingredienteBO = new IngredienteBO();
    $farinha = $ingredienteBO->criar("Farinha", new DateTime("2022-06-29"));
    $feijao = $ingredienteBO->criar("Feijão", new DateTime("2022-06-03"));

    $funcionarioBO = new FuncionarioBO();
    $funcionarioMaria = $funcionarioBO-> criar("Maria", 
        "Cozinheira", 
        2000.00, 
        new DateTime("2021-02-15"));
    $funcionarioJoao = $funcionarioBO-> criar("João", 
        "Auxiliar de Cozinha", 
        1600.00, 
        new DateTime("2021-04-08"));

    $cozinhaBO->adicionarIngrediente($farinha);
    $cozinhaBO->adicionarIngrediente($feijao);
    $cozinhaBO->adicionarFuncionario($funcionarioMaria);
    $cozinhaBO->adicionarFuncionario($funcionarioJoao);

    echo "<pre>";
    $cozinhaBO->exibirCozinha($minhaCozinha);
    echo "</pre>";

    /*
     * echo"<pre>";
     * print_r($minhaCozinha);
     */
} catch (Exception $e) {
    echo $e->getMessage();
}
?>