import React from "react";
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

import TelaInicial from './components/TelaInicial/index';
import Tela1 from './components/Tela1/index';
import Tela2 from './components/Tela2/index';
import Tela3 from './components/Tela3/index';

const Stack = createStackNavigator();

export default function App () {
  return (
    <NavigationContainer >
      <Stack.Navigator>
        <Stack.Screen name="Tela Inicial" component = { TelaInicial } />
        <Stack.Screen name="Tela1" component = { Tela1 } />
        <Stack.Screen name="Tela2" component = { Tela2 } />
        <Stack.Screen name="Tela3" component = { Tela3 } />
      </Stack.Navigator>
    </NavigationContainer>
  )
}