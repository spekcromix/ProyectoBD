$(document).ready(function() {
	mostrar();
	
	function mostrar() {	
		$.ajax({
			url: 'consultas.php',
			type: 'POST',
			data: 'metodo=1'
		})
		.done(function(res) {
			$("#base").html(res);
		})
		.fail(function() {
			alert(res);
		})
	}

	$('#frm').submit(function(e) {
		e.preventDefault();
		var data= "metodo=2&nombre="+$("#bd").val();
		$.ajax({
			url: 'consultas.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			alert(res);
			mostrar();
		})
		.fail(function() {
			alert(res);
		})
	})

	$(document).on('click',".btnE",function() {
		console.log();
		var data= "metodo=3&nombre="+$(this).parent().parent().children('td:eq(0)').text();
		$.ajax({
			url: 'consultas.php',
			type: 'POST',
			data: data
		})
		.done(function(res) {
			alert(res);
			mostrar();
		})
		.fail(function() {
			alert(res);
		})
	})

	$(document).on('click',".btnUs",function() {
		var nombre=$(this).parent().parent().children('td:eq(0)').text();
		window.location = 'db.php?name='+nombre;
		
	})

});