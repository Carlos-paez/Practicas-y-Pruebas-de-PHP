<?php

require_once 'class/classUser.php';

$Nombre = readline("Ingrese su nombre; \n");
$Apellido = readline("Ingrese su apellido: \n");
$Ci = readline("Ingrese su Ci: \n");
$Roll = readline("Ingrese el roll qu ecumplira: \n");

$usuario = new User($Nombre, $Apellido, $Ci, $Roll);

echo ("Usuario creado con exito:\n\n\n");


echo ($usuario->Saludar());