<?php

session_start();//guarda datos dentro de la sesion

$conn = mysqli_connect(
    'localhost', //servidor interno
    'root', //usuario por defecto
    '', //contraseña (por defecto no tiene)
    'php_accountsystem' //nombre de la DB
);

?>
