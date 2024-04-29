package adivinhacao;
import java.util.Scanner;
public class Adivinhacao {
    public static void main(String[] args) {
        int segredo, numero, tentativas = 0;
        Scanner teclado;
        teclado = new Scanner(System.in);
        System.out.println("Digite o segredo: ");
        segredo = teclado.nextInt();
        
        do {
            
            System.out.println("Digite um número: ");
            numero = teclado.nextInt();
            
            if (numero != segredo){
                System.out.println("Tente novamente: ");
            }
            
            else if (numero == segredo){
                System.out.println("Você acertou!");
               
            }
            tentativas = tentativas + 1;
        }   while (numero != segredo);
        
            System.out.println("O número de tentativas foi de: " + tentativas);
    }
    
}
