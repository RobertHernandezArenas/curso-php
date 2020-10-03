<?php declare(strict_types = 1);

# Funciones sin parametro 
function saludo() { 
    echo "<p>hola</p>";
}
saludo();

/* Funciones con parametros || con el punto (.) se concatena variable + string, sele añade type string 
al parametro para recibir explicitamente un parametro tipo string*/
function despedida(string $adios) {
    echo $adios."<br>";
} 
despedida("<p>Chao, Pescao</p>");

# Funciones con retorno 
function retorno($retornar) {
    return $retornar;
}
echo retorno("Toma tu retorno nene");

?>