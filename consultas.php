<?php  
	require 'conexion.php';

	if($_POST['metodo'] == '1'){
		$sql = "SHOW DATABASES";
		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr>
							<td>$row[Database]</td><td><button type='submit' class='btn btn-danger btnE'>Eliminar</button>&nbsp;<button type='submit' class='btn btn-success btnUs'>Usar</button></td>
						</tr>";
				}
			}else {
				echo "0 results";
			}
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	} 

	if($_POST['metodo'] == '2'){
		$sql = "CREATE DATABASE $_POST[nombre]";
		if($con->query($sql)){
		   echo 'Base de datos creada';
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST['metodo'] == '3'){
		$sql = "DROP DATABASE $_POST[nombre]";
		if($con->query($sql)){
		   echo 'Base de datos eliminada';
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST['metodo'] == '4'){
		$sql = "USE $_POST[nombre]";
		if($res=$con->query($sql)){
		   echo 1;
		}else{
		    echo "Error: ".mysqli_error($con);
		}
		$con->close();
	}

	if($_POST['metodo'] == '5'){
		$sql = "USE $_POST[nombre]";
		if($res=$con->query($sql)){
		   	$sql = "SHOW TABLES";
			$nombre = "Tables_in_$_POST[nombre]";
			if($res=$con->query($sql)){
			    if ($res->num_rows > 0) {
					while($row = $res->fetch_assoc()) {
						echo $row[$nombre];
						// echo "rfrtgtg";
						echo "<tr>
							<td>$row[$nombre]</td>
						</tr>";
					}
				}else {
					echo "0 results";
				}
			}else{
		    	echo "Error: ".mysqli_error($con);
			}
			$con->close();
		}
	}

	if($_POST['metodo'] == '6'){
		$sql = "USE $_POST[nombreB]";
		if($res=$con->query($sql)){
			$sql = "CREATE TABLE $_POST[nombreT] ($_POST[nombre] $_POST[tipo]($_POST[longitud]) $_POST[estado] $_POST[indice]) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci";
			if($con->query($sql)){
			   echo "Tabla $_POST[nombreT] creada";
			}else{
			    echo "Error: ".mysqli_error($con);
			}
			$con->close();
		}
	}
?>