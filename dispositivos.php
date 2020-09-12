<!DOCTYPE html>
<html>
<head>
	<title>Dispositivos</title>
</head>
<body>

<?php
	//echo "Que quiere bobo php";
  $db = mysqli_connect("localhost","Memo","12345");
  $db->select_db("recopilaciondatos");

  if (isset( $_POST['name']) && isset($_POST['marca']) && isset($_POST['url']) && isset($_POST['date']) && isset($_POST['info']) ){
    $name =$_POST['name'];
    $marca =$_POST['marca'];
    $url =$_POST['url'];
    $date =$_POST['date'];
    $info =$_POST['info'];
    $sql ="INSERT INTO dispositivo(Nombre,marca,URLPlugin,fechaAdquisicion,Descripcion) VALUES ('".$name."','".$marca."','".$url."','".$date."','".$info."')";
    echo "Los datos han sido recibidos";
    if($db->query($sql)){
      echo "<br>Los datos han sido subidos satisfactoriamente<br>";
    }
  }
  else{
    echo "Los datos estan incompletos";
  }

?>
</body>
</html>
