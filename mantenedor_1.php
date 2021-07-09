<?php include("include/conexion.php"); //incluye la conecxion a la BD 
?>
<?php include("include/head.php"); //incluye archivo head.php 
?>


<body>
	<h1> Bienvenido a MANTENEDOR 1 </h1>
	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-8">
						<h2>Agregar <b>Cliente</b></h2>
					</div>
					<div class="col-sm-4">
						<a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
					</div>
				</div>
			</div>

			<div class="row">
				<form method="post">
					<div class="col-md-6">
						<label>Nombres:</label>
						<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required>
					</div>
					<div class="col-md-6">
						<label>Apellidos:</label>
						<input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="100" required>
					</div>
					<div class="col-md-12">
						<label>Dirección:</label>
						<textarea name="direccion" id="direccion" class='form-control' maxlength="255" required></textarea>
					</div>
					<div class="col-md-6">
						<label>Teléfono:</label>
						<input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required>
					</div>
					<div class="col-md-6">
						<label>Correo electrónico:</label>
						<input type="email" name="correo_electronico" id="correo_electronico" class='form-control' maxlength="64" required>

					</div>

					<div class="col-md-12 pull-right">
						<hr>
						<button type="submit" class="btn btn-success">Guardar datos</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- //boton vover al incio -->
	<a href="index.html" class="boton">VOLVER</a>

</body>

</html>