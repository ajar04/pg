 <html>
<head> 
	<title>CONFECCIONES YAMILE</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css">
 

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

  <h2>PEDIDO DE VENTA</h2>
  <form action="/action_page.php">
    
  <div class="row">
  <div class="col-sm-12">
    <div class="form-group">
      <label for="codigo">Codigo del pedido(PV):</label>
      <input type="text" class="form-control" id="ocodcomp" placeholder="Ingrese el codigo" name="codigo">
    </div>
    <div class="form-group">
      <label for="prefijo">Prefijo del pedido:</label>
      <input type="text" class="form-control" id="ocodprefijo" placeholder="Ingrese el prefijo" name="prefijo">
    </div>
    <div class="form-group">
      <label for="pedido">Numero del pedido.:</label>
      <input type="text" class="form-control" id="onumero" placeholder="Ingrese el numero del pedido" name="pedido">
    </div>
    <div class="form-group">
      <label for="fecha">Fecha de creacion del pedido(dd/MM/yyyy).:</label>
      <input type="date" class="form-control" id="ofecha" placeholder="Ingrese Fecha de Creacion" name="fecha">
    </div>
	
	<div class="form-group">
      <label for="cliente">Codigo del tercero cliente:</label>
      <input type="text" class="form-control" id="ocodcliente" placeholder="Ingrese el Codigo del tercero cliente" name="cliente">
    </div>
	<div class="form-group">
      <label for="pago">Codigo tipo de forma de pago:</label>
      <input type="text" class="form-control" id="ocodformapago" placeholder="Ingrese el Codigo tipo de forma de pago" name="pago">
    </div>
<hr>
<button data-toggle="modal" data-target="#myModalNorm" type="button" class="btn">Agregar items del recibo de caja</button>
	 <hr>
	    <div class="col-ms-6">
	    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>OCODMAT</th>
                <th>OCODBODEGA</th>
                <th>OCANTIDAD</th>
                <th>OTIPOUNIDAD</th>
				<th>OVALOR</th>
            </tr>
        </thead>
        <tfoot>
          
        </tfoot>
    </table>
	 </div>


    </div>


  </form>
  <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Modal title
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form">
                  <div class="form-group">
                    <label for="documento">Codigo del Articulo</label>
                      <input type="text" class="form-control" id="ocodmat" placeholder="Ingrese el Codigo del Articulo" />
                  </div>
                  <div class="form-group">
                    <label for="item">Codigo de la bodega.</label>
                      <input type="text" class="form-control"
                          id="ocodbodega" placeholder="Ingrese el Codigo de la bodega."/>
                  </div>
				  
				  <div class="form-group">
                    <label for="concepto">Cantidad.</label>
                      <input type="text" class="form-control"
                          id="ocantidad" placeholder="Ingrese la Cantidad."/>
                  </div>
				  
				  <div class="form-group">
                    <label for="tercero">Codigo tipo unidad(M ó D).</label>
                      <input type="text" class="form-control"
                          id="otipounidad" placeholder="Ingrese el Codigo tipo unidad(M ó D)."/>
                  </div>
				  
				  <div class="form-group">
                    <label for="valor">Valor.</label>
                      <input type="text" class="form-control"
                          id="ovalor" placeholder="Ingrese el Valor."/>
                  </div>

                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button id="btn-close-tb1" type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button id="btn-save-tb1" type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>



<button id="btn-save-form" type="button" class="btn">Enviar.</button>
</div>
<script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.dataTables.js"></script>
<script>
 $(document).ready(function() {
    var t1 = $('#example').DataTable({
		 "sDom": 't',
		 "columns": [
           { "data": "ocodmat" },
           { "data": "ocodbodega" },
           { "data": "ocantidad" },
           { "data": "otipounidad" },
           { "data": "ovalor" }
  ]
	}); 

	
	function limpiarModal1(){
		$('#ocodmat').val('');
		$('#ocodbodega').val('');
		$('#ocantidad').val('');
		$('#otipounidad').val('');
		$('#ovalor').val('');
	}
	

	
	function limpiarForm(){
		$('#ocodcomp').val('');
		$('#ocodprefijo').val('');
	    $('#onumero').val('');
	    $('#ofecha').val('');
		$('#ocodcliente').val('');
		$('#ocodformapago').val('');
	}
	
	$('#btn-save-tb1').on('click',function(){
		const row = {
			ocodmat: $('#ocodmat').val(),
			ocodbodega: $('#ocodbodega').val(),
			ocantidad: $('#ocantidad').val(),
			otipounidad: $('#otipounidad').val(),
			ovalor: $('#ovalor').val()
		
		}
		t1.row.add(row).draw();
		limpiarModal1();
		$('#myModalNorm').modal('toggle');
		
	})
	
	
	$('#btn-save-form').on('click',function(){
		const table1 = t1.rows().data();
		delete table1.context;
        delete table1.selector;
        delete table1.ajax;
		
		const dataAsArray1 = [];
		
		for(i=0;i<table1.length;i++){
          dataAsArray1.push(table1[i]);
        }
	
		
		const data_send ={
			OCODCOMP: $('#ocodcomp').val(),
		    OCODPREFIJO: $('#ocodprefijo').val(),
			ONUMERO: $('#onumero').val(),
			OFECHA: $('#ofecha').val(),
		    OCODCLIENTE: $('#ocodcliente').val(),
			OCODFORMAPAGO: $('#ocodformapago').val(),
			OITEMSPEDIDO : dataAsArray1
		}
		$.ajax({
			url: 'php/registrar_venta.php',
			type: 'POST',
			data: JSON.stringify(data_send),
			contentType: 'application/json; charset=utf-8',
			dataType: 'json',
			async: false,
			success: function(msg) {
				if(msg.status == 'OK'){
					window.location.href = "index.php";
				}else {
                   swal("Sistema!", JSON.stringify(msg));					
				}
				
			}
		});
	})
	
} );
</script>
</body>
</html>