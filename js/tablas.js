$(document).ready(function() {
	tablas();
	function tablas() {
		console.log();
		var data= "metodo=5&nombre="+$('.tiBD').html();
		$.ajax({
			url: 'consultas.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			$('#tablas').html(res);
		})
		.fail(function() {
			alert(res);
		})
	}

	$('#frmT').submit(function(e) {
		e.preventDefault();

		var indice = [], nombre = [], tipo = [], longitud = [], estado = [], nombreB = $(".tiBD").text(), nombreT = $("#nombreT").val();
		$(".indice").each(function() {
		    indice.push($(this).val());
		});
		$(".nombre").each(function() {
		    nombre.push($(this).val());
		});
		$(".tipo").each(function() {
		    tipo.push($(this).val());
		});
		$(".longitud").each(function() {
		    longitud.push($(this).val());
		});
		$(".estado").each(function() {
		    estado.push($(this).val());
		});
		//var data = "metodo=6&nombreB="+$(".tiBD").text()+"&indice="+indice+"&nombreT="+$("#nombreT").val()+"&nombre="+nombre+"&tipo="+tipo+"&longitud="+longitud+"&estado="+estado;
		//console.log("data", data);
		$.ajax({
			url: 'consultas.php',
			type: 'POST',
			data: {metodo: 6, nombreB: nombreB, nombreT: nombreT, indice: indice, nombre: nombre, tipo: tipo, longitud: longitud, estado: estado},
			success:function(data){
				alert(data);

			}
		})
	})
	var count = 1;
	$(document).on("click", ".add", function() {
		console.log("rofjrio")
		var html = '';
		html += '<div class="row" id="campo"'+count+'>'+
					'<div class="form-group inp">'+
						'<input type="text" name="nombre[]" class="form-control nombre" placeholder="Nombre">'+
					'</div>'+
					'<div class="form-group inp">'+
						'<select name="tipo[]" class="form-control tipo">'+
							'<option value="int">INT</option>'+
							'<option value="varchar">VARCHAR</option>'+
							'<option value="date">DATE</option>'+
							'<option value="double">DOUBLE</option>'+
							'<option value="boolean">BOOLEAN</option>'+
						'</select>'+
					'</div>'+
					'<div class="form-group inp">'+
						'<input type="text" name="longitud[]" class="form-control longitud" placeholder="Longitud">'+
					'</div>'+
					'<div class="form-group inp">'+
						'<select name="estado[]" class="form-control estado">'+
							'<option value="null">NULL</option>'+
							'<option value="not null">NOT NULL</option>'+
							'<option value="perso">Personalizado</option>'+
						'</select>'+
					'</div>'+
					'<div class="form-group inp">'+
						'<select name="indice[]" class="form-control indice">'+
							'<option value="">-----------------</option>'+
							'<option value="primary key">PRIMARY</option>'+
							'<option value="unique">UNIQUE</option>'+
							'<option value="index">INDEX</option>'+
							'<option value="fulltext">FULLTEX</option>'+
							'<option value="spatial">SPATIAL</option>'+
						'</select>'+
					'</div>'+									
				'</div>';
			$('#fi').append(html);
	})


	$(document).on("click", ".crea", function() {
		$('.oculto').toggle();
	})
});
