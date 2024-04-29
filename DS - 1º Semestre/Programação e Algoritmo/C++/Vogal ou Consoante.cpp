#include<stdio.h>
#include<locale.h>
int main ()
{
	char letra;
	
	printf("Informe a letra: ");
	scanf("%c",&letra);
	
	if (letra== 'a' && 'A' && 'e' && 'E' && 'i' && 'I' && 'o' && 'O' && 'u' && 'U')
	{
		printf("A letra e uma vogal.");
	}
	else
	{
		printf("A letra e uma consoante.");
	}
return 0;
}
