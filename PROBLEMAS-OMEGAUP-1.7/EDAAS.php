<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stlsy.css">
    <title>PROBLEMAS CON ESTRADA DE DATOS</title>
</head>
<body>
    <H1>ESCALERA DE ASTERÍSCOS (>‿◠)✌<span> <BR> # <BR> # # <BR> # # # </span></span></H1>
    <ul id="menu">
        <li><a href="MENNU.php">Página Principal</a></li>
        <li><a href="calculoos.php">Cálculos Condicionales</a></li>
        <li><a href="FORRMULOTA.php">Formulota</a></li>
        <li><a href="ELMCC.php">El Lado Más Corto</a></li>
        <li><a href="EDAAS.php">Escalera De Asteriscos </a></li>
    </ul>

    <h2>DESCRIPCIÓN: </h2>
    Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. 
    Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud 
    y altura N hecha de asteriscos.<br>
    Se te darán como valor de entrada un numero entero N el cuál representa la longitud y altura de la escalera.<BR>

<BR><h2>SALIDA: </h2>
Deberás imprimir como salida una escalera de dimensiones N de largo y N de alto.<br>

<br><table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> 2 </td>
        <td> # <br> ## </td>
    </tr>
    <tr >
        <td> 5 </td>
        <td> # <br> ## <br> ### <br> #### <br> #####</td>
    </tr>
    <tr >
        <td> 1 </td>
        <td> # </td>
    </tr>
    <tr >
        <td> 3 </td>
        <td> # <br> ## <br> ###</td>
    </tr>
     </table><HR>
     <h2>FORMULARIO: </h2>
     <P class="p1">Llenalo con los datos que gustes :)</P>

<BR><form action="ESDAS.php" method="post">
         N :
        <input type="text" name="txtN"> <br>
        <BR><input type="submit" value="Enviar"> <br><hr>
</form>

<?php
    if($_POST){
        $N=$_POST['txtN'];
        
        for($i=1; $i<=$N; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                echo " # ";
            }
            echo "<br>";
        }
    }
?>
</body>
</html>