<?php
require_once "Model/Funcionario.php";

class FuncionarioBO
{

    public function __construct()
    {}

    public function criar($nome, $cargo, $salario, $dataContratacao)
    {
        $this->validarCamposObrigatorios($nome, $cargo, $salario, $dataContratacao);

        $funcionario = new Funcionario();
        $funcionario->setNome($nome);
        $funcionario->setCargo($cargo);
        $funcionario->setSalario($salario);
        $funcionario->setDataContratacao($dataContratacao);

        return $funcionario;
    }

    private function validarCamposObrigatorios($nome, $cargo, $salario, $dataContratacao): void
    {
        if (empty($nome) || 
            empty($cargo) || 
            empty($salario) || 
            empty($dataContratacao)) {
            throw new Exception("Está faltando os parametros obrigatórios do Funcionário");
        }
    }
}
?>