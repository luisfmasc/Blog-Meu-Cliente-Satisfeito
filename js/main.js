


  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAGj059jye8X2eUBIeOKhqrzgJQZb3-lKo",
    authDomain: "meuclientesatisfeito-554f7.firebaseapp.com",
    databaseURL: "https://meuclientesatisfeito-554f7.firebaseio.com",
    projectId: "meuclientesatisfeito-554f7",
    storageBucket: "meuclientesatisfeito-554f7.appspot.com",
    messagingSenderId: "157899671633"
  };
  firebase.initializeApp(config);



//reference message collection
let dados = firebase.databsase().ref('info');



//Listen para o botão submit
document.getEelementById('contato').addEventListener('submit', submitForm);



function submitForm(e){
    e.preventDefault();
    let email = getInputVal('Email1');
    let nome = getInputVal('nomeSobrenome');
    
    salvarDados(email,nome);
  }
  
  // Função para pegar os valores do formulario
function getInputVal(id){
    return document.getElementById(id).value;
  }


// Salvar os dados no firebase
function salvarDados(email, nome){
    let newDados = dados.push();
    newDados.set({
      email: email,
      nome: nome
    })
  }



