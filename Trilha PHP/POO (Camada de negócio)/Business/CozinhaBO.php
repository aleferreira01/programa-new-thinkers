<?php
require_once "Model/Cozinha.php";

class CozinhaBO
{

    private Cozinha $cozinha;

    public function __contruct()
    {}

    public function criar($nome, $horarioAbertura, $horarioFechamento, 
        $pratoPrincial, $numeroPratos)
    {
        $this->validarCamposObrigatorios($nome, $horarioAbertura, $horarioFechamento, 
            $pratoPrincial, $numeroPratos);

        $this->cozinha = new Cozinha();
        $this->cozinha->setNome($nome);
        $this->cozinha->setHorarioAbertura($horarioAbertura);
        $this->cozinha->setHorarioFechamento($horarioFechamento);
        $this->cozinha->setPratoPrincipal($pratoPrincial);
        $this->cozinha->setNumerosPratos($numeroPratos);

        return $this->cozinha;
    }

    private function validarCamposObrigatorios($nome, $horarioAbertura, $horarioFechamento, 
        $pratoPrincial, $numeroPratos): void
    {
        if (empty($nome) || 
            empty($horarioAbertura) || 
            empty($horarioFechamento) || 
            empty($pratoPrincial) || 
            empty($numeroPratos)) {
            throw new Exception("Está faltando os parametros obrigatórios da Cozinha");
        }
    }

    public function exibirCozinha(Cozinha $cozinha)
    {
        if (count($cozinha->getListaIngredientes()) > 0 && 
            count($cozinha->getListaFuncionarios()) > 0) {

            $cozinha->exibirCozinha();
        } else {
            echo "Não foi possível exibir os dados referentes à Cozinha. " . 
            "\nFuncionário ou ingrediente não adicionado.";
        }
    }

    public function adicionarIngrediente(Ingrediente $ingrediente)
    {
        $this->cozinha->setListaIngredientes($ingrediente);
    }

    public function adicionarFuncionario(Funcionario $funcionario)
    {
        $this->cozinha->setListaFuncionarios($funcionario);
    }
}
?>