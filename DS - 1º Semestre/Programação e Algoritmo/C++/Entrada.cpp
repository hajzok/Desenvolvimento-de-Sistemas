#include<stdio.h>
#include<locale.h>
int main ()
{
	int contador, num;
	setlocale(LC_ALL,"Portuguese");
contador=1;

	while (contador<=7)
	{
		printf(" Digite o %d� n�mero de entrada: ",contador);
		scanf("%d",&num);
		
		
		if (num>12 && num<20)
		{
			printf("\n Entrada concedida!");
			break;
		}
	
		else
	 printf("\n Entrada inv�lida. \n");
	 contador++;
	}
return 0;
}
