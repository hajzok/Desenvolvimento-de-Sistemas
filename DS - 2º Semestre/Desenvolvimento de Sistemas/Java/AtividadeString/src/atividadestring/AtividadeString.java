package atividadestring;
import java.util.Scanner;
public class AtividadeString {
    public static void main(String[] args) {
        
        int num1,num2,num3, soma;
        
        Scanner teclado;
        teclado = new Scanner(System.in);
        System.out.println("Digite um número inteiro: ");
        num1 = teclado.nextInt();
        
        System.out.println("Digite um número inteiro: ");
        num2 = teclado.nextInt();
        
        System.out.println("Digite um número inteiro: ");
        num3 = teclado.nextInt();
        
        soma = (num1+num2+num3);
        
        if (num1>num2) {
            System.out.println("O maior número é: " + num1);
        }
        
        else if (num2>num3) {
            System.out.println("O maior número é: " + num2);
        }
        
        else if (num3>num2) {
            System.out.println("O maior número é: " + num3);
        }
        
        System.out.println("A soma dos números é: " + soma);
        
        if ((soma%2) == 0) {
            System.out.println("O número é par.");
        }
        
        else {
            System.out.println("O número é ímpar.");
    }
    }
    
}
