<!-- Ejercicio 1:
En el siguiente código identificar:
• las variables y su tipo
• los operadores
• las funciones y sus parámetros
• las estructuras de control
• cuál es la salida por pantalla -->

<?php
function doble($i)
{
    return $i * 2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
    $d += 4;
}
if (is_string($a)) {
    echo "Cadena: $a";
}
$d = $a ? ++$d : $d * 3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f, $g;
?>

<!-- 
Variables:
$a: variable de tipo booleano (TRUE)
$b: variable de tipo string ("xyz")
$c: variable de tipo string ('xyz')
$d: variable de tipo entero (12)

Operadores:
*: operador de multiplicación
+=: operador de asignación con suma
?: operador ternario
++: operador de incremento

Funciones con sus parámetros:
gettype($a): función que devuelve el tipo de la variable $a
is_int($d): función que verifica si $d es un entero
is_string($a): función que verifica si $a es una cadena de texto
doble($d++): función que devuelve el doble del valor de $d (incrementado en 1)

Estructuras de control:
if (is_int($d)): estructura de control que verifica si $d es un entero
if (is_string($a)): estructura de control que verifica si $a es una cadena de texto

Salida por pantalla:
booleanstringstringinteger1xyzxyz184444
-->