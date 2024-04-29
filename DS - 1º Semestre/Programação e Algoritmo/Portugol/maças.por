programa
{
	
	funcao inicio()
	{
		real maca,resultado
		escreva ("Digite a quantidade de maças compradas " )
		leia (maca)
		se (maca<12)
		{
			resultado = maca*1.30
			escreva("Valor da compra: " ,resultado )
		}
		se (maca>=12)
		{
			resultado = maca*1.00
			escreva("Valor da compra: " ,resultado )
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 233; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */