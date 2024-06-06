import React from 'react';
import { View, Text } from 'react-native';
import estilo from './estilo';

export default function ItemLista(props) {
  return (
    <View style={estilo.boxSigno}>
      <Text style={estilo.nomeSigno}>
        {props.signo}
      </Text>

      <Text>
        UF: {props.Sigla}
      </Text>
      <Text>
        Estado: {props.Estado}
      </Text>
      <Text>
        Capital: {props.Capital}
      </Text>
      <Text>
        Região: {props.Regiao}
      </Text>
    </View>
  )
}