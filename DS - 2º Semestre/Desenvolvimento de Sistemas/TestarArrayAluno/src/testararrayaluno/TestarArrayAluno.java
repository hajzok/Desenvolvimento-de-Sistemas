package testararrayaluno;
import java.util.Scanner;
public class TestarArrayAluno {
    public static void main(String[] args) {
        Aluno [] turma = new Aluno[5];
        Scanner sc = new Scanner(System.in);
        
        for (int i=0; i<turma.length; i++){
        
        turma[i] = new Aluno();
        System.out.println("\n *** Digite o nome do aluno: *** ");
        turma[i].setNome(sc.next());
        System.out.println("Digite a 1º nota: ");
        turma[i].setNota1(sc.nextDouble());
        System.out.println("Digite a 2º nota: ");
        turma[i].setNota2(sc.nextDouble()); 
        
        System.out.println("Nome do Aluno: " + turma[i].getNome());
        System.out.println("A média é: " + turma[i].Aluno());
    }
   }
    
}
