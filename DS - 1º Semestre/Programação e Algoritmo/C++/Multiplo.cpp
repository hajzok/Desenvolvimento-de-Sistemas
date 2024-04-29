#include<stdio.h>
#include<locale.h>

int main()
{
	int num;
	
	printf("Informe o numero inteiro para saber se ele e multiplo de 5: ");
	scanf("%d",&num);
	
	if (num % 5==0)
	{
		printf("O numero %d e multiplo de 5.",num);
	}
	else
	
	printf("\n O numero %d nao e multiplo de 5");
		
return 0;
}
