<?php
    function accion(){
        $url = "https://tns.net.co:726/api/Tercero/?empresa=88265144&usuario=ADMIN&password=F9480Q&tnsapitoken=12345&filtro=";
		$apijson = file_get_contents($url);
		$apiarray = json_decode($apijson,true);
		
		$satus = $apiarray["status"];
		   
		$results = $apiarray["results"];
		$tabla = '';
		
		if($satus === "OK"){
			if(count($results) > 0){

				foreach ($results as $v) {
				   $tabla .= '<tr>'.
							 
							 '<td>'.$v["OTERID"].'</td>'.
							 '<td>'.$v["ONOMBRE"].'</td>'.
							 '<td>'.$v["OCODIGO"].'</td>'.
							  '<td>'.$v["ODIRECC1"].'</td>'.
							 // '<td>'.$v["OTELEF1"].'</td>'.
							 '</tr>';
				}
			}
			else{
				$tabla = '<tr><td colspan="5">NO SE ENCONTRARON REGISTROS</td></tr>';
			}
		}
		else{
			$tabla = '<tr><td colspan="5">'.$results.'</td></tr>';
		}
		echo($tabla);
    }    

?>

{
  "OTERID": 5824,
  "OCODIGO": "sample string 2",
  "ONATJURIDICA": "A",
  "OTIPODOCIDEN": "A",
  "ONIT": "sample string 5",
  
  "ONOMBRE": "sample string 8",
  "ONOMREGTRI": "sample string 9",
  
  "ODIRECC1": "sample string 14",
  "OCODCIUDANE": "sample string 15",
  "OCIUDAD": "sample string 16",
  "OZONA1": "sample string 17",
  "OCLASIFICACION": "sample string 18",
  "OINACTIVO": true,
  "OPRIVADA": "A",
  "OMIXTA": "A",
  "OTELEF1": "sample string 22",
  "OEMAIL": "sample string 23",
  "OCOMISION": 24.1
}



<script>

  function funcion(){
    $("#myTable").empty();
    $("#myTable").append('<?php echo accion(); ?>');
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});



  }

  
</script>