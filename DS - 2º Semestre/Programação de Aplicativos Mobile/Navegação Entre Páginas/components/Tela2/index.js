import React from 'react';
import { Text, View, Image } from 'react-native';
import styles from '../syles';

import imagem from '../../assets/etecpg.jpg';

export default function Tela2() {
  return (
    <View style={styles.container}>
      <View style={styles.boxDescricao}>
        <Text style={styles.titulo}>Quem pode estudar na Etec?</Text>

        <Image source={imagem} style={styles.imagem}/>

        <Text style={styles.tela2}>
          Todos podem estudar na ETEC, desde que tenham a idade certa e sejam aprovados no Vestibulinho ETEC. Porém tradicionalmente alunos de escola pública são a maioria nos cursos da instituição.
        </Text>
        
        <Text style={styles.tela2}>
          Caso queira fazer somente o curso técnico na escola, você deve estar cursando à partir do 2º ano do ensino médio para a grande maioria dos cursos. Não há porém limite de idade para os cursos técnicos, sendo possível para todos que desejarem se formar nessa modalidade. Se quiser fazer ensino médio + técnico na ETEC é preciso estar no nono ano quando for prestar a prova. 
        </Text>
      </View>
    </View>
  )
}