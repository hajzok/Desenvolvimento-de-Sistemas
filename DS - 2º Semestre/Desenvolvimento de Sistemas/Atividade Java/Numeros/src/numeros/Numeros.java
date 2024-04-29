package numeros;
import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        int leituras = 0, cont, numero, maior, menor;

        Scanner teclado;
        teclado = new Scanner(System.in);

        System.out.println("Digite a quantidade de leituras: ");
        leituras = teclado.nextInt();

        System.out.println("Digite o número: ");
        numero = teclado.nextInt();

        maior = numero;
        menor = numero;

        for (cont = 1; cont < leituras; cont++) {
            System.out.println("Digite o número: ");
            numero = teclado.nextInt();

            if (numero > maior) {
                maior = numero;
            }

            if (numero < menor) {
                menor = numero;
            }
        }

        System.out.println("O maior número é o: " + maior + "\nE o menor é o: " + menor);
    }
}
