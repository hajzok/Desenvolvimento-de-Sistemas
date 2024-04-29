package venda;
import java.util.Scanner;
public class Venda {
    public static void main(String[] args) {
        
        Produto item1;
        item1 = new Produto();
        Produto item2;
        item2 = new Produto();
        Produto item3;
        item3 = new Produto();
        Produto item4;
        item4 = new Produto();
        Produto item5;
        item5 = new Produto();
        double res;
        
        Scanner teclado;
        teclado = new Scanner (System.in);
        
        //item1
        
        System.out.println("Digite a descrição do produto: ");
        item1.setDescicao(teclado.next());
        
        System.out.println("Digite o código do produto: ");
        item1.setNumero(teclado.nextInt());
        
        System.out.println("Digite o preço do produto: ");
        item1.setPreco(teclado.nextDouble());
        
        //item2
        
        System.out.println("Digite a descrição do produto: ");
        item2.setDescicao(teclado.next());
        
        System.out.println("Digite o código do produto: ");
        item2.setNumero(teclado.nextInt());
        
        System.out.println("Digite o preço do produto: ");
        item2.setPreco(teclado.nextDouble());
        
        //item3
        
        System.out.println("Digite a descrição do produto: ");
        item3.setDescicao(teclado.next());
        
        System.out.println("Digite o código do produto: ");
        item3.setNumero(teclado.nextInt());
        
        System.out.println("Digite o preço do produto: ");
        item3.setPreco(teclado.nextDouble());
        
        //item4
        
        System.out.println("Digite a descrição do produto: ");
        item4.setDescicao(teclado.next());
        
        System.out.println("Digite o código do produto: ");
        item4.setNumero(teclado.nextInt());
        
        System.out.println("Digite o preço do produto: ");
        item4.setPreco(teclado.nextDouble());
        
        //item5
        
        System.out.println("Digite a descrição do produto: ");
        item5.setDescicao(teclado.next());
        
        System.out.println("Digite o código do produto: ");
        item5.setNumero(teclado.nextInt());
        
        System.out.println("Digite o preço do produto: ");
        item5.setPreco(teclado.nextDouble());
        
        item1.getPreco();
        item2.getPreco();
        item3.getPreco();
        item4.getPreco();
        item5.getPreco();
        
        res = item1.getPreco() + item2.getPreco() + item3.getPreco() + item4.getPreco() + item5.getPreco();
        
        System.out.println("O valor total da compra foi de: " + res);
    }
    
}
