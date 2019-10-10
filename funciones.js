var datos_import = new Array();
var datos_fuente = new XMLHttpRequest();
var ruta = 'archivo.txt';

datos_fuente.open("GET",ruta,false);
datos_fuente.send(null);
var text = datos_fuente.responseText;

//Mostrar codigo fuente
function Fuente(){
  document.getElementById("operacion").innerText =text.toString();
}
//Mostrar codigo Imagen
function imagen(){
  var img = /<img(.*?)>/ig;
  var imag_m = text.match(img);
  document.getElementById("operacion").innerText = imag_m.toString() ;
}
//Mostrar codigo Title
function Title(){
  var tit = /<title>(.*?)<\/title>/ig;
  var tit_m = text.match(tit);
  document.getElementById("operacion").innerText = tit_m.toString() ;
}
//Mostrar comentario
function con(){
  var com = /\h*<!--.*?-->\h*/ig;
  var com_m = text.match(com);
  document.getElementById("operacion").innerText = com_m.toString();
}
//Eliminar comentario
function sin_con(){
  var come = /\h*<!--.*?-->\h*/ig;
  var x = text.replace(come,"*");
  document.getElementById("operacion").innerText =x.toString();
}

//terminar gato
