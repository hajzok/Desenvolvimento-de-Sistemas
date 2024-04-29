programa
{
	
	funcao inicio()
	{
		cadeia produto
		inteiro qtd
		real preco, resultado, total, desc
		escreva ("Informe o nome do produto adquirido: " )
		leia (produto)
		escreva ("Agora, informe a quantidade do produto que foi adquirido: " )
		leia (qtd)
		escreva ("E por fim, informe o preço pago por cada produto adquirido: " )
		leia (preco)
		//total = qtd*preco
		se (qtd<=5)
		{
			desc=(preco*0.02)*qtd
			resultado = (preco*qtd)-desc
			escreva ("O total da compra é: R$" ,resultado )
		}
		se (qtd>5 e qtd<=10)
		{
			desc=(preco*0.03)*qtd
			resultado = (preco*qtd)-desc
			escreva ("O total da compra é: R$" ,resultado )
		}
		se (qtd>10)
		{
			desc=(preco*0.05)*qtd
			resultado = (preco*qtd)-desc
			escreva ("O total da compra é: R$" ,resultado )
			
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 778; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */