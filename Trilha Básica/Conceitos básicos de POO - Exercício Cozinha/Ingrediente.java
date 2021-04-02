import java.time.LocalDate;

public class Ingrediente{

   private String nome;
   private LocalDate dataValidade;

   public Ingrediente(String nome, LocalDate dataValidade){
        this.nome = nome;
        this.dataValidade = dataValidade;
   }

   public void setNome(String nome){
        this.nome = nome;
   }
   public String getNome(){
        return this.nome;
   }
   public void setDataValidade(LocalDate dataValidade){
        this.dataValidade = dataValidade;
   }
   public LocalDate getDataValidade(){
        return this.dataValidade;
   }

   public String toString(){
        return "Ingrediente: " + this.nome + " - Validade: " + this.dataValidade; 
   }
}
