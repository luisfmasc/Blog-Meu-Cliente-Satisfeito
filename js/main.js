

 // Initialize Firebase
 var config = {
    apiKey: "AIzaSyAislCRgZxFgS9rffDJEoC8wqlTo7U0JWU",
    authDomain: "meuclientesatisfeito-55e4c.firebaseapp.com",
    databaseURL: "https://meuclientesatisfeito-55e4c.firebaseio.com",
    projectId: "meuclientesatisfeito-55e4c",
    storageBucket: "meuclientesatisfeito-55e4c.appspot.com",
    messagingSenderId: "679633941380"
  };
  firebase.initializeApp(config);


//reference leads collecntion
let dados = firebase.database().ref('info');



//Listen para o botão submit
document.getElementById('contato').addEventListener('submit', submitForm);



function submitForm(e){
    e.preventDefault();
    let email = getInputVal('Email1');
    let nome = getInputVal('nomeSobrenome');
    let brtTime = new Date().toLocaleString("en-US", {timeZone: "America/Sao_Paulo"});
    brtTime = new Date(brtTime);
    brtTime = brtTime.toString();
    
    salvarDados(email,nome, brtTime);
  }
  
  // Função para pegar os valores do formulario
function getInputVal(id){
    return document.getElementById(id).value;
  }


// Salvar os dados no firebase
function salvarDados(email, nome, brtTime){
    let newDados = dados.push();
    newDados.set({
      email: email,
      nome: nome,
      brtTime: brtTime
    })
  }



