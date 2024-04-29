#include<stdio.h>
#include<locale.h>
int main ()
{
	int numero;
	setlocale(LC_ALL,"portuguese");
	
	for (numero=1; numero<=100; numero++)
	{
		if (numero % 2==0)
		{
			printf("\n%.2d", numero);
		}
	}
	
return 0;
}
