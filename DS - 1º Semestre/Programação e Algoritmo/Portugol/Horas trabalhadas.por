programa
{
	
	funcao inicio()
	{
		real horas, sh, st, he, sal, salt
		escreva ("Digite a quantidade de horas trabalhadas no mês: " )
		leia (horas)
		escreva ("Digite o salário por hora: " )
		leia (sh)
		escreva ("Digite a quantidade de horas extras trabalhadas: " )
		leia (he)
		sal=horas*sh
		se (he>0)
		{
			he = (he*sh)*1.5
			sal = (he+sal)
			escreva ("Seu salário será de: R$ " , sal )
		}
		senao
		{
			
			escreva ("Seu salário será de: R$ " , sal )
		}
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 73; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */