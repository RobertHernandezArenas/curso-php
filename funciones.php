<?php

# Funciones sin parametro 
function saludo() { 
    echo "<p>hola</p>";
}
saludo();

# Funciones con parametros || con el punto (.) se concatena variable + string
function despedida($adios) {
    echo $adios."<br>";
} 
despedida("<p>Chao, Pescao</p>");

# Funciones con retorno 
function retorno($retornar) {
    return $retornar;
}
echo retorno("Toma tu retorno nene");

?>