import { StyleSheet } from 'react-native';

const estilos = StyleSheet.create({
  container: {
    backgroundColor: '#fff',
    paddingVertical: 10,
    paddingHorizontal: 20,
  },
  titulo: {
    fontSize: 22,
    fontWeight: "bold",
  },
  subtitulo: {
    fontWeight: 'bold',
    marginTop: 10,
  },
  paragrafo: {
    marginTop: 6,
  },
  imagem: {
    justifyContent: "center",
    alignItems: "center",
    borderRadius: 10,
    borderTopLeftRadius: 10,
    borderTopRightRadius: 10,
    borderCurve: 5,
    width: 200,
    height: 200,
    marginTop: 10,
  }
});

export default estilos;