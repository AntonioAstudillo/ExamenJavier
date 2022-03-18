

<?php

   require_once '../controllers/MaestroController.php';

?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Vista Maestro</title>
      <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
   </head>
   <body>
      <div class="">

         <div class="container-login100">
            <div class="wrap-login100">
               <div class="container">
                  <table id="tabla" class="table">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Apellidos</th>
                           <th scope="col">Correo</th>
                           <th scope="col">Puntaje</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($resultado as $key): ?>
                           <tr>
                              <th scope="row"><?php echo $key['idalumno']; ?></th>
                              <td> <?php echo $key['nombre']; ?> </td>
                              <td> <?php echo $key['apellidos']; ?> </td>
                              <td> <?php echo $key['correo']; ?> </td>
                              <td> <?php echo $key['puntaje']; ?> </td>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
   <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" charset="utf-8"></script>
   <script src="../assets/js/maestro.js" charset="utf-8"></script>
</html>
