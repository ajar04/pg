
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
<td>
  <form method="post">
<input placeholder="CODIGO TERCERO" id="codigo" name="codigo" type="text"><br>
<input placeholder="NATURAL/JURIDICA" name="natjurid" id="natjurid" type="text"><br>
<input placeholder="TIPO DOCUMENTO IDENTIDAD" name="tipdoc" id="tipdoc" type="text"><br>
<input placeholder="Numero de documento" name="nit" id="nit" type="text"><br>
<input placeholder="Nombre completo del tercero" name="nomb" id="nomb" type="text"><br>
<input placeholder="Nombre tributario" name="nombtrib" id="nombtrib" type="text"><br>
<input placeholder="Direccion" name="dir" id="dir" type="text"><br>
<input placeholder="Codigo de la ciudad" name="resid" id="resid" type="text"><br>
<input placeholder="Nombre de la ciudad " name="nomciud" id="nomciud" type="text"><br>
<input placeholder="Codigo de la zona " name="zon1" id="zon1" type="text"><br>
<input placeholder="Codigo de la clasificacion" name="clasif" id="clasif" type="text"><br>
<input placeholder="Inactividad del tercero" name="inactivo" id="inactivo" type="text"><br>
<input placeholder="Tercero juridico privado(S/N)" name="priv" id="priv" type="text"><br>
<input placeholder="Tercero juridoco mixto(S/N)" name="mixta" id="mixta" type="text"><br>
<input placeholder="Telefono del tercero" name="tel1" id="tel1" type="text"><br>
<input placeholder="Email del tercero" name="email" id="email" type="email"><br>
<input placeholder="Comision del vendedor" name="comsion" id="comsion" type="text"><br>


    <div class="ico" id="registrar" >
            <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
            <input type="submit" name="" value="Registrar Terceros" id="boton1" onclick = "funcion();">
        </div>

        </form>
 </td>

</body>

</html>
           <script>
			var http = new XMLHttpRequest();
			var url = "https://tns.net.co:726/api/Tercero/?empresa=88265144&usuario=ADMIN&password=F9480Q&tnsapitoken=12345&";
			// var email = document.getElementById('email');
			// var password = document.getElementById('pass');
			// http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
			http.open("POST", url, true);

			http.onreadystatechange = function() {
			    if(http.readyState == 4 && http.status == 200) { 
			       //aqui obtienes la respuesta de tu peticion
			       alert(http.responseText);
			    }
			}
			http.send(JSON.stringify({OCODIGO: codigo,  ONATJURIDICA: natjurid,  OTIPODOCIDEN: tipdoc,  ONIT: nit,    ONOMBRE: nomb,  ONOMREGTRI: nombtrib,    ODIRECC1: dir,  OCODCIUDANE: resid,  OCIUDAD: nomciud,  OZONA1: zon1,  OCLASIFICACION: clasif,  OINACTIVO: inactivo,  OPRIVADA: priv,  OMIXTA: mixta,  OTELEF1: tel1,  OEMAIL: email,  OCOMISION: comsion}));
 </script>

<script>
        	$('#registrar').click(function(){
        

       var data =  {OCODIGO: $('#codigo').val(),  ONATJURIDICA: $('#natjurid').val(),  OTIPODOCIDEN: $('#tipdoc').val(),  ONIT: $('#nit').val(),    ONOMBRE: $('#nomb').val(),  ONOMREGTRI: $('#nombtrib').val(),    ODIRECC1: $('#dir').val(),  OCODCIUDANE: $('#resid').val(),  OCIUDAD: $('#nomciud').val(),  OZONA1: $('#zon1').val(),  OCLASIFICACION: $('#clasif').val(),  OINACTIVO: $('#inactivo').val(),  OPRIVADA: $('#priv').val(),  OMIXTA: $('#mixta').val(),  OTELEF1: $('#tel1').val(),  OEMAIL: $('#email').val(),  OCOMISION: $('#comsion').val()}

     
        $.ajax({
                url : 'https://tns.net.co:726/api/Tercero/?empresa=88265144&usuario=ADMIN&password=F9480Q&tnsapitoken=12345&'
                data : data; 
                method : 'post'; //en este caso
                dataType : 'json';
                success : function(response){
                       //codigo de exito
                },
                error: function(error){
                       //codigo error
                }
        });
});

        </script>