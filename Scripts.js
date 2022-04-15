document.addEventListener('DOMContentLoaded' , function(event) {

    document.getElementById("php").addEventListener("click" , php);
    document.getElementById("sql").addEventListener("click" , sql);
    document.getElementById("javascript").addEventListener("click" , javascript);
    document.getElementById("java").addEventListener("click" , java);


    carrusel();
});

function imagenAleatoria(argument) {

    var imagenes = [
        'imagenes/carrusel/img1.jpg',
        'imagenes/carrusel/img2.png',
        'imagenes/carrusel/img3.png',
        'imagenes/carrusel/img4.jpg',
        'imagenes/carrusel/img5.jpg'
    ];
    var index = Math.floor((Math.random() * imagenes.length));
    var imagen_actual = imagenes[index];

   document.getElementById("carru").src = imagen_actual;

}

function carrusel() {

    imagenAleatoria();
    setInterval(imagenAleatoria, 3000);
 
}

function php() {
 
    location.href = "./Formulario/iniciarSeccion.html"

 }

function sql() {
 
    location.href = "./Formulario/iniciarSeccion.html"
   
}

function javascript() {
 
    location.href = "./Formulario/iniciarSeccion.html"
       
}

function java() {
 
    location.href = "./Formulario/iniciarSeccion.html"
           
}