package caixa;
import java.util.Scanner;
public class Caixa {
    public static void main(String[] args) {
        
        int i = 0, c1 = 0;
        String n1 = null;
        double v1 = 0,soma = 0, media = 0, s = 0;
        Scanner teclado;
        teclado = new Scanner(System.in);
        
        for(i = 0; i < 4; i++){
            System.out.println("Digite o código: ");
            c1 = teclado.nextInt();
            System.out.println("Digite o nome: ");
            n1 = teclado.next();
            System.out.println("Digite o valor: ");
            v1 = teclado.nextDouble();
            
            Despesa d1;
            d1 = new Despesa(c1,n1,v1);
            soma = d1.getValor() + d1.getValor() + d1.getValor() + d1.getValor();
            media = soma / 4;
        }
        
        System.out.println("A soma dos valores é: " + soma);
        System.out.println("A média dos valores é: " + media);
         
    }
    
}
