<html>
<head>
    <link rel="stylesheet" href="estilos1.3.css">
</head>
<body>
<h1>5630. COLEGIATURA</h1>

<h2>Descripción</h2>
La mamá de Esteban lo quiere incribir a la mejor preparatoria de Cuernavaca, pero se preocupa por 
desconocer el costo, así que nos pide ayuda para que realicemos un programa que la ayude a calcular su gasto.
<h2 class="pg">Plan de pagos: </h2>
La colegiatura se determina según las materias que vaya a cursar, cada una cuesta $1600.
Existe un programa que estimula a los estudiantes: si su promedio es mayor o igual a 9, se le hace un descuento 
del 30% a la colegiatura sin cobrarle el IVA; si el promedio es menor a 9 se deberá pagar la colegiatura completa, 
más el IVA.

<h2>Entrada y Salida</h2>
Número de mataerias "A" que va a cursar, un número con decimales "B" que es igual al promedio de Esteban; y un número
entero "C" con el total de la colegiatura.  

<h2>Ejemplo :</h2>


<table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> 5 <br> 9.6</td>
        <td> $5600 </td>
    </tr>
    <tr>
        <td> 8 <br> 7.8</td>
        <td> $14848 </td>
    </tr>
    <tr>
        <td> 2 <br> 8</td>
        <td> $3712 </td>
    </tr>
     </table>

<?php
  echo " <hr> <br>";

# CODIGO PHP/ DEFINIMOS LA VARIABLE A y B
$A=8;
$B=7.8;
# OPERACION 
#MULTIPLICAMOS A POR EL COSTO DE LA MATERIA
$a=($A*1600);
#ABRIMOS IF, COLOCAMOS LA CONDICIÓN 
if($B>=9)
{
    #APLICAMOS EL PROCEDIMIENTO DE SI SE CUMPLE LA CONDICIÓN
    $a1=($a*30)/100;
    $total=$a-$a1;
}
else
{
    #APLICACMOS EL PROCEDIMIENTO SI NO SE CUMPLE LA FUNCIÓN
    $total=$a+(($a*16)/100);
}
#IMPRIMIMOS EL RESULTADO DE LA COLEGIATURA FINAL 
echo "La colegiatura final que pagará la mamá de Esteban es igual a : $", $total;
echo "<hr> <br>";

?>
<p class="nombre">LAURA VERONICA ESTRADA CEJA - 4TO DE PROGRAMACIÓN</p>


</body>
</html>