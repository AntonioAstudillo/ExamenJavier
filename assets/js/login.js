window.onload = main;


function main()
{
   let btnCrear = document.getElementById('btnCrear');
   let btnIniciar = document.getElementById('btnIniciar');

   btnCrear.addEventListener('click' , crearUsuario);
   btnIniciar.addEventListener('click' , ingresar);
}

function crearUsuario()
{
   if(validarCampos())
   {
      //Instanciamos objeto HTTPREQUEST para poder realizar las peticiones
      let objeto = new XMLHttpRequest();
      let data = new FormData();

      data.append('nombre' , document.getElementById('nombre').value);
      data.append('apellidos' , document.getElementById('apellidos').value);
      data.append('email' , document.getElementById('email').value);
      data.append('password' , document.getElementById('password').value);
      data.append('tipo' , document.getElementById('tipo').value);
      data.append('bandera' , '1');

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
               Swal.fire(
                 'Ups!',
                 'Tuvimos un problema al registrarte!',
                 'error'
              ).then(function(){
                 document.getElementById('formRegistro').reset();
                 $('#exampleModalCenter').modal('hide');
              });
            }
         }
      }

      objeto.send(data);
   }
   else
   {
      Swal.fire(
        'Datos incorrectos!',
        'Debe llenar el formulario correctamente!',
        'error'
     );
   }
}//cierra funcion crearUsuario

function ingresar(e)
{

   e.preventDefault();
   //Instanciamos objeto HTTPREQUEST para poder realizar las peticiones
   let objeto = new XMLHttpRequest();
   let data = new FormData();

   data.append('pass' , document.getElementById('passLogin').value);
   data.append('email' , document.getElementById('emailLogin').value);
   data.append('bandera' , '2');


   objeto.open('POST' , 'controllers/PersonaController.php');

   objeto.onreadystatechange = function()
   {
      if(objeto.readyState == 4 && objeto.status ==  200 )
      {

         if(objeto.responseText == '1')
         {
            Swal.fire({
               position: 'top-end',
               icon: 'success',
               title: 'Bienvenido',
               showConfirmButton: false,
               timer: 1500
             }).then(function(){

                  localStorage.setItem('email', document.getElementById('emailLogin').value);
                  window.location.href = 'views/maestroView.php';
            });
         }
         else if(objeto.responseText == '2'){
            Swal.fire({
               position: 'top-end',
               icon: 'success',
               title: 'Bienvenido',
               showConfirmButton: false,
               timer: 1500
             }).then(function(){
                  localStorage.setItem('email', document.getElementById('emailLogin').value);
                  window.location.href = 'views/alumnoView.php';
            });
         }
         else
         {
            Swal.fire({
               position: 'top-end',
               icon: 'error',
               title: 'Usuario no registrado',
               showConfirmButton: false,
               timer: 1500
            });
         }
      }
   }

   objeto.send(data);
}

function validarCampos()
{
   if(document.getElementById('nombre').value == '' || document.getElementById('apellidos').value == '' || document.getElementById('email').value == '' ||             document.getElementById('password').value == '' || document.getElementById('tipo').value == '0' )
   {
      return false;
   }
   else
   {
      return true;
   }
}
