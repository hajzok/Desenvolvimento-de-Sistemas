package testararrayaluno;
import java.util.Scanner;
public class TestarArrayAluno {
    public static void main(String[] args) {
        Aluno [] turma = new Aluno[5];
        Scanner sc = new Scanner(System.in);
        
        turma[0] = new Aluno();
        System.out.println("Digite o nome do aluno: ");
        turma[0].setNome(sc.next());
        System.out.println("Digite a 1º nota: ");
        turma[0].setNota1(sc.nextDouble());
        System.out.println("Digite a 2º nota: ");
        turma[0].setNota2(sc.nextDouble());
        
        turma[1] = new Aluno();
        System.out.println("Digite o nome do aluno: ");
        turma[1].setNome(sc.next());
        System.out.println("Digite a 1º nota: ");
        turma[1].setNota1(sc.nextDouble());
        System.out.println("Digite a 2º nota: ");
        turma[1].setNota2(sc.nextDouble());
        
        turma[2] = new Aluno();
        System.out.println("Digite o nome do aluno: ");
        turma[2].setNome(sc.next());
        System.out.println("Digite a 1º nota: ");
        turma[2].setNota1(sc.nextDouble());
        System.out.println("Digite a 2º nota: ");
        turma[2].setNota2(sc.nextDouble());
        
        turma[3] = new Aluno();
        System.out.println("Digite o nome do aluno: ");
        turma[3].setNome(sc.next());
        System.out.println("Digite a 1º nota: ");
        turma[3].setNota1(sc.nextDouble());
        System.out.println("Digite a 2º nota: ");
        turma[3].setNota2(sc.nextDouble());
        
        turma[4] = new Aluno();
        System.out.println("Digite o nome do aluno: ");
        turma[4].setNome(sc.next());
        System.out.println("Digite a 1º nota: ");
        turma[4].setNota1(sc.nextDouble());
        System.out.println("Digite a 2º nota: ");
        turma[4].setNota2(sc.nextDouble());
        
        
    }
    
}
