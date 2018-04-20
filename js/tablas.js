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

	$('#frm').submit(function(e) {
		e.preventDefault();
		//console.log($(".tiBD").html());
		var data= "metodo=6&nombreB="+$(".tiBD").text()+"&indice="+$("#indice").val()+"&nombreT="+$("#nombreT").val()+"&nombre="+$("#nombre").val()+"&tipo="+$("#tipo").val()+"&longitud="+$("#longitud").val()+"&estado="+$("#estado").val();
		$.ajax({
			url: 'consultas.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			alert(res);
			//mostrar();
		})
		.fail(function() {
			alert(res);
		})
	})

	$(document).on("click", ".crea", function() {
		$('.oculto').toggle();
	})
});
