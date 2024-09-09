print("Hello World!")
nome = input("Digite seu nome:")
print (nome)

ano = input("Digite o ano em que nasceu:")
ano = int(ano) #Convertendo str para int
print ( type(ano) )

idade = 2024 - ano
print (f"Sua idade é:{idade}")

if idade >= 18:
    print("Pode Beber, votar e dirigir")
elif idade >= 16:
    print("Pode votar")
else:
    print("Menor de idade")

i = 1
while i < 6:
    print(i)
    i += 1
print("Aqui já acabou o while")

minhas_frutas = ["maçã", "banana", "morango"]
for fruta in minhas_frutas:
    print(f"{fruta}\n")

def Somar():
    numero1 = int(input("Digite um número\n"))
    numero2 = int(input("Digite outro número\n"))
    print(f"A soma é: {numero1 + numero2}")

Somar()