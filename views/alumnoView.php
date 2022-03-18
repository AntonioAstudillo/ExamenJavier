<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Vista Alumno</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://use.fontawesome.com/e6193be8b0.js"></script>
   </head>
   <body>
      <div class="limiter">
        <div class="container-login100">
           <div class="container  p-3 ">
             <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-dark" id="btnSalir" name="button">Salir</button>
             </div>
           </div>

           <div class="container bg-white p-3 rounded">
             <div class="d-flex justify-content-between">
                 <p class="text-center">Puntos: <span id="puntos" class="puntos">0</span> </p>
             </div>
           </div>
            <div class="container p-3 rounded">
               <div class="d-flex justify-content-between">
                  <div class="">
                     <button id="suma" class="btn btn-primary" type="button" name="button"><i class="fa-solid fa-square-plus"></i></button>
                  </div>
                  <div class="">
                     <button id="resta" class="btn btn-secondary" type="button" name="button"><i class="fa-solid fa-minus"></i></button>
                  </div>
                  <div class="">
                     <button id="multi" class="btn btn-success" type="button" name="button"><i class="fa-solid fa-xmark"></i></button>
                  </div>
                  <div class="">
                     <button id="div" class="btn btn-warning" type="button" name="button"><i class="fa-solid fa-divide"></i></button>
                  </div>
               </div>
            </div>
            <div class="container bg-white p-3">
               <div class="d-flex justify-content-center">
                  <span id="valor1" class="text-dark p-2">0</span>
                  <span id="signo" class="text-dark p-2">?</span>
                  <span id="valor2" class="text-dark p-2">0</span>
               </div>
            </div>
            <div class="p-3">
               <div class="row">
                  <div class="col">
                     <input class="form-control bg-white text-dark" type="text" id="resultado" value="" placeholder="valor">
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col text-center">
                     <button  id="btnEjecutar"class="btn btn-danger" type="button" name="button">Ejecutar</button>
                  </div>
               </div>
            </div>
        </div>
      </div>
   </body>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="../assets/js/alumno.js" charset="utf-8"></script>
</html>
