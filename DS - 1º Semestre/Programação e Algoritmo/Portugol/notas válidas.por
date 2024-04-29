programa
{
	
	funcao inicio()
	{
		real nota, media, somaNotas=0.0
		inteiro contador
		para (contador=1; contador<=5; contador+=1)
		{
			
			escreva ("Digite a nota do aluno: " )
			leia (nota)
			somaNotas = somaNotas+nota
			enquanto (nota<=0 ou nota>10)
			{
				escreva ("Nota inválida. Digite a nota novamente: " )
				leia (nota)
			}
		}
		media=somaNotas/5
		escreva ("A média é: " ,media )
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 371; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */