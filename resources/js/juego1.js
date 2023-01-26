// defino variables
var seleccionMedio = 0;
var seleccionCaracteristica = 0;


// obtengo los indices de las respuestas clickadas
var btnMedio = document.querySelectorAll(".medioCultivo");
var btnCaracteristica = document.querySelectorAll(".caracteristica");

btnMedio.forEach(m => m.addEventListener('click', eventoClickMedio));
btnCaracteristica.forEach(c => c.addEventListener('click', eventoClickCaracteristica));


// funciones de seleccion 
function eventoClickCaracteristica(e) {
    // mostrar el indice de la caracteristica elegida
    /*    console.log("1"+e.target);
        //alert(e.target.value);
        console.log("2"+e.target.id); 
        console.log("3"+e.target.innerText);
    */
    seleccionCaracteristica = e.target.value;
    console.log(seleccionCaracteristica);

}
function eventoClickMedio(e) {
    // mostrar el indice del medio elegido
    /*
    console.log(e.target.value); 
    console.log(e.target.innerText);
    */
    seleccionMedio = e.target.value;
    console.log(seleccionMedio);

}

// ejecuto la validacion cuando ambas opciones tienen un valor distinto de 0
if (seleccionMedio != 0 && seleccionCaracteristica != 0) {
    ValidarSelecciones();
}
// validaciones de las opciones elegidas
function ValidarSelecciones() {

    // si son iguales
    if (seleccionMedio == seleccionCaracteristica) {
        alert("Las 2 partes SI coinciden");
        // reseteo las selecciones
        seleccionMedio = 0;
        seleccionCaracteristica = 0;
    }
    // si no son iguales
    else {
        alert("Las 2 partes NO coinciden");
        // reseteo las selecciones
        seleccionMedio = 0;
        seleccionCaracteristica = 0;
    }

}

