import React from 'react';
import { View, Image, Text } from 'react-native';

import Foto from '../../assets/fotoCapa.jpg';
import estilos from './estilos'; 

export default function Card() {
  return (
    <View style={ estilos.container }>
      <View style={ estilos.box }>
        <Image source={ Foto } style={ estilos.fotoCapa } />
        <Text style={ estilos.nome }>Michael Jackson</Text>
        <Text style={ estilos.paragrafo }>Cantor, compositor e dançarino</Text>
      </View>
    </View>
  );
}