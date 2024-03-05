<html>
<head>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<h1>12618. PRACTICANDO CON FÓRMULAS</h1>

<h2>Descripción</h2>
Dado un valor real 𝓪, quieres resolver una serie de ecuaciones hasta obtener el valor de Z.

<p>
    x = 3𝓪 + 15 <br>
        x + 3 <br>
    y =----------- <br>
        x + 1 <br>
        5x + 7y <br>
    z = ----------- <br>
          𝓪xy <br>

</p>

<h2>Entrada</h2>
Un real 𝓪 Puedes suponer que 1 <= 𝓪 <= 100.

<h2>Salida</h2>
Un real que sea el valor de Z impreso con tres puntos decimales.

<h2>Ejemplo</h2>


<table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> 33.562</td>
        <td> 0.148</td>
    </tr>
    <tr>
        <td> 72.569</td>
        <td> 0.069</td>
    </tr>
    <tr>
        <td> 64.835</td>
        <td> 0.077</td>
    </tr>
     </table>

<?php
  echo " <hr> <br>";

# CODIGO PHP/ DEFINIMOS LA VARIABLE A
$A=33.562;
# OPERACION 
#PRIMERO DEFINIMOS EL VALOR DE x
$x=(3*$A + 15);
#DEFINIMOS EL VALOR DE y YA CON EL VALOR DE x DEFINIDO
$y=($x+3)/($x+1);
#SACAMOS EL RESULTADO DE Z CON AYUDA DE LOS ANTES DEFINIDOS y Y x
$z=(5*$x + 7*$y)/($A*$x*$y);
#IMPRIMIMOS EL VALOR DE z
echo "Z ES IGUAL A: ", $z;
echo "<hr> <br>";

?>
<p class="nombre">LAURA VERONICA ESTRADA CEJA - 4TO DE PROGRAMACIÓN</p>


</body>
</html>