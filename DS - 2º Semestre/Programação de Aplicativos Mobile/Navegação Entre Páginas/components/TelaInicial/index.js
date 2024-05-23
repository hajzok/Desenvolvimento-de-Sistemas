import React from 'react';
import { View, Button, Image, Text } from 'react-native';
import logoEtec from '../../assets/logoEtec.jpg';
import styles from '../syles';

export default function TelaInicial (props) {
  return (
    <View style={styles.container}>
      <Image source={logoEtec} style={styles.imagem}/>

      <Text style={styles.titulo}>
        Quer saber sobre algumas curiosidades sobre a Etec?
      </Text>

      <Text style={styles.textos}>
        Clique no botão a seguir para conferir.
      </Text>

      <Button 
        title="Preciso pagar para estudar na Etec?" 
        onPress={() => props.navigation.navigate("Tela1")} color="#372d00" 
      />
      <Button 
        title="Qual idade para estudar na Etec?" 
        onPress={() => props.navigation.navigate("Tela2")} color="#372d00" 
      />
      <Button 
        title="Quais curso posso fazer na Etec?" 
        onPress={() => props.navigation.navigate("Tela3")} color="#372d00" /
      > 
    </View>
  )
}

