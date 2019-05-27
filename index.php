  <?php
    include_once('./php/listar_terceros.php');
  ?>

<html>
<head> 

	<title>CONFECCIONES YAMILE</title>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>

  

  function funcion1(){
    window.location.href='caja.php';
}
</script>



</head>



<body>

<div class="container">
  	<div class="row">
      <div class="col-sm-4" href="index.php">
        <br>
        <a href="index.php"> <img src="img/ym.jpg"  style="height: 100px; "> </a>
      </div>
      <div class="col-sm-8">
        <br>
      
      </div>
    </div>	


    <br/>
    <input type="submit" name="" value="Listar Movimiento" id="boton0" onclick =  "window.location.href='listar_movimiento.php'";>
    <input type="submit" name="" value="Listar Terceros" id="boton1" onclick = "funcion();">
    <input type="submit" name="" value="Recibo de Caja" id="boton2" onclick = "funcion1();">
    <input type="submit" name="" value="Registrar Venta" id="boton4" onclick = "window.location.href='venta.php'";>
	  <input type="submit" name="" value="Registrar Tercero" id="boton4" onclick = "window.location.href='registrar_tercero.php'";>
    <br/> <br/>
    <input class="form-control" id="myInput" type="text" placeholder="Search.."><br>

    <table class="table table-bordered table-striped">
        <tbody id="myTable">
        <thead>
            <tr>
                
                <th>NIT</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Direccion</th>
                <!-- <th>Telefono</th>-->
            </tr>
        </thead>
        
        <tbody id="myTable"></tbody>
      </tbody>
    </table>
</div>
<!--<script src="../php/listar_terceros.php"></script>-->
</body>
</html>
			

    