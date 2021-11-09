const body = document.body;

const imgHTML = document.querySelector('#imgHTML');
const imgCSS = document.querySelector('#imgCSS');
const imgJS = document.querySelector('#imgJS');

imgCSS.onclick = function(){
    body.classList.remove('jaune');
    body.classList.remove('orange');
    body.classList.add('bleu');
}

imgJS.onclick = function(){
    body.classList.remove('bleu');
    body.classList.remove('orange');
    body.classList.add('jaune');
}

imgHTML.onclick = function(){
    body.classList.remove('jaune');
    body.classList.remove('bleu');
    body.classList.add('orange');
}