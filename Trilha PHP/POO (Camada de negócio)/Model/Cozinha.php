<?php
require_once "Funcionario.php";
require_once "Ingrediente.php";

class Cozinha
{

    private string $nome;
    private string $pratoPrincipal;
    private int $horarioAbertura;
    private int $horarioFechamento;
    private int $numerosPratos;

    private array $listaFuncionarios = [];
    private array $listaIngredientes = [];

    public function __contruct()
    {}

    /**
     *
     * @return mixed
     */
    public function getNumerosPratos()
    {
        return $this->numerosPratos;
    }

    /**
     *
     * @param mixed $numerosPratos
     */
    public function setNumerosPratos($numerosPratos)
    {
        $this->numerosPratos = $numerosPratos;
    }

    /**
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     *
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     *
     * @return string
     */
    public function getPratoPrincipal(): string
    {
        return $this->pratoPrincipal;
    }

    /**
     *
     * @param string $pratoPrincipal
     */
    public function setPratoPrincipal(string $pratoPrincipal): void
    {
        $this->pratoPrincipal = $pratoPrincipal;
    }

    /**
     *
     * @return int
     */
    public function getHorarioAbertura(): int
    {
        return $this->horarioAbertura;
    }

    /**
     *
     * @param int $horarioAbertura
     */
    public function setHorarioAbertura(int $horarioAbertura): void
    {
        $this->horarioAbertura = $horarioAbertura;
    }

    /**
     *
     * @return int
     */
    public function getHorarioFechamento(): int
    {
        return $this->horarioFechamento;
    }

    /**
     *
     * @param int $horarioFechamento
     */
    public function setHorarioFechamento(int $horarioFechamento): void
    {
        $this->horarioFechamento = $horarioFechamento;
    }

    /**
     *
     * @return array
     */
    public function getListaFuncionariosText()
    {
        $strFuncionarios = "";

        foreach ($this->listaFuncionarios as $func) {
            $strFuncionarios .= $func->mostrarFuncionarios();
        }

        return $strFuncionarios;
    }

    public function getListaFuncionarios()
    {
        return $this->listaFuncionarios;
    }

    /**
     *
     * @param Funcionario $funcionario
     */
    public function setListaFuncionarios(Funcionario $funcionario): void
    {
        array_push($this->listaFuncionarios, $funcionario);
    }

    /**
     *
     * @return array
     */
    public function getListaIngredientesText()
    {
        $strIngredientes = "";

        foreach ($this->listaIngredientes as $ingrediente) {
            $strIngredientes .= $ingrediente->mostrarIngredientes();
        }

        return $strIngredientes;
    }

    public function getListaIngredientes()
    {
        return $this->listaIngredientes;
    }

    /**
     *
     * @param Ingrediente $ingrediente
     */
    public function setListaIngredientes(Ingrediente $ingrediente): void
    {
        array_push($this->listaIngredientes, $ingrediente);
    }

    public function exibirCozinha()
    {
        echo "\nTipo de cozinha: " . $this->getNome() . 
        "\nPrato Principal: " . $this->getPratoPrincipal() . 
        "\nHora de Abertura: às " . $this->getHorarioAbertura() . " horas" . 
        "\nHora de Fechamento: às " . $this->getHorarioFechamento() . " horas" . 
        "\nNúmero de pratos: " . $this->getNumerosPratos() . 
        "\n</br>Ingredientes: </br>" . $this->getListaIngredientesText() . 
        "\nFuncionários: </br>" . $this->getListaFuncionariosText() . "</br>";
    }
}
?>