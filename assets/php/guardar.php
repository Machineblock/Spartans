<?php

$conexion = mysqli_connect("localhost","root","","sparntas");

insertar($conexion);

function insertar($conexion){
$nombre = $_POST["nombres"];
$email = $_POST["email"];
$edad = $_POST["edad"];
$telefono = $_POST["numero"];
$country = $_POST["pais"];     

$insert = "INSERT INTO bdspartans (nombre, email, fecha, numero, pais) VALUES ('$nombre','$email','$edad','$telefono','$country')";

$resultado = mysqli_query($conexion,$insert);

if($resultado){
    echo "<script>alert('Gracias por registrate, te enviaremos información a tú correo electronico o WhatsApp.');
    window.location = '/spartans' </script>";
}else{
    echo "<script>alert('No ha sido posible registrarte intentalo nuevamente.');
    window.location = '/spartans' </script>";
}

}

?>