<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<form id="frm" class="row">
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="bd">
					</div>
					<div class="form-group col-md-3">
						<button type="submit" class="btn btn-success">Crear</button>
					</div>
				</form>

				<table class="table table-striped table-hover">
				  <thead>
				    <tr>
				      <th>Nombre</th>
				      <th>Accion</th>
				    </tr>
				  </thead>
				  <tbody id="base">
				  	
				  </tbody>
				</table>
			</div>
		</div>
	</div>
	
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/consultas.js"></script>
</body>
</html>