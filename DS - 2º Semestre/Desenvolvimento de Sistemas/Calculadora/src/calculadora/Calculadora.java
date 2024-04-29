package calculadora;
import java.util.Scanner;
public class Calculadora {
    public static void main(String[] args) {
        
         Calculo conta01;
         conta01 = new Calculo();
         
         Calculo conta02;
         conta02 = new Calculo();
         
         Scanner teclado;
         teclado = new Scanner (System.in);
         
         System.out.println("/////// Entre com os dados da conta 01 ///////");
         System.out.println("Entre com o primeiro número: ");
         conta01.setNumero1(teclado.nextDouble());
         System.out.println("Entre com o segundo número: ");
         conta01.setNumero2(teclado.nextDouble());
         System.out.println("Entre com o operador: (Ex.: +, -, /, *)");
         conta01.setOperador(teclado.next());
         
         System.out.println("O valor é: " + conta01.resultado());
         
         System.out.println("\n/////// Entre com os dados da conta 02 ///////");
         System.out.println("Entre com o primeiro número: ");
         conta02.setNumero1(teclado.nextDouble());
         System.out.println("Entre com o segundo número: ");
         conta02.setNumero2(teclado.nextDouble());
         System.out.println("Entre com o operador: (Ex.: +, -, /, *)");
         conta02.setOperador(teclado.next());
         
         System.out.println("O valor é: " + conta02.resultado());
    }
    
}
