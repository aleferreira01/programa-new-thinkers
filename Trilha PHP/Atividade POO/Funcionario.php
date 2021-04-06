<?php

class Funcionario
{
    private string $nome;
    private string $funcao;
    private float $salario;
    private DateTime $dataContratacao;
    private string $tipoContrato;
    
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @return mixed
     */
    public function getDataContratacao()
    {
        return $this->dataContratacao;
    }

    /**
     * @return mixed
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $funcao
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @param mixed $dataContratacao
     */
    public function setDataContratacao($dataContratacao)
    {
        $this->dataContratacao = $dataContratacao;
    }

    /**
     * @param mixed $tipoContrato
     */
    public function setTipoContrato($tipoContrato)
    {
        $this->tipoContrato = $tipoContrato;
    }
    
    public function mostrarFuncionarios(){
        return "\nFuncionario: " . $this->getNome() . 
        "\nAtividade: " . $this->getFuncao() .
        "\nSalário: R$ " . $this->getSalario() . 
        "\nData de Contratação: " . $this->getDataContratacao()->format('d/m/Y') .
        "\nTipo de contrato: " . $this->getTipoContrato() .
        "</br>";
    }
   
}

?>

