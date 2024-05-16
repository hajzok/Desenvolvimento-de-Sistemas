import React from 'react';
import { View, Text, Image } from 'react-native';

import Filme from '../../assets/Filme.png';
import estilos from './estilos'; 

export default function Conteudo() {
  return (
    <View style={ estilos.container }>
      <Text style={ estilos.titulo }>Sobre o cantor</Text>

      <Text style={ estilos.subtitulo }>Sua vida</Text>
      <Text style={ estilos.paragrafo }>Nascido em Gary, Indiana, 29 de agosto de 1958.
      Morreu em 2009, aos 50 anos, vítima de uma overdose.
      Rei do pop, um dos maiores artistas da cultura pop
      </Text>    
      <Text style={ estilos.subtitulo }>Início da carreira</Text>
      <Text style={ estilos.paragrafo }>Começou sua carreira no grupo Jackson Five junto com seus irmãos em 1964 e      
      iniciou sua carreira solo em 1971, se tornando o maior artista pop do mundo.

      </Text>
      <Image source={ Filme } style={ estilos.imagem }/>
    </View>
  )
}