import java.time.LocalTime;
import java.util.List;

public class Cozinha{

   private List<Ingrediente> ingredientes;
   private List<Funcionario> funcionarios;
   private int numeroPratos;
   private String tipo;
   private int numeroCozinheiros;
   private int tempoPreparo;

   private LocalTime horaAbertura;
   private LocalTime horaFechamento;
   private String pratoPrincipal;

   public void setNumeroPratos(int numeroPratos){
     this.numeroPratos = numeroPratos;
   }
   public int getNumeroPratos(){
     return this.numeroPratos;
   }
   public void setTipo(String tipo){
     this.tipo = tipo;
   }
   public String getTipo(){
     return this.tipo;
   }
   public void setNumeroCozinheiros(int numeroCozinheiros){
     this.numeroCozinheiros = numeroCozinheiros;
   }
   public int getNumeroCozinheiros(){
     return this.numeroCozinheiros;
   }
   public void setTempoPreparo(int tempoPreparo){
     this.tempoPreparo = tempoPreparo;
   }
   public int getTempoPreparo(){
     return this.tempoPreparo;
   }
   public void setHoraAbertura(LocalTime horaAbertura){
       this.horaAbertura = horaAbertura;
   }
   public LocalTime getHoraAbertura(){
       return this.horaAbertura;
   }
   public void setHoraFechamento(LocalTime horaFechamento){
       this.horaFechamento = horaFechamento;
   }
   public LocalTime getHoraFechamento(){
       return this.horaFechamento;
   }
   public void setPratoPrincipal(String pratoPrincipal){
     this.pratoPrincipal = pratoPrincipal;
   }
   public String getPratoPrincipal(){
     return this.pratoPrincipal;
   }
   public void setIngredientes(List<Ingrediente> ingredientes) {
       this.ingredientes = ingredientes;
   }
   public List<Ingrediente> getIngredientes(){
       return this.ingredientes;
   }
   public void setFuncionarios(List<Funcionario> funcionarios) {
       this.funcionarios = funcionarios;
   }
   public List<Funcionario> getFuncionarios(){
       return this.funcionarios;
   }

   void prepararPratos(){
     // O que eu preciso fazer para prepara um prato?
   }
 
   void lavarLouca(){
 
   }

}
