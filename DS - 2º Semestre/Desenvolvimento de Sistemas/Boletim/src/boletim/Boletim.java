package boletim;
import java.util.Scanner;
public class Boletim {
    public static void main(String[] args) {
        
        Nota b1;
        b1 = new Nota();
        Nota b2;
        b2 = new Nota();
        Nota b3;
        b3 = new Nota();
        Nota b4;
        b4 = new Nota();
        double res;
        Scanner teclado;
        teclado = new Scanner(System.in);
        
        System.out.println("Digite a nota do 1º bimestre: ");
        b1.setValorNota(teclado.nextDouble());
        
        System.out.println("Digite a nota do 2º bimestre: ");
        b2.setValorNota(teclado.nextDouble());
        
        System.out.println("Digite a nota do 3º bimestre: ");
        b3.setValorNota(teclado.nextDouble());
        
        System.out.println("Digite a nota do 4º bimestre: ");
        b4.setValorNota(teclado.nextDouble());
        
        b1.getValorNota();
        b2.getValorNota();
        b3.getValorNota();
        b4.getValorNota();
        
        res = (b1.getValorNota() + b2.getValorNota() + b3.getValorNota() + b4.getValorNota()) / 4;
        
        System.out.println("A média do aluno é: " + res);
    }
    
}
