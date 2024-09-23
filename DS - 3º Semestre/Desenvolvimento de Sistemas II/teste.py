def multiplicar (x, y):
    return x * y

def test_multiplicacao_positivos():
    assert 6 == multiplicar(2,3)

def test_multiplicacao_negativos():
    assert 6 == multiplicar(-2,-3)

def test_multiplicacao_positivo_com_negativos():
    assert -6 == multiplicar(2,-3)

def test_multiplicacao_zero():
    assert 0 == multiplicar(0,3)
    assert 0 == multiplicar(3,0)