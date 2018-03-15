<?php  
	require 'conexion.php';

	if($_POST['metodo'] == '1'){
		$sql = "SHOW DATABASES";
		if($res=$con->query($sql)){
		    if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "<tr><td>$row[Database]</td><td><button type='submit' class='btn btn-danger btnE'>Eliminar</button></td></tr>";
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
?>