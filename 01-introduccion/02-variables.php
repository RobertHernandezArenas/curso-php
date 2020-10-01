<?php
# VAR_DUMP() sirve para saber scon que variable estamos trabajando y si llega lo que realmente solicitamos d ela variable
# VARIABLES
$numero = 5;
# No hace falta concatenar es decir , template string como en js
echo "<p>Este es el resultado de la variable numero  : $numero</p>";
var_dump($numero);

# En PHP true = 1 y false = 0 o (nada) cuando se imprime en consola 
$bolean = false;
echo "<p>Este es el resultado de la variable bolean  : $bolean</p>";
var_dump($bolean);
# Arrays
$myFirstArray = array
(
    "Rojo", 
    "Amarillo"
);
echo "<p>Este es el resultado de la variable myFirstArray[1]  : $myFirstArray[1]</p>";

# Array con propiedades
# no hago llamado a traves del indice si no , que lo hago mediante el nombre de su propiedad
$verduras = array
(
    "verdura1" => "lechuga", 
    "verdura2" => "Tomate", 
    "verdura3" => "Calabacín" 
);
echo "<p>Este es el resultado de la variable array con propiedades verduras  : $verduras[verdura1]</p>";
var_dump($verduras);

# Objetos 
$usuario = (Object) 
[
     "name" => "Robert",
     "surname" => "Hernández",
     "age" => 30,
     "country" => "Colombia",
     "isAdmin" => true,     
];
echo "<p>Este es el resultado del objeto usuario con propiedad pais: $usuario->country</p>";
var_dump($usuario);

?>