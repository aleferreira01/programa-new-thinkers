<?php
require_once "Model/Ingrediente.php";

class IngredienteBO
{

    public function __construct()
    {}

    public function criar($nome, $dataValidade)
    {
        $this->validarCamposObrigatorios($nome, $dataValidade);

        $ingrediente = new Ingrediente();
        $ingrediente->setNome($nome);
        $ingrediente->setDataValidade($dataValidade);

        return $ingrediente;
    }

    private function validarCamposObrigatorios($nome, $dataValidade): void
    {
        if (empty($nome) || 
            empty($dataValidade)) {
            throw new Exception("Está faltando os parametros obrigatórios do Ingrediente");
        }
    }
}
?>