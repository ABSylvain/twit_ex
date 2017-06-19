let formulaire = document.body.querySelector('#formulaire');
let first = document.body.querySelectorAll('.first');

setTimeout(function() { formulaire.style.opacity = "1" }, 1000);
let time = 1000;
for (let i = 0; i < first.length; i++) {
    time += 100;
    setTimeout(function() { first[i].style.opacity = "1" }, time);

}