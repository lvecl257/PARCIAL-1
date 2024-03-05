<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stlsy.css">
    <title>PROBLEMAS CON ESTRADA DE DATOS</title>
</head>
<body>
    <H1>FORMULOTA ✍(◔◡◔)</H1>
    <ul id="menu">
        <li><a href="MENNU.php">Página Principal</a></li>
        <li><a href="calculoos.php">Cálculos Condicionales</a></li>
        <li><a href="FORRMULOTA.php">Formulota</a></li>
        <li><a href="ELMCC.php">El Lado Más Corto</a></li>
        <li><a href="EDASS.php">Escalera De Asteriscos </a></li>
    </ul>

    <h2>DESCRIPCIÓN: </h2>
    Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).<br>
    <BR><p>
                         x+y      x^3 + y^3 <br>
                        ------ + ----------- <br>
     f(x, y, z) =         2x      x^2 + y^2  <br>
                      -------------------------  <br>
                            x^2 + y^2 + z^2  <br>
    </p><BR>
    El programa pedirá tres números, uno por renglón, estos podrán ser positivos,
    negativos o cero, y pudieran tener decimales.<BR>
    <BR><h2>SALIDA: </h2>
    Valor de la función f(x, y, z), redondeado a 6 decimales. <br>
    <br><table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
        <th>DESCRIPCIÓN</th>
    </tr>
    <tr >
        <td> 1 <br> 2 <br> 3</td>
        <td> 0.235714 </td>
        <td>0.235714285714286</td>
    </tr>
    <tr >
        <td> 4 <br> 5 <br> 6</td>
        <td> 0.074477 </td>
        <td>0.0744773519163764</td>
    </tr>
    <tr >
        <td> 7 <br> 8 <br> 9 </td>
        <td> 0.044525 </td>
        <td>0.0445247435713634</td>
    </tr>
     </table><HR>
     <h2>FORMULARIO: </h2>
     <P class="p1">Llenalo con los datos que gustes :)</P>

<BR><form action="formulotasss.php" method="post">
    X:
    <input type="text" name="txtX"> <br>
    Y:
    <input type="text" name="txtY"> <br>
    Z:
    <input type="text" name="txtZ"> <br>

    <br><input type="submit" value="Enviar"> <br>
</form>

<?php
   if($_POST)
   {
    $X=$_POST['txtX'];
    $Y=$_POST['txtY'];
    $Z=$_POST['txtZ'];
    
    $f=( ($X+$Y) / (2*$X) );

    $f2=$f + (($X*$X*$X)+($Y*$Y*$Y)) / (($X*$X)+($Y*$Y));

    $f3=$f2 / (($X*$X)+($Y*$Y)+($Z*$Z));

    echo "RESULTADO DE LA FUNCIÓN (X, Y, Z) :  " . number_format($f3, 6);
}
?>
</body>
</html>