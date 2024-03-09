<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sstyle-7.css">
    <title>PROBLEMAS CON ESTRADA DE DATOS</title>
</head>
<body>
    <H1>EL LADO (ง︡'-'︠)ง<br><span>MÁS CORTO</span></span></H1>
    <ul id="menu">
        <li><a href="mmenu.php">Página Principal</a></li>
        <li><a href="calculoos.php">Cálculos Condicionales</a></li>
        <li><a href="FORRMULOTA.php">Formulota</a></li>
        <li><a href="ELMCC.php">El Lado Más Corto</a></li>
        <li><a href="EDAAS.php">Escalera De Asteriscos </a></li>
    </ul>

    <h2>DESCRIPCIÓN: </h2>
    Escribe un programa que, 
    dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.<br>
    Ocho reales x1-y1, x2-y2, x3-y3, x4-y4. Puedes suponer que 0<= Xi, Yi <=100 y que los vértices se listan 
    ordenados en el sentido de las manecillas del reloj.<br>

<BR><h2>SALIDA: </h2>
Un real que sea la longitud del lado más corto del cuadrilátero. <br>
Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.<br>

<br><table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> 10.1 - 10.2 <br> 20.2 - 10.3 <br> 22.3 - 4.1 <br> 7.5 - 0.9 </td>
        <td> 6.545991 </td>
    </tr>
     </table><HR>
     <h2>FORMULARIO: </h2>
     <P class="p1">Llenalo con los datos que gustes :)</P>

<BR><form action="ELMCC.php" method="post">
    X 1 :
    <input type="text" name="txtX1">
       Y 1 :
    <input type="text" name="txtY1"> <br>
    X 2 :
    <input type="text" name="txtX2">
       Y 2 :
    <input type="text" name="txtY2"> <br>
    X 3 :
    <input type="text" name="txtX3">
       Y 3 :
    <input type="text" name="txtY3"> <br>
    X 4 :
    <input type="text" name="txtX4">
       Y 4 :
    <input type="text" name="txtY4"> <br>

    <br><input type="submit" value="Enviar"> <br><HR>
</form>

<?php
    if($_POST)
    {
        $X1=$_POST['txtX1'];
        $Y1=$_POST['txtY1'];
        $X2=$_POST['txtX2'];
        $Y2=$_POST['txtY2'];
        $X3=$_POST['txtX3'];
        $Y3=$_POST['txtY3'];
        $X4=$_POST['txtX4'];
        $Y4=$_POST['txtY4'];

        $lado1 = sqrt(pow(($Y2 - $Y1), 2) + pow(($X2 - $X1), 2));
        $lado2 = sqrt(pow(($Y3 - $Y2), 2) + pow(($X3 - $X2), 2));
        $lado3 = sqrt(pow(($Y4 - $Y3), 2) + pow(($X4 - $X3), 2));
        $lado4 = sqrt(pow(($Y1 - $Y4), 2) + pow(($X1 - $X4), 2));

        if($lado1<$lado2 and $lado1<$lado3 and $lado1<$lado4)
        {
            echo "EL LADO MÁS CORTO ES : " . $lado1;
        }

        if($lado2<$lado1 and $lado2<$lado3 and $lado2<$lado4)
        {
            echo "EL LADO MÁS CORTO ES : " . $lado2;
        }

        if($lado3<$lado1 and $lado3<$lado2 and $lado3<$lado4)
        {
            echo "EL LADO MÁS CORTO ES : " . $lado3;
        }

        if($lado4<$lado1 and $lado4<$lado2 and $lado4<$lado3)
        {
            echo "EL LADO MÁS CORTO ES : " . $lado4;
        }
    }
?>
</body>
</html>