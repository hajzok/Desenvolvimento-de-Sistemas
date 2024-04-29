package javaapplication1;
import javax.swing.JOptionPane;
public class JavaApplication1 {
    public static void main(String[] args) {
        String texto;
        
        texto = JOptionPane.showInputDialog("Digite um texto: ");
        
        JOptionPane.showMessageDialog(null, "Você digitou " + texto);
    }
    
}
