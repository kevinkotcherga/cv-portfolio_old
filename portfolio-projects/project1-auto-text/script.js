const text = document.getElementById("message");

const prog = "Bienvenue sur mon portfolio ! Je suis l'un de mes projets Javascript";

let index = 1;

function writeText() {
  text.innerText = prog.slice(0, index);

  index++; 

  if(index > prog.length) {
    index = 1;
  }

};

setInterval(writeText, 100);