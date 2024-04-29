package novoprograma;
import java.util.Scanner;
public class NovoPrograma {
    public static void main(String[] args) {
        
        String seuNome;
        Scanner teclado = new Scanner(System.in);
        System.out.println("Digite seu nome: ");
        seuNome = teclado.nextLine();
        System.out.println("Olá, " + seuNome + ".");
    }
    
}
