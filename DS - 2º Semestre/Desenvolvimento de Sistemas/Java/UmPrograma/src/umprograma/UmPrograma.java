package umprograma;
import java.util.Scanner;
public class UmPrograma {
    public static void main(String[] args) {
        int valor;
        Scanner teclado;
        teclado = new Scanner(System.in);
        System.out.println("Digite um número inteiro: ");
        valor = teclado.nextInt();
        System.out.println("Valor lido: " + valor);
    }
    
}
