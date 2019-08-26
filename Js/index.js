var text = ["atención 24/7", "generación de reportes", "comparación de pedidos"]
var i = 0;
var txt = 'FUNCIONA! NOMAMES';
// var line = document.getElementById('showBenefits').innerHTML;

function hagoAlgo() {
  document.getElementById('')
}

function lel() {
  const element = text[i];
  if (i < element.length) {
    document.getElementById('showBenefits').innerHTML += text[0].charAt(i);
    i++;
    console.log(line);
    setTimeout(lel, 100);
  }
  for (let i = 0; i < element.length; i++) {
    // const element = element[i];
    document.getElementById('showBenefits').innerHTML += element.charAt(i)
    // console.log(element)
  }
}
function ahoraSi() {
  document.getElementById('showBenefits').innerHTML = "";
  setTimeout(() => {
    writeLog();
  }, 1000)
}

function ahoraNo() {
  document.getElementById('showBenefits').innerHTML += text[0]
  deleteText();
}
function deleteText() {
  large = text[0].length
  large = i;
  if (i >= large) {
    document.getElementById('showBenefits').innerHtml -= text[0].charAt(large)
    large--;
    setTimeout(deleteText, 90);
  }
}

function writeLog() {
  if (i < text[0].length) {
    document.getElementById('showBenefits').innerHTML += text[0].charAt(i);
    i++;
    console.log(line);
    setTimeout(writeLog, 90);
  }
}

// window.onload = writeBenefits()