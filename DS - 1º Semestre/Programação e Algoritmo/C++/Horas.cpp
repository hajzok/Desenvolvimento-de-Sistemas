#include<stdio.h>
int main ()
{
	float hora, minuto;
	
	printf ("Digite a hora (formato 24): ");
	scanf("%f",&hora);
	
	printf ("Horario digitado: %.1f ",hora);
	
	minuto=(hora*60);
	
	printf("\nSe passaram %.0f minutos", minuto);
	
	
return 0;
}
