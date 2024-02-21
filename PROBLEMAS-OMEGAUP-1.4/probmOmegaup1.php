<html>
<head>
    <link rel="stylesheet" href="estiloss1.css">
</head>
<body>
<h1>7294. ¿Cuántos valen 7?</h1>

<h2>Descripción</h2>
Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.

<h2>Entrada </h2>
Dos enteros en el rango de -1000 a +1000 . 

<h2>Salida </h2>
La cantidad de enteros iguales a 7.

<h2>Ejemplo :   </h2>


<table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> -3 8 </td>
        <td> 0 </td>
    </tr>
    <tr>
        <td> 7 57 </td>
        <td> 1 </td>
    </tr>
    <tr>
        <td> 62 7 </td>
        <td> 1 </td>
    </tr>
    <tr>
        <td> 7 7 </td>
        <td> 2 </td>
    </tr>
     </table>

<?php
  echo " <hr> <br>";

# CODIGO PHP DEFINIMOS LA VARIABLE a y b
$a=65;
$b=7;
#COMENZAMOS CON LOS IF QUE COMPARARÁN LOS VALORES DE CADA VARIABLE Y VER SI ALGUNO ES IGUAL A 7, IMPRIMIENDO CÚANTOS 7 SE ENCUENTRAN
# ENTRE LAS DOS VARIABLES, Y MARCANDO SI AMBAS SON 7, SI SOLO UNA LO ES, O SI NINGUNA LO ES 
if($a==7 and $b==7)
{
    echo "HAY: 2 - DOS SIETES";
}
elseif($a==7 || $b==7)
{
    echo " HAY: 1 - UN SIETE";
}
else
{
    echo " HAY: 0 - CERO SIETES";
}

echo " <hr> <br>";
?>
<p class="nombre">LAURA VERONICA ESTRADA CEJA - 4TO DE PROGRAMACIÓN</p>


</body>
</html>