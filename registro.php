 <?php
 require_once("funciones.php");
$con =conectar("localhost:3306","root" ,"", "topicosSoftware");

$nombre = strip_tags($_POST["nombre"]);
$apellido = strip_tags($_POST["apellido"]);
$documento = strip_tags($_POST["documento"]);
$sexo = strip_tags($_POST["sexo"]);
$sql = "INSERT INTO Persona (nombre, apellido, documento, sexo) values (?,?,?,?)";
$meter = $con->prepare($sql);
	echo("Aquí vamos");
 if($meter)
 {
 	$meter->bind_Param("ssss",$nombre,$apellido,$documento,$sexo);
	$meter->execute();
 }else{
	 echo ("Hubo un error en el registro".$con->errno);
	echo($con->error);
 }
 ?>


