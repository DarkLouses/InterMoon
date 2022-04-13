document.addEventListener('DOMContentLoaded' , function(event) {


    carrusel();
    document.getElementById("reg").addEventListener("click" , nombre);

});

// Al hacer click en el botón Registrarse, aparecerá un 'prompt' con el mensaje: 'Introduce tu nombre:"
// Después, el texto introducido por el usuario se mostrará en un div a la izquierda de la página (arriba) como mensaje:
// 'Bienvenido [texto/nombre]'.

function nombre() {

   var palabra = prompt("tu nombre");
   var mensaje = "ongi etorri , " +palabra;
   document.getElementById("bienvenido").innerHTML = mensaje;


}

// Esta función tomará aleatoriamente la dirección de una imagen del carrusel
// y se la añadirá al elemento 'imagen'
function imagenAleatoria(argument) {
    var imagenes = [
        'img/carrusel/1.png',
        'img/carrusel/2.png',
        'img/carrusel/3.png'
    ];
    var index = Math.floor((Math.random() * imagenes.length));

    var imagen_actual = imagenes[index];
    //TODO: insertar la imagen actual en el elemento 'imagen'

   document.getElementById("carru").src = imagen_actual;

}


// llamará a la función imagenAleatoria y esperará 3000 milisegundos
// hasta volver a llamar a la misma función
function carrusel(){
    imagenAleatoria();
    setInterval(imagenAleatoria, 3000);
 
}