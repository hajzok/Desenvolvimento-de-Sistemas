print("Bem-vindo ao teste automatizado para verificar se você pode jogar o GTA 6")

def VerificaIdade():

    anoNasc = input("Digite o seu ano de nascimento: ")
    ano = int(anoNasc)
    
    idade = 2024 - ano
    
    if idade >= 14:
        print("Parabéns! Você tem a idade para jogar o GTA 6!")
        print("Mas calma, você terá que ter alguns requisitos para conseguir rodar o jogo kkk")
    else:
        print("Infelizmente você não tem idade para jogar :(")

VerificaIdade()