//tenemos que iniciar la sesión
session_start();


// Verificar si se han recibido datos del formularo
<?php
// variables superglobals
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $nombre = $_POST ['nombre']; 
  $email = $_POST ['email'];
  $user = $_POST ['user'];

  // Display a greeting message with the entered name
echo "<p> Nombre :$nombre </p> ";
echo "<p> Email :$email </p> ";
}
$_SESSION ['user'] = $user;
echo $_SESSION ['user'];
?>