#include<stdio.h>
#include<locale.h>

int main()
{
	char nome[30];
	
	printf("Digite seu nome: ");
	fgets (nome, sizeof(nome), stdin);
	printf ("Seja bem-vindo: ");
	puts(nome);
	
return 0;
}
