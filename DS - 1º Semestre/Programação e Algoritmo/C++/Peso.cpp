#include<stdio.h>
#include<locale.h>
int main ()
{
	float peso;
	
	printf ("Informe o seu imc: ");
	scanf("%f",&peso);
	
	if (peso<18.5)
	{
		printf("Voce esta abaixo do peso.");
	}
	else if (peso=18.5 && peso<25)
	{
		printf("Seu peso esta normal.");
	}
	else if (peso=25 && peso<30)
	{
		printf("Voce esta com sobrepeso.");
	}
	else if (peso>=30 && peso<35)
	{
		printf("Voce esta com obesidade grau 1.");
	}
	else if (peso>=35 && peso<40)
	{
		printf("Voce esta com obesidade grau 2.");
	}
	else if (peso>40)
	{
		printf("Voce esta com obesidade grau 3.");
	}
return 0;
}
