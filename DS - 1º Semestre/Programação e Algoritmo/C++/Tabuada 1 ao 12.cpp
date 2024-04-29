#include<stdio.h>
#include<locale.h>
int main ()
{
    int num,i=1,tabuada;
    setlocale(LC_ALL,"Portuguese");

    printf("Digite o número para verificar a tabuada do 1 ao 12: ");
    scanf("%d",&num);
    
    while(i<=12)
    {
    	tabuada=num*i;
        printf("%.2d x %.2d = %.2d \n",num,i,tabuada);
        i++;
    }
    
return 0;
}
