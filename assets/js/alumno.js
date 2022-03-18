window.onload = main;


function main()
{
   let puntos = document.getElementById('puntos');
   let suma = document.getElementById('suma');
   let resta = document.getElementById('resta');
   let div = document.getElementById('div');
   let multi = document.getElementById('multi');
   let btn = document.getElementById('btnEjecutar');
   let btnSalir = document.getElementById('btnSalir');

   obtenerPuntaje();

   btn.onclick = comprobarResultado;
   suma.onclick = realizarSuma;
   resta.onclick = realizarResta;
   div.onclick = realizarDiv;
   multi.onclick = realizarMulti;
   btnSalir.onclick = salir;
}


function obtenerPuntaje()
{
   let objetoPuntaje = new XMLHttpRequest();
   let data = new FormData();

   data.append('correo' , localStorage.getItem('email'));
   objetoPuntaje.open('POST' , '../controllers/PersonaController.php',false);

   objetoPuntaje.onreadystatechange = function()
   {
      if(objetoPuntaje.readyState == 4 && objetoPuntaje.status ==  200 )
      {
         if(objetoPuntaje.responseText)
         {
            document.getElementById('puntos').textContent = objetoPuntaje.responseText;
         }
         else
         {
            alert("Hubo un error");
         }
      }
   }

   objetoPuntaje.send(data);
}

function salir()
{
   let objeto = new XMLHttpRequest();
   let data = new FormData();


   data.append('puntaje' , document.getElementById('puntos').textContent);
   data.append('correo' , localStorage.getItem('email'));
   data.append('bandera' , '3');
   objeto.open('POST' , '../controllers/PersonaController.php');

   objeto.onreadystatechange = function()
   {
      if(objeto.readyState == 4 && objeto.status ==  200 )
      {
         if(objeto.responseText)
         {
            Swal.fire({
               title: 'Almacenando puntuación!',
               html: 'Guardando cambios <b></b> milisegundos.',
               timer: 1500,
               timerProgressBar: true,
               didOpen: () => {
                  Swal.showLoading()
                     const b = Swal.getHtmlContainer().querySelector('b')
                     timerInterval = setInterval(() => {
                     b.textContent = Swal.getTimerLeft()
                     }, 100)
               },
               willClose: () => {
                  clearInterval(timerInterval)
               }
               }).then((result) => {
                  window.location.href = '../index.php';
               })
         }
         else
         {
            alert("Hubo un error");
         }
      }
   }

   objeto.send(data);
}

function realizarSuma()
{
   document.getElementById('valor1').textContent = generarNumero();
   document.getElementById('valor2').textContent = generarNumero();
   document.getElementById('signo').textContent = '+';
   document.getElementById('btnEjecutar').disabled = false;
}

function realizarResta()
{
   let valor1 , valor2;

   valor1 = generarNumero();
   valor2 = generarNumero();

   document.getElementById('btnEjecutar').disabled = false;

   if(valor1 < valor2){
      document.getElementById('valor1').textContent = valor2;
      document.getElementById('valor2').textContent = valor1;
   }else{
      document.getElementById('valor1').textContent = valor1;
      document.getElementById('valor2').textContent = valor2;
   }

   document.getElementById('signo').textContent = '-';
}

function realizarMulti()
{
   document.getElementById('btnEjecutar').disabled = false;
   document.getElementById('valor1').textContent = generarNumero();
   document.getElementById('valor2').textContent = generarNumero();
   document.getElementById('signo').textContent = '*';
}

function realizarDiv()
{
   let valor1 , valor2;

   document.getElementById('btnEjecutar').disabled = false;

   valor1 = generarNumero();
   valor2 = generarNumero();

   if(valor1 < valor2){
      document.getElementById('valor1').textContent = valor2;
      document.getElementById('valor2').textContent = valor1;
   }else{
      document.getElementById('valor1').textContent = valor1;
      document.getElementById('valor2').textContent = valor2;
   }

   document.getElementById('signo').textContent = '/';
}

function comprobarResultado()
{
   let valor1 = parseInt(document.getElementById('valor1').textContent);
   let valor2 = parseInt(document.getElementById('valor2').textContent);
   let signo = document.getElementById('signo').textContent;
   let resultado = document.getElementById('resultado').value;
   let puntos = parseInt(document.getElementById('puntos').textContent);

   document.getElementById('btnEjecutar').disabled = true;

   switch(signo)
   {
      case '+':
         if( (valor1 + valor2) == resultado  )
         {
            puntos = puntos + 5;
            document.getElementById('puntos').textContent = puntos;
            alert("Bien hecho");
         }
         else
         {
            puntos = puntos - 2;
            document.getElementById('puntos').textContent = puntos;
            alert('Respuesta incorrecta');
         }
      break;
      case '-':
         if( (valor1 - valor2) == resultado  )
         {
            puntos = puntos + 5;
            document.getElementById('puntos').textContent = puntos;
            alert("Bien hecho");
         }
         else
         {
            puntos = puntos - 2;
            document.getElementById('puntos').textContent = puntos;
            alert('Respuesta incorrecta');
         }
      break;
      case '*':
         if( (valor1 * valor2) == resultado  )
         {
            puntos = puntos + 10;
            document.getElementById('puntos').textContent = puntos;
            alert("Bien hecho");
         }else{
            puntos = puntos - 2;
            document.getElementById('puntos').textContent = puntos;
            alert('Respuesta incorrecta');
         }
      break;
      case '/':
         if( (valor1 / valor2).toFixed(2) == resultado  )
         {
            puntos = puntos + 10;
            document.getElementById('puntos').textContent = puntos;
            alert("Bien hecho");
         }
         else
         {
            puntos = puntos - 2;
            document.getElementById('puntos').textContent = puntos;
            alert('Respuesta incorrecta');
         }
      break;
   }
}


function generarNumero(){
   return Math.floor(Math.random() * (100 - 0)) + 0;
}
