<html>
<head>
    <link rel="stylesheet" href="estiloss2.css">
</head>
<body>
<h1>7341. El mayor de tres números</h1>

<h2>Descripción</h2>
Realiza un problema que imprima el mayor de tres números.

<h2>Entrada </h2>
Escribe tres números enteros a, b y c.

<h2>Salida </h2>
El número entero mayor de los tres números introducidos.

<h2>Ejemplo :   </h2>


<table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> 10<br>8<br>-7 </td>
        <td> 10 </td>
    </tr>
    <tr>
        <td> 10<br>81<br>101 </td>
        <td> 101 </td>
    </tr>
    <tr>
        <td> 11<br>11<br>11 </td>
        <td> 11 </td>
    </tr>
    <tr>
        <td> 10<br>810<br>101</td>
        <td> 810 </td>
    </tr>
     </table>

     <h2>Límites </h2>
     Números enteros

<?php
  echo " <hr> <br>";

# CODIGO PHP/ DEFINIMOS LA VARIABLE a, b Y c
$a=10;
$b=810;
$c=101;
#COMENZAMOS CON LOS IF QUE COMPARARÁN LOS VALORES DE CADA VARIABLE PARA DEFINIR POR ETAPAS, CÚAL ES EL MAYOR DE LOS TRES?
if($a>$b and $a>$c)
{
    echo "EL MAYOR DE LOS TRES ES: A - " , $a;
}
elseif($b>$a and $b>$c)
{
    echo "EL MAYOR DE LOS TRES ES: B - " , $b;
}
elseif($c>$a and $c>$b)
{
    echo "EL MAYOR DE LOS TRES ES: C - " , $c;
}

echo " <hr> <br>";
?>
<p class="nombre">LAURA VERONICA ESTRADA CEJA - 4TO DE PROGRAMACIÓN</p>


</body>
</html>