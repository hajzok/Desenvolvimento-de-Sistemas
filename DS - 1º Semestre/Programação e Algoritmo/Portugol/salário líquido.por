programa
{
	
	funcao inicio()
	{
		real sal, sall
		escreva ("Digite o valor do salário bruto: " )
		leia (sal)
		se (sal<2000)
		{
			sall=sal*0.1
			escreva ("O salário líquido é: " , sall )
		}
		se (sal>=2000)
		{
			sall=sal*0.2
			escreva ("O salário líquido é: " , sall )
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 278; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */