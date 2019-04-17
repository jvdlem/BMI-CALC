let bereken = document.getElementById('bereken');
let lengte = document.getElementById('lengte');
let gewicht = document.getElementById('gewicht');
let resultaat = document.getElementById('resultaat');
let input = document.getElementById('input');

bereken.addEventListener('click', function(){
  console.log("test");
  ajax(gewicht.value , lengte.value);
});
