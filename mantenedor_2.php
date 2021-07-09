<?php include("include/conexion.php"); //incluye la conecxion a la BD 
?>
<?php include("include/head.php"); //incluye archivo head.php 
?>


<body>

    <h1> Bienvenido a MANTENEDOR 2 </h1>

    <div class="contenedor -4">
        <div class="row">
            <!--fila con 2 columnas -->
            <div class="col-md-4">
                <div class="card card-body">
                    <!--aca va el formulario-->
                    <form action="save.php" method="POST">
                        <div class="div">
                            <a>apellido paterno</a><br>
                            <input type=text name="apellido_paterno" class="form-control" plasceholder="Ingresar nombre"><br><br>
                        </div>
                        <div class="div">
                            <a>apellido materno</a><br>
                            <input type=text name="apellido_materno" class="form-control" plasceholder="Ingresar nombre"><br><br>
                        </div>
                        <div class="div">
                            <a>nombre</a><br>
                            <input type=text name="nombre" class="form-control" plasceholder="Ingresar nombre"><br><br>
                            
                        </div>
                        <div class="div">
                            <a>Rut</a><br>
                            <input type=text name="rut" class="form-control" plasceholder="Ingresar nombre"><br><br>
                            
                        </div>
                        <div class="div">
                            <a>año Ingreso</a><br>
                            <input type=text name="ano_ingreso" class="form-control" plasceholder="Ingresar nombre"><br><br>
                            
                        </div>
                        <div class="div">                            
                            <input type="submit" value="Ingresar" name= "guardando_datos"><br><br>
                            
                        </div>
                    </form>


                </div>

            </div>
            <div class="col-md-8">

            </div>
        </div>



    </div><br>












    <a href="index.html" class="boton">VOLVER</a>
</body>

</html>
<!-- boostrp java script -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>