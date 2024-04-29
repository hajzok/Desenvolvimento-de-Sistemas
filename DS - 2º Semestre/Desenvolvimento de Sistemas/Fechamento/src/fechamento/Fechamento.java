package fechamento;
import java.util.Scanner;
public class Fechamento {
    public static void main(String[] args) {
        
        double media = 0;
        double soma = 0;
        Scanner teclado;
        teclado = new Scanner(System.in);
        Requisicao [] itens = new Requisicao [5];
        
        for (int i=0; i<itens.length; i++){
            itens[i] = new Requisicao();
            
            System.out.println("Entre com o código: ");
            itens[i].setCodigo(teclado.nextInt());
            System.out.println("Entre com o código: ");
            itens[i].setNome(teclado.next());
            System.out.println("Entre com o código: ");
            itens[i].setValor(teclado.nextDouble());
            
            soma = soma + itens[i].setValor();
            media = soma/5;
            
        }
    }
}