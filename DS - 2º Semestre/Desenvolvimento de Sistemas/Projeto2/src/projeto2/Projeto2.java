package projeto2;
public class Projeto2 {
    public static void main(String[] args) {
        
        Produto p;
        p = new Produto();
        
        p.setId(100);
        p.setNome("Celular");
        p.setDesc("Eletrônico");
        
        System.out.println("O código do produto é: "+p.getId());
        System.out.println("O nome do produto é: "+p.getNome());
        System.out.println("A descrição do produto é: "+p.getDesc());
    }
    
}
