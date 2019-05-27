 <?php
   
   if (!empty($_POST)){
		$data = array(
		'OCODIGO' => $_POST['codigo'],
		'ONATJURIDICA' => $_POST['natjurid'],
		'OTIPODOCIDEN' => $_POST['tipdoc'],
		'ONIT' => $_POST['nit'],
		'ONOMBRE' => $_POST['nomb'],
		'ONOMREGTRI' => $_POST['nombtrib'],
		'ODIRECC1' => $_POST['dir'],
		'OCODCIUDANE' => $_POST['resid'],
		'OCIUDAD' => $_POST['nomciud'],
		'OZONA1' => $_POST['zon1'],
		'OCLASIFICACION' => $_POST['clasif'],
		'OINACTIVO' => $_POST['inactivo'],
		'OPRIVADA' => $_POST['priv'],
		'OMIXTA' => $_POST['mixta'],
		'OTELEF1' => $_POST['tel1'],
		'OEMAIL' => $_POST['email'],
		'OCOMISION' => $_POST['comsion']
		);
		
			$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('https://tns.net.co:726/api/Tercero?empresa=88265144&usuario=ADMIN&password=F9480Q&tnsapitoken=12345');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);

$result = curl_exec($ch);
   }
?>
<html>
<head> 

  <title>CONFECCIONES YAMILE</title>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
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

  <h2>REGISTRAR TERCERO</h2>
  <form method="post" action="registrar_tercero.php">
    <div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="codigo">Codigo del pedido(PV):</label>
      <input class="form-control" placeholder="CODIGO TERCERO" id="codigo" name="codigo" type="text">
    </div>
    <div class="form-group">
      <label for="pwd">Tipo Documento:</label>
      <input class="form-control" placeholder="TIPO DOCUMENTO IDENTIDAD" name="tipdoc" id="tipdoc" type="text">
    </div>
    <div class="form-group">
      <label for="email">Nombre Completo del tercero:</label>
      <input class="form-control" placeholder="Nombre completo del tercero" name="nomb" id="nomb" type="text">
    </div>
    <div class="form-group">
      <label for="pwd">Direccion:</label>
      <input class="form-control" placeholder="Direccion" name="dir" id="dir" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Nombre Ciudad:</label>
      <input class="form-control" placeholder="Nombre de la ciudad " name="nomciud" id="nomciud" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Codigo de la clasificacion:</label>
      <input class="form-control" placeholder="Codigo de la clasificacion" name="clasif" id="clasif" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Inactividad del tercero:</label>
      <input  class="form-control"  placeholder="Inactividad del tercero" name="inactivo" id="inactivo" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Tercero juridoco mixto(S/N):</label>
      <input class="form-control" placeholder="Tercero juridoco mixto(S/N)" name="mixta" id="mixta" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Email del tercero:</label>
      <input class="form-control" placeholder="Email del tercero" name="email" id="email" type="email">
    </div>
    
    </div>

    <div class="col-sm-6">
    <div class="form-group">
      <label for="email">Natural Juridica:</label>
      <input class="form-control" placeholder="NATURAL/JURIDICA" name="natjurid" id="natjurid" type="text">
    </div>
    <div class="form-group">
      <label for="pwd">Numero Documento:</label>
      <input class="form-control" placeholder="Numero de documento" name="nit" id="nit" type="text">
    </div>
    <div class="form-group">
      <label for="email">Nombre Tributario:</label>
      <input class="form-control" placeholder="Nombre tributario" name="nombtrib" id="nombtrib" type="text">
    </div>
    <div class="form-group">
      <label for="pwd">Codigo Ciudad:</label>
      <input class="form-control" placeholder="Codigo de la ciudad" name="resid" id="resid" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Codigo Zona:</label>
      <input class="form-control" placeholder="Codigo de la zona " name="zon1" id="zon1" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Tercero juridico privado (s/n):</label>
      <input class="form-control" placeholder="Tercero juridico privado(S/N)" name="priv" id="priv" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Telefono del tercero:</label>
      <input class="form-control" placeholder="Telefono del tercero" name="tel1" id="tel1" type="text">
    </div>
	
	<div class="form-group">
      <label for="pwd">Comision del vendedor:</label>
      <input class="form-control" placeholder="Comision del vendedor" name="comsion" id="comsion" type="text">
    </div>
</div>
</div>
 <?php 
if (!empty($_POST)){
	   
	   $obj = json_decode($result);
	  if($obj->status == 'OK'){
		echo '<script> window.location.href="index.php" </script>';
	  }else{
		echo '<div class="alert alert-info"> '.$result.'</div>';
	  }
 
	}
?>
    <button type="submit" class="btn btn-default">REGISTRAR TERCERO</button>
  </form>
</div>



</body>
</html>