window.onload = main;


function main(){
   let btnCrear = document.getElementById('btnCrear');
   let btnIniciar = document.getElementById('btnIniciar');

   btnCrear.addEventListener('click' , crearUsuario);
   btnIniciar.addEventListener('click' , crearUsuario);
}

function crearUsuario()
{
   //Instanciamos objeto HTTPREQUEST para poder realizar las peticiones
   let objeto = new XMLHttpRequest();
   let data = new FormData();


   data.append('nombre' , document.getElementById('nombre').value);
   data.append('apellidos' , document.getElementById('apellidos').value);
   data.append('email' , document.getElementById('email').value);
   data.append('password' , document.getElementById('password').value);
   data.append('tipo' , document.getElementById('tipo').value);
   objeto.open('POST' , 'controllers/PersonaController.php');

   objeto.onreadystatechange = function()
   {
      if(objeto.readyState == 4 && objeto.status ==  200 )
      {
         console.log(objeto.responseText);

         if(objeto.responseText == 'true')
         {
             Swal.fire(
               'Buen trabajo!',
               'Te registraste de forma correcta!',
               'success'
            ).then(function(){
               document.getElementById('formRegistro').reset();
               $('#exampleModalCenter').modal('hide');
            });

         }
         else
         {

         }
      }
   }

   objeto.send(data);
}
