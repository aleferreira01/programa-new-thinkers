<?php

require 'Funcionario.php';
require 'Ingrediente.php';

class Cozinha
{
    private string $tipoCozinha;
    private string $pratoPrincipal;
    private int $horarioAbertura;
    private int $horarioFechamento;
    private int $numerosPratos;    
    private array $ingredientes;
    private array $funcionarios;
    
    public function __construct(){
        $this->ingredientes = [];
        $this->funcionarios = [];
    }    
    
    /**
     * @return mixed
     */
    public function getTipoCozinha()
    {
        return $this->tipoCozinha;
    }

    /**
     * @return mixed
     */
    public function getPratoPrincipal()
    {
        return $this->pratoPrincipal;
    }

    /**
     * @return mixed
     */
    public function getHorarioAbertura()
    {
        return $this->horarioAbertura;
    }

    /**
     * @return mixed
     */
    public function getHorarioFechamento()
    {
        return $this->horarioFechamento;
    }

    /**
     * @return mixed
     */
    public function getNumerosPratos()
    {
        return $this->numerosPratos;
    }

    /**
     * @return mixed
     */
    public function getIngredientes(){
        
        $strIngredientes = "";
        
        foreach($this->ingredientes as $ingrediente){
            $strIngredientes .= $ingrediente-> mostrarIngredientes();
        }
        
        return $strIngredientes;
    }

    /**
     * @return mixed
     */
    public function getFuncionarios()
    {
        $strFuncionarios = "";
        
        foreach($this->funcionarios as $func){
            $strFuncionarios .= $func-> mostrarFuncionarios();
        }
        
        return $strFuncionarios;
    }

    /**
     * @param mixed $tipoCozinha
     */
    public function setTipoCozinha($tipoCozinha)
    {
        $this->tipoCozinha = $tipoCozinha;
    }

    /**
     * @param mixed $pratoPrincipal
     */
    public function setPratoPrincipal($pratoPrincipal)
    {
        $this->pratoPrincipal = $pratoPrincipal;
    }

    /**
     * @param mixed $horarioAbertura
     */
    public function setHorarioAbertura($horarioAbertura)
    {
        $this->horarioAbertura = $horarioAbertura;
    }

    /**
     * @param mixed $horarioFechamento
     */
    public function setHorarioFechamento($horarioFechamento)
    {
        $this->horarioFechamento = $horarioFechamento;
    }

    /**
     * @param mixed $numerosPratos
     */
    public function setNumerosPratos($numerosPratos)
    {
        $this->numerosPratos = $numerosPratos;
    }

    /**
     * @param mixed $ingredientes
     */
    public function setIngrediente($ingrediente)
    {
        array_push($this->ingredientes, $ingrediente);
    }

    /**
     * @param mixed $funcionarios
     */
    public function setFuncionario($funcionario)
    {
        array_push($this->funcionarios, $funcionario);
    }
    
    public function lavarLouca() {
        echo "<p>Lavando louça...</p>";
    }
    
    public function mostrarCozinha(){
        echo "\nTipo de cozinha: " . $this->getTipoCozinha() .
        "\nPrato Principal: " . $this->getPratoPrincipal() .
        "\nHora de Abertura: às " . $this->getHorarioAbertura() . " horas" .
        "\nHora de Fechamento: às " . $this->getHorarioFechamento() . " horas" .
        "\nNúmero de pratos: " . $this->getNumerosPratos() .
        "\n</br>Ingredientes: </br>" . $this->getIngredientes() .
        "\nFuncionários: </br>" . $this->getFuncionarios() .
        "</br>";
    }
    
}

?>