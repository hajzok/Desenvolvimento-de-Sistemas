package testavaloresinteiros;
import java.util.Scanner;
public class TestaValoresInteiros {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] pins = {9,3,7,2};
        
        System.out.println("Digite o número que deseja buscar: ");
        int procurar = sc.nextInt();
        boolean achou = false;
        for(int i=0; i<pins.length; i++){
            if(pins[i] == procurar){
                achou = true;
                break;
            }
        }
        if (achou){
            System.out.println("O número que você procura está no array!");
        }
        else{
            System.out.println("O número que você procura não está no array");
        }
        
    }
    
}
