

let input = "";
let input1 = "";

let billet_prix_opt1_trajet1 = 0;
let billet_prix_opt2_trajet1 = 0;
let billet_prix_opt3_trajet1 = 0;
let billet_prix_opt1_trajet2 = 0;
let billet_prix_opt2_trajet2 = 0;
let billet_prix_opt3_trajet2 = 0;

var option_trajet1 = 1;
var option_trajet2 = 1;

//fonctions pour affichage des options de billets
async function ShowValue2A1(btn){  // billet_prix_opt1_trajet1
  input = "";
  input1= "";
  document.getElementById("output1").innerHTML = input;
  document.getElementById("output1b").innerHTML = input1;
  option_trajet1 = 1;
  var s = await calculerSomme();
  var resultat_somme = s + '€';
  document.getElementById("resultat_somme").innerHTML = resultat_somme;
  document.getElementById("total").value = resultat_somme;
  document.getElementById("opt1").value = input;
  document.getElementById("opt1_p").value = input1;
}

async function ShowValue2A2(btn){  //  billet_prix_opt1_trajet2
  input = "";
  input1= "";
  document.getElementById("output2").innerHTML = input;
  document.getElementById("output2b").innerHTML = input1;
  option_trajet2 = 1;
  var s = await calculerSomme();
  var resultat_somme = s + '€';
  document.getElementById("resultat_somme").innerHTML = resultat_somme;
  document.getElementById("total").value = resultat_somme;
  document.getElementById("opt2").value = input;
  document.getElementById("opt2_p").value = input1;
}


async function ShowValue2A(btn){   // billet_prix_opt2_trajet1
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valA").value + '€';
    input1= document.getElementById("title1A");
    var monTexte = input1.innerText || elt.textContent;
    document.getElementById("output1").innerHTML = input;
    document.getElementById("output1b").innerHTML = monTexte;
    option_trajet1 = 2;
    var s = await calculerSomme();
    var resultat_somme = s + '€';
    console.log(billet_prix_opt1_trajet1);
    console.log(s);
    document.getElementById("resultat_somme").innerHTML = resultat_somme;
    document.getElementById("total").value = resultat_somme;
    document.getElementById("opt1").value = input;
    document.getElementById("opt1_p").value = monTexte;
}

async function ShowValue2B(btn){   // billet_prix_opt3_trajet1
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valB").value + '€';
    input1= document.getElementById("title1B");
    var monTexte = input1.innerText || elt.textContent;
    document.getElementById("output1").innerHTML = input;
    document.getElementById("output1b").innerHTML = monTexte;
    option_trajet1 = 3;
    var s = await calculerSomme();
    var resultat_somme = s + '€';
    document.getElementById("resultat_somme").innerHTML = resultat_somme;
    document.getElementById("total").value = resultat_somme;
    document.getElementById("opt1").value = input;
    document.getElementById("opt1_p").value = monTexte;
    }

async function ShowValue2C(btn){   // billet_prix_opt2_trajet2
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valC").value + '€';
    input1= document.getElementById("title2A");
    var monTexte = input1.innerText || elt.textContent;
    document.getElementById("output2").innerHTML = input;
    document.getElementById("output2b").innerHTML = monTexte;
    option_trajet2 = 2;
    var s = await calculerSomme();
    var resultat_somme = s + '€';
    document.getElementById("resultat_somme").innerHTML = resultat_somme;
    document.getElementById("total").value = resultat_somme;
    document.getElementById("opt2").value = input;
    document.getElementById("opt2_p").value = monTexte;
}

async function ShowValue2D(btn){   // billet_prix_opt3_trajet2
    input = "";
    input1= "";
    input = '+ ' + document.getElementById("valD").value + '€';
    input1= document.getElementById("title2B");
    var monTexte = input1.innerText || elt.textContent;
    document.getElementById("output2").innerHTML = input;
    document.getElementById("output2b").innerHTML = monTexte;
    option_trajet2 = 3;
    var s = await calculerSomme();
    var resultat_somme = s + '€';
    document.getElementById("resultat_somme").innerHTML = resultat_somme;
    document.getElementById("total").value = resultat_somme;
    document.getElementById("opt2").value = input;
    document.getElementById("opt2_p").value = monTexte;
}

//somme des billets
async function calculerSomme() {
  var prix_trajet1 = 0;
  var prix_trajet2 = 0;
  switch (option_trajet1) {
    case 1:
      billet_prix_opt1_trajet1 = document.getElementById("opt1_trajet1").value;
      prix_trajet1 = billet_prix_opt1_trajet1;
      break;
    case 2:
      billet_prix_opt2_trajet1 = document.getElementById("opt2_trajet1").value;
      prix_trajet1 = billet_prix_opt2_trajet1;
      break;
    case 3:
      billet_prix_opt3_trajet1 = document.getElementById("opt3_trajet1").value;
      prix_trajet1 = billet_prix_opt3_trajet1;
      break;
    default:
      break;
  }
  switch (option_trajet2) {
    case 1:
      billet_prix_opt1_trajet2 = document.getElementById("opt1_trajet2").value;
      prix_trajet2 = billet_prix_opt1_trajet2;
      break;
    case 2:
      billet_prix_opt2_trajet2 = document.getElementById("opt2_trajet2").value;
      prix_trajet2 = billet_prix_opt2_trajet2;
      break;
    case 3:
      billet_prix_opt3_trajet2 = document.getElementById("opt3_trajet2").value;
      prix_trajet2 = billet_prix_opt3_trajet2;
      break;
    default:
      break;
  }
  var somme = parseFloat(prix_trajet1) + parseFloat(prix_trajet2);
  return somme;
}

//changement de couleur bouton selon sélection
function changeColor_o1_t1() {
  document.getElementById("a-standard").classList.add("selected");
  document.getElementById("a-prise").classList.remove("selected");
  document.getElementById("a-tranquille").classList.remove("selected");
}
function changeColor_o2_t1() {
  document.getElementById("a-prise").classList.add("selected");
  document.getElementById("a-standard").classList.remove("selected");
  document.getElementById("a-tranquille").classList.remove("selected");
}
function changeColor_o3_t1() {
  document.getElementById("a-tranquille").classList.add("selected");
  document.getElementById("a-prise").classList.remove("selected");
  document.getElementById("a-standard").classList.remove("selected");
}

function changeColor_o1_t2() {
  document.getElementById("a-standard2").classList.add("selected");
  document.getElementById("a-premiere").classList.remove("selected");
  document.getElementById("a-business").classList.remove("selected");
}
function changeColor_o2_t2() {
  document.getElementById("a-premiere").classList.add("selected");
  document.getElementById("a-standard2").classList.remove("selected");
  document.getElementById("a-business").classList.remove("selected");
}
function changeColor_o3_t2() {
  document.getElementById("a-business").classList.add("selected");
  document.getElementById("a-premiere").classList.remove("selected");
  document.getElementById("a-standard2").classList.remove("selected");
}

//Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}