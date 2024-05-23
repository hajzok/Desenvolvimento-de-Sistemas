import { StyleSheet } from "react-native";

const styles = StyleSheet.create({
  container: {
    backgroundColor: '#A9A9A9',
    flex: 1,
    alignItems: 'center',
    justifyContent: "space-between",
    padding: 20
  },
  boxDescricao: {
    alignItems: "center"
  },

  titulo: {
    color: '#000000',
    fontSize: 25,
    marginBottom: 10,
    fontWeight: '700',
    textAlign: "center"
  },

  tela1: {
    color: '#191970',
    fontSize: 16,
    marginBottom: 10,
    textAlign: "justify-content"
  },
  
  tela2: {
    color: '#191970',
    fontSize: 15,
    marginBottom: 10,
    textAlign: "justify-content"
  },

  tela3: {
    color: '#191970',
    fontSize: 20,
    marginBottom: 10,
    textAlign: "justify-content"
  },

  textos: {
    color: '#191970',
    fontSize: 19,
    marginBottom: 10,
    textAlign: "center"
  },

  imagem1: {
    width: 300,
    height: 200,
    marginBottom: 10
  },

  imagem3: {
    width: 300,
    height: 200,
    marginBottom: 10
  },

  imagem: {
    width: 200,
    height: 200,
    marginBottom: 10
  },

  boxBotoes: {
    width: 200,
    flexDirection: 'row',
    justifyContent: "space-between"
  }
});

export default styles;