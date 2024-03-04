<?php
// variables superglobals
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $nombre = $_POST ['nombre']; 
  $email = $_POST ['email'];

  // Display a greeting message with the entered name
echo "<p> Nombre :$nombre </p> ";
echo "<p> Email :$email </p> ";
}

?>