#include<stdio.h>
int main ()
{
	int num1, num2, num3, num4, soma;
	
	printf ("Digite um numero inteiro: ");
	scanf("%d",&num1);
	
	printf ("Digite um numero inteiro: ");
	scanf("%d",&num2);
	
	printf ("Digite um numero inteiro: ");
	scanf("%d",&num3);
	
	printf ("Digite um numero inteiro: ");
	scanf("%d",&num4);
	
	if (num1>num2 && num1>num3 && num1>num4)
	{
		soma=num2+num3+num4;
	}
	else if (num2>num1 && num2>num3 && num2>num4)
   {
	soma=num1+num3+num4;
   }
   else if (num3>num1 && num3>num2 && num3>num4)
   {
   	soma=num1+num2+num4;
   }
   else if (num4>num1 && num4>num2 && num4>num3)
   {
   	soma=num1+num2+num3;
   }
	
	printf("A soma dos menores e: %.d", soma);
	
return 0;
}
