#include<stdio.h>
#include<locale.h>
int main()
{
    int maior=0,num,cont=1,maior2=0;
    setlocale(LC_ALL,"Portuguese");
    
    while (cont<=10) 
	{
        printf("Digite o %d� n�mero: ",cont);
        scanf ("%d", &num);
        
        if (num>maior)
		{
			maior2=maior;
            maior=num;
        }
        else if (num>maior2)
        {
        	maior2=num;
		}
        cont++;
    }
    
    printf("Os maiores n�meros s�o os: %d e o %d",maior,maior2);
    
return 0;
}
