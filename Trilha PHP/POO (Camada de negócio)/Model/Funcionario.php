<?php

class Funcionario
{

    private string $nome;
    private string $cargo;
    private float $salario;
    private DateTime $dataContratacao;

    public function __construct()
    {}

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
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     *
     * @param string $cargo
     */
    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    /**
     *
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     *
     * @param float $salario
     */
    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    /**
     *
     * @return DateTime
     */
    public function getDataContratacao(): DateTime
    {
        return $this->dataContratacao;
    }

    /**
     *
     * @param DateTime $dataContratacao
     */
    public function setDataContratacao(DateTime $dataContratacao): void
    {
        $this->dataContratacao = $dataContratacao;
    }

    public function mostrarFuncionarios()
    {
        return "\nFuncionario: " . $this->getNome() . 
        "\nAtividade: " . $this->getCargo() . 
        "\nSalário: R$ " . $this->getSalario() . 
        "\nData de Contratação: " . $this->getDataContratacao()->format('d/m/Y') . "</br>";
    }
}
?>