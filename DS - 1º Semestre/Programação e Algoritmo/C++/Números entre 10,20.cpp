#include<stdio.h>
#include<locale.h>
int main ()
{
	int i,num[10], faz_parte, n_faz;
	setlocale(LC_ALL,"Portuguese");
faz_parte=0;
n_faz=0;

	printf("\n Digite os números para verificar \n");
	
	for (i=0; i<10; i++)
	{
		scanf("%d",&num[i]);
	}
	for (i=0; i<10; i++)
	{
		if (num[i]>=10 && num[i]<=20)
		{
			faz_parte=faz_parte+1;
		}
		else
		n_faz=n_faz+1;
	}
	
	printf("\n %d números fazem parte do intervalo [10,20]", faz_parte);
	printf("\n %d números não fazem parte do intervalo [10,20]",n_faz);
	
return 0;
}
