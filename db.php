<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="row">
		<div class="col-md-2 text-center">
			
			<h3 class="tiBD"><?php echo $_GET['name'] ?></h3>
			<table class="table table-striped table-hover">
				  <thead>
				    <tr>
				      <th>Tablas</th>
				    </tr>
				  </thead>
				  <tbody id="tablas"></tbody>
			</table>
		</div>

		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<br>
					<div class="row">
						<div class="col-md-2 offset-md-10">
							<button class="btn btn-primary crea">Crear Tabla</button>
						</div>

					</div>
					<br>
					<div class="row oculto">
						<div class="col-md-12">
							<form id="frm">
								<div class="row">
									
									<div class="form-group">
										<input type="text" id="nombreT" class="form-control" placeholder="Nombre Tabla">
									</div>
								</div>
								<div class="row">
									<div class="form-group inp">
										<input type="text" id="nombre" class="form-control" placeholder="Nombre">
									</div>
									<div class="form-group inp">
										<select name="" id="tipo" class="form-control">
											<option value="int">INT</option>
											<option value="varchar">VARCHAR</option>
											<option value="date">DATE</option>
											<option value="double">DOUBLE</option>
											<option value="boolean">BOOLEAN</option>
										</select>
									</div>
									<div class="form-group inp">
										<input type="text" id="longitud" class="form-control" placeholder="Longitud">
									</div>
									<div class="form-group inp">
										<select name="" id="estado" class="form-control">
											<option value="null">NULL</option>
											<option value="not null">NOT NULL</option>
											<option value="perso">Personalizado</option>
										</select>
									</div>
									<div class="form-group inp">
										<select name="" id="indice" class="form-control">
											<option value="">-----------------</option>
											<option value="primary key">PRIMARY</option>
											<option value="unique">UNIQUE</option>
											<option value="index">INDEX</option>
											<option value="fulltext">FULLTEX</option>
											<option value="spatial">SPATIAL</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3 offset-md-8">
										<button type="submit" class="btn btn-success btn-block">Crear</button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
		
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/consultas.js"></script>
	<script src="js/tablas.js"></script>
</body>
</html>