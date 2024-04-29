programa
{
	
	funcao inicio()
	{
		inteiro atual, maxima, minima, media
		escreva ("Digite a quantidade atual do estoque: " )
		leia (atual)
		escreva ("Digite a quantidade máxima do estoque: " )
		leia (maxima)
		escreva ("Digite a quantidade mínima do estoque: " )
		leia (minima)
		media = (maxima+minima)/2
		se (atual >= media)
		{
			escreva("Não efetuar a compra!" )
		}
		senao
		{
			escreva ("Efetuar a compra!" )
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 370; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */