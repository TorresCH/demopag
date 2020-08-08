<?php 
$destino = "paul.t.ch.1992@gmail.com";
$name =$_POST["nombre"];
$select =$_POST["empleados"];
$email = $_POST["correo"];
$empresa = $_POST["empresa"];
$tele = $_POST["telefono"];
$ciudad = $_POST["ciudad"];
$message = $_POST["mensaje"];

$contenido = "Haz ecibido un nuevo mensaje. \n Nombre: $name \n Empleados: $select \n Correo: \n $email \n Empresa: \n $email \n Teléfono: \n $tele \n Ciudad: \n $ciudad \n Mensaje: \n $message";

mail($destinom, "Contacto:", $contenido);
header("Location:contacto.html");
echo "El mensaje se ha enviado correctamente";
?>

                                   