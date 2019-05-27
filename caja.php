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

  <h2>RECIBO DE CAJA</h2>
  <form action="/action_page.php">
    
  <div class="row">
  <div class="col-sm-12">
    <div class="form-group">
      <label for="codigo">Codigo del recibo(RC):</label>
      <input type="text" class="form-control" id="codigo" placeholder="Ingrese el codigo" name="codigo">
    </div>
    <div class="form-group">
      <label for="prefijo">Prefijo del recibo:</label>
      <input type="text" class="form-control" id="prefijo" placeholder="Ingrese el prefijo" name="prefijo">
    </div>
    <div class="form-group">
      <label for="fecha">Fecha de creacion del recibo(dd/MM/yyyy):</label>
      <input type="date" class="form-control" id="fecha" placeholder="dd/MM/yyyy" name="fecha">
    </div>
    <div class="form-group">
      <label for="tercero">Codigo del tercero cliente:</label>
      <input type="text" class="form-control" id="cliente" placeholder="Ingrese el codigo del tercero cliente." name="tercero">
    </div>
	
	<div class="form-group">
      <label for="cobrador">Codigo del tercero cobrador:</label>
      <input type="text" class="form-control" id="cobrador" placeholder="Ingrese el codigo del tercero cobrador." name="cobrador">
    </div>
<hr>
<button data-toggle="modal" data-target="#myModalNorm" type="button" class="btn">Agregar items del recibo de caja</button>
	 <hr>
	    <div class="col-ms-6">
	    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ONUMDOCUM</th>
                <th>OITEM</th>
                <th>OCODCONCEPTO</th>
                <th>OCODTERCERO</th>
				<th>OVALOR</th>
            </tr>
        </thead>
        <tfoot>
          
        </tfoot>
    </table>
	 </div>
	 <hr>
	 <button data-toggle="modal" data-target="#myModalNorm2" type="button" class="btn">Agregar forma de pago del recibo de caja.</button>
	 <hr>
	 <div class="col-ms-6">
	 
	    <table id="example2" class="display" style="width:100%">
        <thead>
            <tr>
                <th>OFORMAPAGO</th>
                <th>OCODBANCO</th>
                <th>OVALOR</th>
                <th>OCODTERCERO</th>
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
                    <label for="documento">Numero del documento</label>
                      <input type="text" class="form-control"
                      id="onumdocum" placeholder="Ingrese el numero de documento"/>
                  </div>
                  <div class="form-group">
                    <label for="item">ITEM del documento.</label>
                      <input type="text" class="form-control"
                          id="oitem" placeholder="Ingrese el ITEM del documento."/>
                  </div>
				  
				  <div class="form-group">
                    <label for="concepto">Codigo del concepto.</label>
                      <input type="text" class="form-control"
                          id="ocodconcepto" placeholder="Ingrese el Codigo del concepto."/>
                  </div>
				  
				  <div class="form-group">
                    <label for="tercero">Codigo del  cliente.</label>
                      <input type="text" class="form-control"
                          id="ocodtercero" placeholder="Ingrese el Codigo del clientes."/>
                  </div>
				  
				  <div class="form-group">
                    <label for="valor">Valor del documento.</label>
                      <input type="text" class="form-control"
                          id="ovalor" placeholder="Ingrese el Valor del documento."/>
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

<div class="modal fade" id="myModalNorm2" tabindex="-1" role="dialog" 
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
                    <label for="documento">Codigo tipo de forma de pago</label>
                      <input type="text" class="form-control"
                      id="oformapago" placeholder="Ingrese el codigo tipo de forma de pago"/>
                  </div>
                  <div class="form-group">
                    <label for="item">Codigo del banco</label>
                      <input type="text" class="form-control"
                          id="ocobanco" placeholder="Ingrese el codigo del banco"/>
                  </div>
				  
				  <div class="form-group">
                    <label for="concepto">Valor del pago</label>
                      <input type="text" class="form-control"
                          id="ovalor2" placeholder="Ingrese el valor del pago"/>
                  </div>
				  
				  <div class="form-group">
                    <label for="tercero">Codigo del tercero cliente.</label>
                      <input type="text" class="form-control"
                          id="ocodtercero2" placeholder="Ingrese el Codigo del concepto."/>
                  </div>
				 

                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button id="btn-close-tb2" type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button id="btn-save-tb2" type="button" class="btn btn-primary">
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
           { "data": "onumdocum" },
           { "data": "oitem" },
           { "data": "ocodconcepto" },
           { "data": "ocodtercero" },
           { "data": "ovalor" }
  ]
	}); 
	var t2 = $('#example2').DataTable({
		 "sDom": 't',
		 "columns": [
           { "data": "oformapago" },
           { "data": "ocobanco" },
           { "data": "ovalor" },
           { "data": "ocodtercero" }]
	}); 
	
	function limpiarModal1(){
		$('#onumdocum').val('');
		$('#oitem').val('');
		$('#ocodconcepto').val('');
		$('#ocodtercero').val('');
		$('#ovalor').val('');
	}
	
	function limpiarModal2(){
		$('#oformapago').val('');
		$('#ocobanco').val('');
		$('#ovalor2').val('');
		$('#ocodtercero2').val('');
	}
	
	function limpiarForm(){
		$('#codigo').val('');
		$('#prefijo').val('');
		$('#fecha').val('');
		$('#cliente').val('');
		$('#cobrador').val('');
	}
	
	$('#btn-save-tb1').on('click',function(){
		const row = {
			onumdocum: $('#onumdocum').val(),
			oitem: $('#oitem').val(),
			ocodconcepto: $('#ocodconcepto').val(),
			ocodtercero: $('#ocodtercero').val(),
			ovalor: $('#ovalor').val()
		
		}
		t1.row.add(row).draw();
		limpiarModal1();
		$('#myModalNorm').modal('toggle');
		
	})
	
	$('#btn-save-tb2').on('click',function(){
		const row = {
			oformapago: $('#oformapago').val(),
			ocobanco: $('#ocobanco').val(),
			ovalor: $('#ovalor2').val(),
			ocodtercero: $('#ocodtercero2').val()
		
		}
		t2.row.add(row).draw();
		limpiarModal2();
		$('#myModalNorm2').modal('toggle');
		
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
		
		const table2 = t2.rows().data();
		delete table2.context;
        delete table2.selector;
        delete table2.ajax;
		
		const dataAsArray2 = [];
		
		for(i=0;i<table1.length;i++){
          dataAsArray2.push(table2[i]);
        }
		
		const data_send ={
			OCODCOMP: $('#codigo').val(),
		    OCODPREFIJO: $('#prefijo').val(),
			OFECHA: $('#fecha').val(),
			OCODCLIENTE: $('#cliente').val(),
		    OCODCOBRADOR: $('#cobrador').val(),
			OITEMSRECIBO: dataAsArray1,
			OITEMSRECIBOFP: dataAsArray2
		}
		$.ajax({
			url: 'php/registrar_caja.php',
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