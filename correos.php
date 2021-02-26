<?php 
$destino = "noidelsucrepunk@gmail.com"; 

$nombre= $_POST['nombre'];
$email= $_POST['email'];
$edad= $_POST['edad'];
$mensaje= $_POST['mensaje'];

$carta = "De: $nombre \n";
$carta = "Correo: $email \n";
$carta = "Edad: $edad \n";
$carta = "Mensaje: $mensaje";



mail($destino, "Contacto", $carta);
echo "<script> alert('correo enviado') </script>";
//echo "<script> setTimeout(\"location.href='index.html'\", 1000) </script>";
header("Location:index.html");


?>