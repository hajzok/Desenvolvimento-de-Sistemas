import React from 'react';
import { View, Text } from 'react-native';
import estilo from './estilo';

export default function Titulo() {
  return (
    <View style={estilo.box1}>
    <View style={estilo.box2}>
    <View style={estilo.box3}>
      <Text style={estilo.texto}>Estados Brasileiros</Text>
    </View>
    </View>
    </View>
  )
}