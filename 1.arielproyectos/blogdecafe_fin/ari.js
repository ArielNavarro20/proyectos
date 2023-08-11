
function sumar() {
    console.log(10+10)
};
sumar();



let sumar2 = function(){
    console.log(3+3)
}
sumar2();


let jaja = "hola";
console.log(jaja);

let total = 0;

function carritoAgregar(precio){
    return total+= precio
}
total = carritoAgregar(200);
total = carritoAgregar(400);

document.write(total);


let carrito = [
    'casa', 'pasto', 'avion', 'audifonos', 'monitor'
];

for (let i=0; carrito.length > i; i++) {
   console.log(carrito[i]);
};


for(let i=0; i>10; i++) {
    if (i % 2 ==0) {
        document.write("es par")
    } else {
        document.write("impar")
    }
};


//while do aca se revisa si es verdadera y se ejecuta//
let i = 0;                     //indice

while(i<10){      
   document.write(i)            //condicion
}
i++;                           //incremento


//do while loop  aca se ejecuta y despues se chequea si es verdad. al menois se imoprime una vez

let i = 100;

do {
    console.log(i);
  i++;
} while (i<10);

//foreach para iterar arrays y mostrarlos en pantalla una sola vez de manera mas corta

carrito.forEach (function(producto) {                 //completo
    console.log(producto.nombre)
});
carrito.forEach(producto => console.log(producto.nombre); //en flecha

//formap es para iterar pero se usa para modificar una lista o hacere una nueva. se tiene q meter en una variable para usar//

const arreglo2 = carrito.map(producto => producto.nombre ); //se da implicito q va a un return q se guarda en la variable arreglo2


let informacion = {
    nombre: "ariel",
    edad: 25,
    datos: funcion() {
        console.log(`el nombre es: ${this.nombre} la edad es: ${this.edad}`);
    }
};

document.write(informacion.datos); //no se puede usar funcion flecha xq hace referencia al global y no al objeto. al ponerle this.nombre


//clases

class producto {
      constructor(nombre,precio) {
        this.nombre = nombre;
        this.precio = precio;
      }

      formatearProducto(){
        return `el producto ${this.nombre} tiene un precio de: ${this.precio}`;

      precioProducto() {
        return `el precio del producto es: ${this.precio}`;
      }
      }
}
const producto = new producto('monitor curvo', 200);
console.log(producto)

//herencia

class Libro extends producto {                                    
   constructor(nombre,precio,isbn) {
    super (nombre, precio);                // con super me evita el error al hacer el constructor asi pasa la info del padre
    this.isbn = isbn;                      // el nuevo parametro de libro q no tiene el padre
   }
   formatearProducto(){
    return `el producto ${this.nombre} tiene un precio de: ${this.precio} y tiene un isbn: ${this.isbn}`;   // se hereda del padre pero puedo reusarla para agregar isbn   
   }
}
console.log(Libro);
console.log(Libro.formatearProducto);


try {
    console.log(numero2);
} catch (error) {
    console.log(error);
}

//try catch a oprueba de errores

//promises
const usuarioAutenticado = new Promise(function(resolve, reject) {
    const auth = true;
    if(auth) {
       resolve('usuario autenticado');
    } else {
        reject('no se a podido iniciar sesion');

    }
});                                                //es como una promesa ionvitacion a salir si, no, en algun futuro 
                                                //si el auth es verdadero se cumple el promise y se ejecuta el resolve de la funcion. si no se reject

    usuarioAutenticado 
   .then(function(resultado){
      console.log(resultado)
   }) 
    .catch(function(error){
        console.log(error)
    });    //.catch para mostrar el reject delk promise
   
   //para ver el primise tengo q crearle una funcion .then q seria entonces y q me muestre el resultado del primiseq seria usuario autenticado = resultado de la funcion.                                     
     console.log(usuarioAutenticado);         // aca ya l;o veo en consola mas claro para alguna api base de datos etc.

    //en los promises exiten tres condiciones
    //pending: cuando no se ha rechazado ni cumplido
    //fufilled : cuando se cumplio
    //rejected: cuando esta rechazado

    function obtenerEmpleados(){
        const archivo = 'empleados.json'
        fetch(archivo)        //fetch('empleados.json') mejor crear una constante
        .then(resultado=> {
            console.log(resultado)
        })
    }
    obtenerEmpleados();