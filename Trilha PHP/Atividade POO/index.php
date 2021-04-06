<?php

    require 'Cozinha.php';

    $mineira = new Cozinha();
    
    $mineira->setTipoCozinha("Mineira");
    $mineira->setPratoPrincipal("Feijoada");
    $mineira->setHorarioAbertura(14);
    $mineira->setHorarioFechamento(20);
    $mineira->setNumerosPratos(10);
    
    $funcionarioAlexander = new Funcionario();
    $funcionarioAlexander->setNome("Alexander");
    $funcionarioAlexander->setFuncao("Cozinheiro");
    $funcionarioAlexander->setSalario(1500.00);
    $funcionarioAlexander->setDataContratacao(new DateTime("2021-01-05"));
    $funcionarioAlexander->setTipoContrato("CLT");
    
    $funcionarioJoao = new Funcionario();
    $funcionarioJoao->setNome("João");
    $funcionarioJoao->setFuncao("Auxiliar de Cozinha");
    $funcionarioJoao->setSalario(1000.00);
    $funcionarioJoao->setDataContratacao(new DateTime());
    $funcionarioJoao->setTipoContrato("CLT");
    
    $mineira->setFuncionario($funcionarioAlexander);
    $mineira->setFuncionario($funcionarioJoao);
    
    $feijao = new Ingrediente();
    $feijao->setNome("Feijão");
    $feijao->setDataValidade(new DateTime("2022-06-03"));
    
    $farinha = new Ingrediente();
    $farinha->setNome("Farinha");
    $farinha->setDataValidade(new DateTime("2022-06-29"));
    
    $mineira->setIngrediente($feijao);
    $mineira->setIngrediente($farinha);
    
    $arabe = new Cozinha();    
    $arabe->setTipoCozinha("Árabe");
    $arabe->setPratoPrincipal("Quibe");
    $arabe->setHorarioAbertura(8);
    $arabe->setHorarioFechamento(22);
    $arabe->setNumerosPratos(15);
    
    $funcionariaMaria = new Funcionario();
    $funcionariaMaria->setNome("Maria");
    $funcionariaMaria->setFuncao("Cozinheiro");
    $funcionariaMaria->setSalario(2000.00);
    $funcionariaMaria->setDataContratacao(new DateTime("2021-02-15"));
    $funcionariaMaria->setTipoContrato("PJ");
    
    $arabe->setFuncionario($funcionariaMaria);    
    
    $carne = new Ingrediente();
    $carne->setNome("Carne");
    $carne->setDataValidade(new DateTime("2021-09-07"));   
    
    $arabe->setIngrediente($carne); 
    
    echo"<h1> Cozinhas </h1>";
    echo"<h2> Mineira </h2>";
    echo "<pre>";
    $mineira->mostrarCozinha();
    $mineira->lavarLouca();
    echo "</br>";
    echo"<h2>Árabe </h2>";
    $arabe->mostrarCozinha();
    echo "</pre>";    
    
    echo "<hr>";
    echo "<pre>";
    print_r($mineira);    
    echo "</br>";    
    print_r($arabe);

?>


