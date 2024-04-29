#include<stdio.h>
#include<locale.h>
int main ()
{
	int sala, capacidade, aluno;
	
	printf ("Digite o numero da sala de aula: ");
	scanf("%d",&sala);
	
	printf("Digite o numero da capacidade da sala: ");
	scanf("%d",&capacidade);
	
	printf("Digite o numero de alunos matriculados nessa sala: ");
	scanf("%d",&aluno);
	
	printf("A sala de numero %.1d, tem a capacidade de %.1d alunos e tem %.1d alunos nela", sala, capacidade, aluno);
	
	if (aluno>=capacidade)
	{
		printf("\nA sala esta lotada");
	}
	else
	{
		printf("\nA sala nao esta lotada");
	}
return 0;
}
