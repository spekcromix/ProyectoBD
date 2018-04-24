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
		$nombreB = $_POST["nombreB"];
		$nombreT = $_POST["nombreT"];
		$nombre =  $_POST["nombre"];
		$tipo = $_POST["tipo"];
		$longitud = $_POST["longitud"];
		$estado = $_POST["estado"];
		$indice = $_POST["indice"];

		$sql = "USE $nombreB";
		if($res=$con->query($sql)){
			$sql = "CREATE TABLE $nombreT (";
			
			for ($i=0; $i<count($nombre); $i++) {
				//echo $nombre[$i];
				$sql .= "$nombre[$i] $tipo[$i]($longitud[$i]) $estado[$i] $indice[$i]";
				if($i == count($nombre)-2){
					$sql .= ",";
				}
			}

			$sql .= ")";
			if($con->query($sql)){
			   echo "Tabla $nombreT creada";
			}else{
			    echo "Error: ".mysqli_error($con);
			}
		}
		
		$con->close();
	}
?>