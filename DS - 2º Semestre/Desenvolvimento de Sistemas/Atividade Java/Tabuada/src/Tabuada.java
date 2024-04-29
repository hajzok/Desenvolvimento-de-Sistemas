import java.util.Scanner;
public class Tabuada {
    public static void main(String[] args) {
        int resultado, tabuada, cont;
        int acertos = 0;
        int erros = 0;
       Scanner teclado ;
        teclado = new Scanner(System.in);
        
        System.out.print("Digite o número que você quer fazer a tabuada: ");
        tabuada = teclado.nextInt();

        for (cont = 1; cont <= 10; cont++) {
            System.out.print(cont + " X " + tabuada + " = ");
            resultado = teclado.nextInt();

            if (resultado == cont * tabuada) {
                System.out.println("Correto");
                acertos = acertos + 1;
                
            } else {
                System.out.println("Errado");
                erros = erros + 1;
            }
        }

        System.out.println("Número de acertos: " + acertos);
        System.out.println("Número de erros: " + erros);

    }
}