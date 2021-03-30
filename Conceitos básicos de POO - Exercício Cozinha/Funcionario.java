public class Funcionario {

    private String nome;
    private String atividade;

    public Funcionario(String nome, String atividade){
        this.nome = nome;
        this.atividade = atividade;
    }

    public void setNome(String nome){
        this.nome = nome;
    }
    public String getNome(){
        return this.nome;
    }
    public void setAtividade(String atividade){
        this.atividade = atividade;
    }
    public String getAtividade(){
        return this.atividade;
    }

    public String toString(){
        return "Funcionário: " + this.nome + " - Atividade: " + this.atividade; 
    }

}
