

const elegido = document.getElementById('num-elegido');
const sorteado = document.getElementById('num-sorteado');
const inputSuertetest = document.querySelectorAll('#input-suertetest');
const boton1 = document.getElementById('boton1');
const boton2 = document.getElementById('boton2');
const formulario = document.querySelector('.header-suertetest');
let i = 0;
let digito = /[0-9]/;


const checkeaDatos = () => {
    inputSuertetest.forEach(element => {
        if (element.value !== '') { // si no hay input vacio.
            if (element.value.match(digito)) { // en caso mache con expresion regular de numero, para asegurar se ingrese numeros y no letras.
                i++; // cada numero que encuentra incrementa el contador, deberia llegar a 6.
            }
            else {
                location.reload(); // en caso no cumpla lo anterior, se resetea para pedir nuevamente datos.
            }
        }
        else {
            location.reload(); // en caso no se rellene todos los campos se resetea.
        }
    });
    if (i === 6) {
        numAleatorios(); // si todo se cumple, entonces recien funcionara numAleatorios, para el ramdom, y solo tener ambos resultados juntos.
    }
}


const recibirInfo = async (e) => { // INICIA al presionar el boton1.
    e.preventDefault(); // para eviar el envio de formulario por defecto.
    const datos = new FormData(formulario); // para obtener los datos del formulario, con javascrip.
    const datosCompletos = Object.fromEntries(datos.entries()); // para pasar a objeto el formdata.
    datosIngresados(datosCompletos); // ejecuto la funcin datosIngresados, y mando el objero, para mostrar en el primer div los datos ingresados.
    checkeaDatos(); // ejecuto checkeadatos, para tener tambien el el ramdom, en el segundo div.
}


const datosIngresados = (sep) => { // funcion para obtener los valores del objeto, obtenido del formulario, y sacarlos del input.
    const { Uno, Dos, Tres, Cuatro, Cinco, Seis } = sep; // obtendo cada valor del input
    elegido.innerHTML = // lo inserto en el documento html, con su valores elegidos.
        `
        <p class="elegido">Numero Elegido<p/>
        <scan class="elegido">${Uno}-</scan>
        <scan class="elegido">${Dos}-</scan>
        <scan class="elegido">${Tres}-</scan>
        <scan class="elegido">${Cuatro}-</scan>
        <scan class="elegido">${Cinco}-</scan>
        <scan class="elegido">${Seis}</scan>`
}


const numAleatorios = () => { // funcion para elegir los numeros aleatorios, con random.

    const Dato1 = Math.floor(Math.random() * 50);
    const Dato2 = Math.floor(Math.random() * 50);
    const Dato3 = Math.floor(Math.random() * 50);
    const Dato4 = Math.floor(Math.random() * 50);
    const Dato5 = Math.floor(Math.random() * 50);
    const Dato6 = Math.floor(Math.random() * 50);

    const resultado = [Dato1, Dato2, Dato3, Dato4, Dato5, Dato6]; // el resultado lo ingreso en el arreglo.
    ordenarNumero(resultado); // ejecuto la funcion ordenarNumero, y le mando el resultado.
}


const ordenarNumero = (arreglo) => { // recibo el resultado del random, para lo reviso para que no salga un 0.

    const nuevoArreglo = arreglo.map((numero) => {
        if (numero === 0) {
            return numero = Math.floor(Math.random() * 50);
        }
        else {
            return numero;
        };

    });

    const nuevoFiltro = nuevoArreglo.some((numerofiltrado) => { // si algun numero del nuevoArreglo es cero, entonce pongo verda, caso opuesto falso.

        if (numerofiltrado === 0) {
            return true;
        }
        else {
            return false;
        }
    })

    if (!nuevoFiltro) { // luego tambien lo reviso el nuevo arreglo, ahora sin el cero, para corregir que no salga numeros repetidos.

        const hasDuplicate = (array) => {

            if (new Set(array).size < nuevoArreglo.length) { // en caso haiga repetidos, el objeto Set lo retira del arreglo, y sera menor el tamaño.
                return true // como es diferente tamaño, returna un true.
            }
            else { return false } // si no es menor el tamaño retorna un false.
        }

        if (!hasDuplicate(nuevoArreglo)) { // como es falso, porque no hay numeros repetidos, pongo el opuesto para que se ejecute el if, y recien muestre los numeros distintos.

            sorteado.innerHTML = // ya con los numeros distintos, que pasaron por los filtro, recien se muestra en el segundo div, los numeros aleatorios.
                `   <p class="sorteado">Numero Sorteado<p/>
            <scan class="sorteado">${nuevoArreglo[0]}-</scan>
            <scan class="sorteado">${nuevoArreglo[1]}-</scan>
            <scan class="sorteado">${nuevoArreglo[2]}-</scan>
            <scan class="sorteado">${nuevoArreglo[3]}-</scan>
            <scan class="sorteado">${nuevoArreglo[4]}-</scan>
            <scan class="sorteado">${nuevoArreglo[5]}</scan>`
        }
        else {
            numAleatorios(); // en caso repetidos, es decir , si no se ejecuta el if, porque salio true, se ejecutara numAleatorios denuevo.
        }
    }
    else {
        numAleatorios(); // en caso haiga un cero, luego del metodo SOME, es decir , si no se ejecuta el if, porque salio true, se ejecutara numAleatorios denuevo.
    }
}

const resetInfo = () => { // cuando se presiona boton2 RESET, se ejecuta esta funcion.
    location.reload();
}


boton1.addEventListener('click', recibirInfo); // cuando se presiona boton1
boton2.addEventListener('click', resetInfo); // cuando se presiona boton2