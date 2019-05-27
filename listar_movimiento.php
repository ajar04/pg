<?php
$url = "https://tns.net.co:726/api/Tercero/?empresa=88265144&usuario=ADMIN&password=F9480Q&tnsapitoken=12345&filtro=";
$apiTercero = file_get_contents($url);
$apiTercero = json_decode($apiTercero);
if(isset($_GET['cliente'])){

    $cliente=$_GET["cliente"];
    $url="https://tns.net.co:726/api/Tercero?empresa=88265144&usuario=ADMIN&password=F9480Q&tnsapitoken=12345&&codcliente=".$cliente."&codsucursal=00";
    $apijson= array();
    $apijson= file_get_contents($url);
    $apijson = json_decode($apijson);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
      <div class="col-sm-4" href="index.php">
        <br>
        <a href="index.php"> <img src="../gyt/img/ym.jpg"  style="height: 100px; "> </a>
      </div>
      <div class="col-sm-8">
        <br>
      
      </div>
    </div>
  <h2>Listar Movimientos</h2>
  <br>
  <form>
  <div class="input-group">
  <select name="cliente" class="form-control" id="exampleFormControlSelect1">
      <?php 
        if(isset($apiTercero) && isset($apiTercero->results)){
            $terceros = $apiTercero->results;
            foreach ($terceros as $value) {
                echo '<option value ="'.$value->OCODIGO.'">'.$value->OCODIGO.'- '.$value->ONOMBRE.'</option>';
            }
        }
      ?>
      
    </select>
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Codigo del Documento</th>
        <th>N°</th>
        <th>Fecha de creacion</th>
        <th>Fecha de vencimiento</th>
        <th>Valor</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>

      </tr>
    </thead>
    <tbody id="myTable">
    <?php 
      if(isset($_GET['cliente'])){
 
        if(isset($apijson)  ){

            $result = $apijson->results;
            $documentos = $result->Documentos;
            foreach ($documentos as $value) {
                echo '<tr>';
                echo "<td>$value->OCODCOMP</td> <td>$value->ONUMERO</td> <td>$value->OFECVENCE</td> <td>$value->OVALOR</td> <td>$value->ONETO</td> <td>$value->ONOMBRE</td> <td>$value->ODIRECCION</td>  <td>$value->OTELEFONO</td>";
                echo '</tr>';
            }
        }

        
      } 
    ?>

    </tbody>
  </table>
  
</div>



</body>
</html>
