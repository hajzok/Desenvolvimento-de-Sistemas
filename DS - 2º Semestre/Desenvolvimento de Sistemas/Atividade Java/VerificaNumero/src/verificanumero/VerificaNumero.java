package verificanumero;
import java.util.Scanner;
public class VerificaNumero {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
 
        int dado;
 
        do {
            System.out.print("Digite um número (0 para sair): ");
            dado = scanner.nextInt();
 
            if (dado != 0) {
                System.out.println("Número digitado: " + dado);
                verificarParImpar(dado);
                verificarPrimo(dado);
            }
        } while (dado != 0);
 
        System.out.println("Programa encerrado.");
    }
 
    private static void verificarParImpar(int numero) {
        if (numero % 2 == 0) {
            System.out.println("O número é par.");
        } else {
            System.out.println("O número é ímpar.");
        }
    }
 
    private static void verificarPrimo(int numero) {
        boolean primo = true;
 
        if (numero < 2) {
            primo = false;
        } else {
            for (int i = 2; i <= numero / 2; i++) {
                if (numero % i == 0) {
                    primo = false;
                    break;
                }
            }
        }
 
        if (primo) {
            System.out.println("O número é primo.");
        } else {
            System.out.println("O número não é primo.");
        }
    }
}