import React from 'react';
import { View, ScrollView } from 'react-native';
import Titulo from '../Titulo';
import ItemLista from '../ItemLista';
import estilo from './estilo.js';

export default function ListaDeSignos() {
  return (
    <View>
      <Titulo />

      <ScrollView style={estilo.lista}>
        <ItemLista Sigla="AC" Estado= "Acre" Capital="Rio Branco" Regiao="Norte"/>
        <ItemLista Sigla="AL" Estado= "Alagoas" Capital="Maceió" Regiao="Nordeste"/>
        <ItemLista Sigla="AP" Estado= "Amapá" Capital="Macapá" Regiao="Norte"/>
        <ItemLista Sigla="AM" Estado= "Amazonas" Capital="Manaus" Regiao="Norte"/>
        <ItemLista Sigla="BA" Estado= "Bahia" Capital="Salvador" Regiao="Nordeste"/>
        <ItemLista Sigla="CE" Estado= "Ceará" Capital="Fortaleza" Regiao="Nordeste"/>
        <ItemLista Sigla="ES" Estado= "Espirito Santo" Capital="Vitória" Regiao="Sudeste"/>
        <ItemLista Sigla="GO" Estado= "Goiás" Capital="Goiânia" Regiao="Centro-Oeste"/>
        <ItemLista Sigla="MA" Estado= "Maranhão" Capital="São Luís" Regiao="Nordeste"/>
        <ItemLista Sigla="MG" Estado= "Mato Grosso" Capital="Cuiabá" Regiao="Centro-Oeste"/>
        <ItemLista Sigla="MS" Estado= "Mato Grosso do Sul" Capital="Campo Grande" Regiao="Centro-Oeste"/>
        <ItemLista Sigla="MG" Estado= "Minas Gerais" Capital="Belo Horizonte" Regiao="Sudeste"/>
        <ItemLista Sigla="PA" Estado= "Pará" Capital="Belém" Regiao="Norte"/>
        <ItemLista Sigla="PB" Estado= "Paraíba" Capital="João Pessoa" Regiao="Norte"/>
      </ScrollView>
    </View>
  )
}