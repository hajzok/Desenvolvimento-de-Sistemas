#include<stdio.h>
int main()
{

	float salario_min,salario_pessoa,qtd_sal_min;
	
	printf("Informe o valor do sal�rio m�nimo e \n R$ " );
	scanf("%f",&salario_min);
	
	printf("Informe o valor do sal�rio recebido pela pessoa \n R$ " );
	scanf("%f",&salario_pessoa);
	
	printf("Uma pessoa que recebe um sal�rio de R$ %.2f reais recebe %.1f salarios minimos \n ", salario_pessoa,qtd_sal_min);
	scanf("%f",&salario_min);
return 0;
}
