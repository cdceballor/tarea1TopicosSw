 <?php
 function conectar($servidor, $user, $pass, $name)
 {

    $obj_conexion = 
    mysqli_connect($servidor,$user,$pass,$name);
    if(!$obj_conexion)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
	return $obj_conexion;
    }
    else
    {
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
	return $obj_conexion;
    }

 }
 ?>
