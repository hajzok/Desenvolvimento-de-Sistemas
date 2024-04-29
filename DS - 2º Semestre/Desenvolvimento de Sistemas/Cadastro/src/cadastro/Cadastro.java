package cadastro;
import java.util.Scanner;
public class Cadastro {
    public static void main(String[] args) {
        
        Pessoa registro1;
        registro1 = new Pessoa();
        Pessoa registro2;
        registro2 = new Pessoa();
        Pessoa registro3;
        registro3 = new Pessoa();
        Scanner teclado;
        teclado = new Scanner(System.in);
        
        System.out.println("Digite o nome: ");
        registro1.setNome(teclado.next());
        System.out.println("Digite a idade: ");
        registro1.setIdade(teclado.nextInt());
        System.out.println("Digite o código: ");
        registro1.setCodigo(teclado.nextInt());
        
        System.out.println("Digite o nome: ");
        registro2.setNome(teclado.next());
        System.out.println("Digite a idade: ");
        registro2.setIdade(teclado.nextInt());
        System.out.println("Digite o código: ");
        registro2.setCodigo(teclado.nextInt());
        
        System.out.println("Digite o nome: ");
        registro3.setNome(teclado.next());
        System.out.println("Digite a idade: ");
        registro3.setIdade(teclado.nextInt());
        System.out.println("Digite o código: ");
        registro3.setCodigo(teclado.nextInt());
        
        if (registro1.getIdade() > registro1.getIdade() && registro1.getIdade() > registro3.getIdade()){
            System.out.println("A pessoa mais velha é: "+registro1.getNome());
            System.out.println("Idade: "+registro1.getIdade());
        }

        else if (registro2.getIdade() > registro1.getIdade() && registro2.getIdade() > registro3.getIdade()){
            System.out.println("A pessoa mais velha é: "+registro2.getNome());
            System.out.println("Idade: "+registro2.getIdade());
        }

        else if (registro3.getIdade() > registro1.getIdade() && registro3.getIdade() > registro2.getIdade()) {
            System.out.println("A pessoa mais velha é: "+registro3.getNome());
            System.out.println("Idade: "+registro3.getIdade());
    }
    
}
}