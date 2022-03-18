<!DOCTYPE html>
<html lang="en">
<head>
	<title>Examen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://use.fontawesome.com/e6193be8b0.js"></script>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" autocomplete="off">
					<span class="login100-form-title">
						Examen Javier
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" id="emailLogin" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password"  id="passLogin" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button id="btnIniciar" class="login100-form-btn">Iniciar Sesión</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#" data-toggle="modal" data-target="#exampleModalCenter">
							Crear una cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Registro Usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	         <div class="container">
               <form id="formRegistro" enctype="multipart/form-data" autocomplete="off">
						<div class="row mt-2">
							<div class="col-md-6 col-sm-12">
								<div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-arrow-up-a-z"></i></span>
                           <input id="nombre" type="text" class="form-control" placeholder="Nombre">
                        </div>
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-arrow-down-a-z"></i></span>
                           <input id="apellidos" type="text" class="form-control" placeholder="Apellidos" aria-label="Username">
                        </div>
							</div>
						</div>


						<div class="row mt-2">
							<div class="col-md-12 col-sm-12">
								<div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                           <input id="email" type="email" class="form-control" placeholder="Correo electronico" aria-label="Username">
                        </div>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-md-6 col-sm-12">
								<div class="input-group mb-3">
                           <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                           <input id="password" type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
									<select id="tipo" class="form-control" name="">
										<option value = "0" selected disabled>Elige una opción</option>
										<option value = "1">Maestro</option>
										<option value = "2">Alumno</option>
									</select>
							   </div>
							</div>
						</div>
               </form>
	         </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        <button id="btnCrear" type="button" class="btn btn-primary">Crear cuenta</button>
			  <input type="hidden" id="registro" name="registro" value="">
	      </div>
	    </div>
	  </div>
	</div>

	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/select2/select2.min.js"></script>
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="assets/js/login.js" charset="utf-8"></script>
</body>
</html>
