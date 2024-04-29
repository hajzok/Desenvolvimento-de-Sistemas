package javaapplication3;
import javax.swing.JOptionPane;
public class JavaApplication3 {
    public static void main(String[] args) {
        int segredo, numero, tentativas = 0;
        
        segredo = Integer.parseInt(JOptionPane.showInputDialog ("Digite o segredo: "));
        
        do {
            
            numero = Integer.parseInt(JOptionPane.showInputDialog("Digite um número: "));
             
            tentativas = tentativas + 1;
        }   while (numero != segredo);
        
            JOptionPane.showMessageDialog (null,"O número de tentativas foi de: " + tentativas);
    }
    
}