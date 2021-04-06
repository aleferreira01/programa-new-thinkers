<?php

class Ingrediente
{
    private string $nome;
    private DateTime $dataValidade;
    
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
    public function getDataValidade()
    {
        return $this->dataValidade;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $dataValidade
     */
    public function setDataValidade($dataValidade)
    {
        $this->dataValidade = $dataValidade;
    }
    
    public function mostrarIngredientes(){
        return "\nIngrediente: " . $this->getNome() . 
        "\nData de Validade: " . $this->getDataValidade()->format('d/m/Y') .
        "</br>"; 
       
    }
        
}

?>

