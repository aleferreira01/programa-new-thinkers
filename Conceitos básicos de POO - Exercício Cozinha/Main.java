import java.time.LocalTime;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

class Main {
  public static void main(String[] args) {
    
    Cozinha cozMin = new Cozinha();
    /*cozMin.tipo = "Mineira";
    cozMin.numeroPratos = 10;
    cozMin.tempoPreparo = 30;
    cozMin.numeroCozinheiros = 5;*/

    cozMin.setTipo("Mineira");
    cozMin.setNumeroPratos(10);
    cozMin.setTempoPreparo(30);
    cozMin.setNumeroCozinheiros(5);
    
    //A Cozinha Mineira irá abrir as 14 horas e fechar as 20 horas, sendo que seu prato principal é Feijoada.    
    cozMin.setHoraAbertura(LocalTime.of(14,00));
    cozMin.setHoraFechamento(LocalTime.of(20,00));
    cozMin.setPratoPrincipal("Feijoada");

    //A Cozinha Mineira possui 5 Ingredientes. (Feijão, Farinha, Arroz, Carne de Porco, Linguiça), fiquem a vontade para definir a data de validade de cada um.
    List<Ingrediente> ingredientesCozMin = new ArrayList<Ingrediente>();
    ingredientesCozMin.add(new Ingrediente("Feijão", LocalDate.of(2021,5,25)));
    ingredientesCozMin.add(new Ingrediente("Farinha", LocalDate.of(2021,6,25)));
    ingredientesCozMin.add(new Ingrediente("Arroz", LocalDate.of(2021,7,25)));
    ingredientesCozMin.add(new Ingrediente("Carne de Porco", LocalDate.of(2021,8,25)));
    ingredientesCozMin.add(new Ingrediente("Linguiça", LocalDate.of(2021,9,25)));
    cozMin.setIngredientes(ingredientesCozMin);

    //A Cozinha Mineira possui 4 funcionários.
    List<Funcionario> funcionariosCozMin = new ArrayList<Funcionario>();
    funcionariosCozMin.add(new Funcionario("Marcos","Cozinheiro"));
    funcionariosCozMin.add(new Funcionario("Maria","Ajudante"));
    funcionariosCozMin.add(new Funcionario("João","Sub-chefe"));
    funcionariosCozMin.add(new Funcionario("José","Limpeza"));
    cozMin.setFuncionarios(funcionariosCozMin);

    //-----------------Cozinha Chinesa-------------------

    Cozinha cozChi = new Cozinha();
    cozChi.setTipo("Chinesa");

    // A Cozinha Chinesa irá abrir as 10 horas e fechar as 21 horas, sendo que seu prato principal é Yakissoba
    cozChi.setHoraAbertura(LocalTime.of(10,00));
    cozChi.setHoraFechamento(LocalTime.of(21,00));
    cozChi.setPratoPrincipal("Yakissoba");

    // A Cozinha Chinesa possui 4 Ingredientes. (Champignon, Brócolis, Macarrão , Carne ), fiquem a vontade para definir a data de validade de cada um.
    List<Ingrediente> ingredientesCozChi = new ArrayList<Ingrediente>();
    ingredientesCozChi.add(new Ingrediente("Champignon", LocalDate.of(2021,5,25)));
    ingredientesCozChi.add(new Ingrediente("Brócolis", LocalDate.of(2021,6,25)));
    ingredientesCozChi.add(new Ingrediente("Macarrão", LocalDate.of(2021,7,25)));
    ingredientesCozChi.add(new Ingrediente("Carne", LocalDate.of(2021,8,25)));
    cozChi.setIngredientes(ingredientesCozChi);

    //A Cozinha Chinesa possui 3 funcionários.
    List<Funcionario> funcionariosCozChi = new ArrayList<Funcionario>();
    funcionariosCozChi.add(new Funcionario("Gabriela","Cozinheiro"));
    funcionariosCozChi.add(new Funcionario("Larissa","Ajudante"));
    funcionariosCozChi.add(new Funcionario("Roberta","Sub-chefe"));
    cozChi.setFuncionarios(funcionariosCozChi);

    //-----------------Cozinha Italiana-------------------

    Cozinha cozIta = new Cozinha();
    cozIta.setTipo("Italiana");

    //A Cozinha Italiana irá abrir as 13 horas e fechar as 22 horas, sendo que seu prato principal é Risoto.
    cozIta.setHoraAbertura(LocalTime.of(13,00));
    cozIta.setHoraFechamento(LocalTime.of(22,00));
    cozIta.setPratoPrincipal("Risoto");

    // A Cozinha Italiana possui 3 Ingredientes. (Molho, Macarrão , Carne ), fiquem a vontade para definir a data de validade de cada um.
    List<Ingrediente> ingredientesCozIta = new ArrayList<Ingrediente>();
    ingredientesCozIta.add(new Ingrediente("Molho", LocalDate.of(2021,5,25)));
    ingredientesCozIta.add(new Ingrediente("Macarrão", LocalDate.of(2021,6,25)));
    ingredientesCozIta.add(new Ingrediente("Carne", LocalDate.of(2021,7,25)));
    cozIta.setIngredientes(ingredientesCozIta);

    //A Cozinha Italiana possui 2 funcionários.
    List<Funcionario> funcionariosCozIta = new ArrayList<Funcionario>();
    funcionariosCozIta.add(new Funcionario("Eduardo","Cozinheiro"));
    funcionariosCozIta.add(new Funcionario("Manuela","Ajudante"));
    cozIta.setFuncionarios(funcionariosCozIta);

    // Saída

    System.out.println(cozMin.getTipo());
    System.out.println(cozMin.getNumeroPratos());
    System.out.println(cozMin.getTempoPreparo());
    System.out.println(cozMin.getNumeroCozinheiros());

    System.out.println("--------Cozinha Mineira-----------");
    System.out.println("Hora de abertura: " + cozMin.getHoraAbertura());
    System.out.println("Hora de fechamento " + cozMin.getHoraFechamento());
    System.out.println("Prato principal: " + cozMin.getPratoPrincipal());
    System.out.println("Ingredientes: ");
    System.out.println(cozMin.getIngredientes().toString());
    System.out.println("Funcionários: ");
    System.out.println(cozMin.getFuncionarios().toString());

    System.out.println();

    System.out.println("--------Cozinha Chinesa-----------");
    System.out.println("Hora de abertura: " + cozChi.getHoraAbertura());
    System.out.println("Hora de fechamento " + cozChi.getHoraFechamento());
    System.out.println("Prato principal: " + cozChi.getPratoPrincipal());
    System.out.println("Ingredientes: ");
    System.out.println(cozChi.getIngredientes().toString());
    System.out.println("Funcionários: ");
    System.out.println(cozChi.getFuncionarios().toString());
    
    System.out.println();

    System.out.println("--------Cozinha Italiana-----------");
    System.out.println("Hora de abertura: " + cozIta.getHoraAbertura());
    System.out.println("Hora de fechamento " + cozIta.getHoraFechamento());
    System.out.println("Prato principal: " + cozIta.getPratoPrincipal());
    System.out.println("Ingredientes: ");
    System.out.println(cozIta.getIngredientes().toString());
    System.out.println("Funcionários: ");
    System.out.println(cozIta.getFuncionarios().toString());

  }
}