#include<stdio.h>
#include<locale.h>
int main ()
{
	int numero, cont, par=0;
	setlocale(LC_ALL,"Portuguese");
	
	for (cont=1; cont<=10; cont++)
	{
		printf("Digite o n�mero %d: ",cont);
		scanf("%d",&numero);
	
	if (numero % 2==0)
	{
		par=par+1;
	}
	}
	
	printf("\nQuantidade de n�meros Pares: %d\n",par);
	printf("Quantidade de n�meros Impares: %d", 10-par);
	printf("\n");

return 0;
}
