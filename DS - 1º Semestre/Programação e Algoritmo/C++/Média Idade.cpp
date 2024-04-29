#include<stdio.h>
#include<locale.h>
int main ()
{
	float media;
	int cont, idade, qtd,soma=0;
	
	printf("Digite a quantidade de idades para fazer a media: ");
	scanf("%d",&qtd);
	
	for (cont=1; cont<=qtd; cont++)
	{
		printf("Digite a idade %d : ",cont);
		scanf("%d",&idade);
		soma = (idade+soma);
	}
	
	media = soma/qtd;
	printf("\n A media das idades e de: %.1f", media);
	
return 0;
}
