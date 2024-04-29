#include<stdio.h>
#include<locale.h>
int main ()
{
	float soma, notas, media;
	int contador;
soma=0;
contador=1;

	setlocale(LC_ALL,"Portuguese");
	
	while(contador<=3)
	{
		printf("\t Digite a [%d]ª nota: ",contador);
		scanf("%f",&notas);
		soma=soma+notas;
		media=soma/3;
		contador++;
	}
	printf("Média=%.1f", media);

return 0;
}
