import React from 'react';
import { Button, Text, View, Image } from 'react-native';
import styles from '../syles';

import imagem from '../../assets/sala.jpg';

export default function Tela3() {
  return (
    <View style={styles.container}>
      <View style={styles.boxDescricao}>
        <Text style={styles.titulo}>Quais cursos a Etec possui?</Text>

        <Image source={imagem} style={styles.imagem3}/>

        <Text style={styles.tela2}>
          Desenvolvimento de Sitemas: 40 vagas;
        </Text>

        <Text style={styles.tela2}>
          Administração: 40 vagas;
        </Text>

        <Text style={styles.tela2}>
          Enfermagem: 40 vagas;
        </Text>

        <Text style={styles.tela2}>
          Logística: 40 vagas;
        </Text>

        <Text style={styles.tela2}>
          Segurança do Trabalho: 40 vagas;
        </Text>

        <Text style={styles.tela3}>
          Todos noturno (19h ás 23h);
        </Text>
      </View>
    </View>
  )
}