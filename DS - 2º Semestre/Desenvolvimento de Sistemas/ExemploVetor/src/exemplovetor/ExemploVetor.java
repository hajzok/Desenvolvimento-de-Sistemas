package exemplovetor;
import java.util.Scanner;
public class ExemploVetor {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int [] vetor = new int[5];
        
        for (int i=0; i<5; i++){
            System.out.println("Digite: ");
            vetor[1] = sc.nextInt();
        }
        
        for (int i=0; i<5; i++){
            System.out.println(vetor[i]);
        }
    }
    
}
