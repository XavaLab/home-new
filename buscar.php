<?php
include("conexion.php");
$con=conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="..." type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <title>Buscar</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="Busqueda">
        <input type="submit" name="enviar" value="Busqueda" class="btn btn-primary">
    </form>

    <div class="col-md-12">
			<table class="table" >
				<thead class="table-success table-striped" >
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Género</th>
						<th>Dirección</th>
						<th>Fecha de Nacimiento</th>
						<th>RUT</th>
						<th></th>
						<th></th>
					</tr>

                    <?php

if(isset($_GET['enviar'])){
    $Busqueda = $_GET['Busqueda'];

    $consulta = $con->query("SELECT * FROM tabla WHERE Nombre LIKE '$Busqueda'");

    while ($row = $consulta->fetch_array()){
        echo $row['Nombre'];
        echo $row['Apellidos'];
        echo $row['Sexo'];
        echo $row['Direccion'];
        echo $row['FNacimiento'];
        echo $row['RUT'];

    }
}

?>
				</thead>


			</table>
		</div>

</body>

</html>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>