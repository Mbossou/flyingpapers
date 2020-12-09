

let input = "";
let input1 = "";

//fonctions pour affichage des options de billets
function ShowValue2A1(btn){  
  input = "";
  input1= "";
      console.log(input);
      document.getElementById("output1").innerHTML = input;
      document.getElementById("output1b").innerHTML = input1;
    }

function ShowValue2A2(btn){  
  input = "";
  input1= "";
      document.getElementById("output2").innerHTML = input;
      document.getElementById("output2b").innerHTML = input1;
    }


function ShowValue2A(btn){   
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valA").value + '€';
    input1= document.getElementById("title1A");
    var monTexte = input1.innerText || elt.textContent;
      document.getElementById("output1").innerHTML = input;
      document.getElementById("output1b").innerHTML = monTexte;
    }

function ShowValue2B(btn){   
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valB").value + '€';
    input1= document.getElementById("title1B");
    var monTexte = input1.innerText || elt.textContent;
      document.getElementById("output1").innerHTML = input;
      document.getElementById("output1b").innerHTML = monTexte;
    }

function ShowValue2C(btn){   
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valC").value + '€';
    input1= document.getElementById("title2A");
    var monTexte = input1.innerText || elt.textContent;
      document.getElementById("output2").innerHTML = input;
      document.getElementById("output2b").innerHTML = monTexte;
    }

function ShowValue2D(btn){   
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valD").value + '€';
    input1= document.getElementById("title2B");
    var monTexte = input1.innerText || elt.textContent;
      document.getElementById("output2").innerHTML = input;
      document.getElementById("output2b").innerHTML = monTexte;
    }

//somme des billets
function calculerSomme() {
    var a = new Number(document.getElementById("output1").value);
    var b = new Number(document.getElementById("output2").value);
    var somme = a + b;
    document.getElementById("resultat_somme").innerHTML = somme;
  }

  function calculSomme() {
      var a = new Number(document.getElementById("valA").value);
      var c = new Number(document.getElementById("valA").value);
      var c = new Number(document.getElementById("valA").value);
      var d = new Number(document.getElementById("valA").value);
  }
  


  function changeColor(btn) {
    var elem = document.getElementById("a-standard").style.backgroundColor = "green";

  }
/*
  function changeColor(btn) {
    var color1="";
    var color2="";
    var color3="";
    if(document.getElementById('button1').clicked){
      var elem = document.getElementById("a-standard").style.backgroundColor = "green";
    }
  }
  changeColor(btn);

   document.getElementById('button').onclick = function() {
  alert("button was clicked");
  var elem = document.getElementById("a-standard").style.backgroundColor = "green";
}*/