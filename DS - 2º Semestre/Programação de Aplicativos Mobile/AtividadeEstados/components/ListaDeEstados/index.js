import React from 'react';
import { View, ScrollView } from 'react-native';
import Titulo from '../Titulo';
import ItemLista from '../ItemLista';
import estilo from './estilo.js';

export default function ListaDeEstados() {
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
        <ItemLista Sigla="PR" Estado= "Paraná" Capital="Curitiba" Regiao="Sul"/> 
        <ItemLista Sigla="PE" Estado= "Pernambuco" Capital="Recife" Regiao="Nordeste"/>
        <ItemLista Sigla="PI" Estado= "Piauí" Capital="Teresina" Regiao="Nordeste"/>
        <ItemLista Sigla="RJ" Estado= "Rio de Janeiro" Capital="Rio de Janeiro" Regiao="Sudeste"/>
        <ItemLista Sigla="RN" Estado= "Rio Grande do Norte" Capital="João Pessoa" Regiao="Nordeste"/>
        <ItemLista Sigla="RS" Estado= "Rio Grande do Sul" Capital="Porto Alegre" Regiao="Sul"/>
        <ItemLista Sigla="RO" Estado= "Rondônia" Capital="Porto Velho" Regiao="Norte"/>
        <ItemLista Sigla="RR" Estado= "Roraima" Capital="Boa Vista" Regiao="Norte"/>
        <ItemLista Sigla="SC" Estado= "Santa Catarina" Capital="Florianópolis" Regiao="Sul"/>
        <ItemLista Sigla="SP" Estado= "São Paulo" Capital="São Paulo" Regiao="Centro-Oeste"/>
        <ItemLista Sigla="SE" Estado= "Sergipe" Capital="Aracaju" Regiao="Nordeste"/>
        <ItemLista Sigla="TO" Estado= "Tocantins" Capital="Palmas" Regiao="Norte"/>
        <ItemLista Sigla="DF" Estado= "Destrito Federal" Capital="Brasília" Regiao="Centro-Oeste"/>
      </ScrollView>
    </View>
  )
}