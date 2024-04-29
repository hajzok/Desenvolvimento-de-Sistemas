#include<stdio.h>
#include<locale.h>
int main ()
{
	int numero, cont, par=0;
	setlocale(LC_ALL,"Portuguese");
	
	for (cont=1; cont<=10; cont++)
	{
		printf("Digite o número %d: ",cont);
		scanf("%d",&numero);
	
	if (numero % 2==0)
	{
		par=par+1;
	}
	}
	
	printf("\nQuantidade de números Pares: %d\n",par);
	printf("Quantidade de números Impares: %d", 10-par);
	printf("\n");

return 0;
}
