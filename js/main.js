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
let dados = firebase.database().ref('leads');

var userIp;

//Listen para o botão submit
try{
document.getElementById('contato').addEventListener('submit', submitForm);
}catch(e){}
try{
document.getElementById('modal-contato').addEventListener('submit', submitForm);
}catch(e){}

function getIp(callback)
{
    function response(s)
    {
        callback(window.userip);

        s.onload = s.onerror = null;
        document.body.removeChild(s);
    }

    function trigger()
    {
        window.userip = false;

        var s = document.createElement("script");
        s.async = true;
        s.onload = function() {
            response(s);
        };
        s.onerror = function() {
            response(s);
        };

        s.src = "https://l2.io/ip.js?var=userip";
        document.body.appendChild(s);
    }

    if (/^(interactive|complete)$/i.test(document.readyState)) {
        trigger();
    } else {
        document.addEventListener('DOMContentLoaded', trigger);
    }
}

function b2cORb2b (email){
  var arremail = email.split("@");
  switch(arremail[1]){
      case "gmail.com":
      case "hotmail.com":
      case "yahoo.com":
      case "uol.com.br":
      case "outlook.com":
      case "live.com":
      case "yahoo.com.br":
      case "bol.com.br":
      case "ymail.com":
      case "globomail.com":
      case "icloud.com":
      case "me.com":
          return "B2C";
          break;
      default:
          return "B2B";
          break;
  }
  
}

getIp(function (ip) {
    userIp = ip;
});

function submitForm(e){
    e.preventDefault();
    let email = getInputVal('Email1');
    let nome = getInputVal('nomeSobrenome');
    let brtTime = new Date().toLocaleString("en-US", {timeZone: "America/Sao_Paulo"});
    brtTime = new Date(brtTime);
    stringTime = brtTime.getFullYear().toString() + "-" + ("0"+(brtTime.getMonth()+1)).slice(-2) + "-" + ("0" + brtTime.getDate()).slice(-2) + " " + 
    ("0" + brtTime.getHours()).slice(-2) + ":" + ("0" + brtTime.getMinutes()).slice(-2) + ":" + ("0" + brtTime.getSeconds()).slice(-2);
 
    var tipo = b2cORb2b(email);

    salvarDados(email,nome,userIp,tipo,stringTime);
    document.getElementById("email").value = "";
    document.getElementById("nome").value = "";
    $('#modalOK').modal('show')
  }
  
  // Função para pegar os valores do formulario
function getInputVal(id){
    return document.getElementById(id).value;
  }
  

// Salvar os dados no firebase
function salvarDados(email, nome, userIp,tipo,stringTime){
    let newDados = dados.push();
    newDados.set({
      email: email,
      nome: nome,
      userIp: userIp,
      tipo: tipo,
      stringTime: stringTime
      
    })
  }