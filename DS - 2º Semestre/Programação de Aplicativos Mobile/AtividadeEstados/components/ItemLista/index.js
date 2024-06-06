import React from 'react';
import { View, Text } from 'react-native';
import estilo from './estilo';

export default function ItemLista(props) {
  return (
    <View style={estilo.boxEstados}>
      <Text style={estilo.nomeEstados}>
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