package atividadeparimparvetor;
import java.util.Scanner;
public class AtividadeParImparVetor {
    public static void main(String[] args) {
        
        Scanner teclado;
        teclado = new Scanner(System.in);
        
        int qtd;
        int par=0;
        int impar=0;
        
        System.out.println("Digite o número de elementos do Vetor: ");
        qtd = teclado.nextInt();
        
        int [] numeros = new int [qtd];
        
        for(int cont=0; cont<numeros.length; cont++){
            System.out.println("Digite o número do " +cont + "º elemento:");
            numeros [cont] = teclado.nextInt();
            
            if (numeros[cont] %2==0){
                par++;
            }
            else{
                impar++;
            }
    }
        int [] pares = new int[par];
        int [] impares = new int [impar];
        
        par=0;
        impar=0;
        
        for(int i=0; i<numeros.length; i++){
            if(numeros[i] %2==0){
                pares[par] = numeros[i];
                ++par;
            }
            else{
                impares[impar] = numeros[i];
                ++impar;
            }
        }
        for(int i=0; i<pares.length; i++){
            System.out.println("Par ["+i+"] = "+pares[i]);
        }
        for(int i=0; i<impares.length; i++){
        System.out.println("Impar ["+i+"] = "+impares[i]);
    }
}
}