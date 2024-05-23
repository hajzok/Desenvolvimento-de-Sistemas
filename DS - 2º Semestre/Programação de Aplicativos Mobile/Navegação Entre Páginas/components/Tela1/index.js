import React from 'react';
import { Text, View, Image } from 'react-native';
import styles from '../syles';

import imagem from '../../assets/dinheiro.png';

export default function Tela1() {
  return (
    <View style={styles.container}>

      <View style={styles.boxDescricao}>
        <Text style={styles.titulo}>A Etec é paga?</Text>

        <Image source={imagem} style={styles.imagem1}/>
        
        <Text style={styles.tela1}>
          Não, a ETEC é uma escola estadual livre de quaisquer mensalidades por todo o período que você estudar nela. Além disso, seu ensino é de excelente qualidade e está no nível das melhores escolas particulares do estado de São Paulo. </Text>
          <Text style={styles.tela1}>
          Convém dizer, contudo, que os gastos com alimentação, transporte e material ficam a cargo do aluno. O que ainda é um valor muito baixo em comparação aos gastos que você teria estudando em uma escola particular.
        </Text>
      </View>
    </View>
  )
}