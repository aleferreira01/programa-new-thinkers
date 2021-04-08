<?php

class Ingrediente
{

    private string $nome;
    private DateTime $dataValidade;

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
     * @return DateTime
     */
    public function getDataValidade(): DateTime
    {
        return $this->dataValidade;
    }

    /**
     *
     * @param DateTime $dataValidade
     */
    public function setDataValidade(DateTime $dataValidade): void
    {
        $this->dataValidade = $dataValidade;
    }

    public function mostrarIngredientes()
    {
        return "\nIngrediente: " . $this->getNome() . 
        "\nData de Validade: " . $this->getDataValidade()->format('d/m/Y') . "</br>";
    }
}
?>