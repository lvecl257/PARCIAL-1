<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sstyle-7.css">
    <title>PROBLEMAS CON ESTRADA DE DATOS</title>
</head>
<body>
    <H1>CÁLCULOS  (ㆆ_ㆆ)<br><span>CONDICIONALES</span></span></H1>
    <ul id="menu">
        <li><a href="mmenu.php">Página Principal</a></li>
        <li><a href="calculoos.php">Cálculos Condicionales</a></li>
        <li><a href="FORRMULOTA.php">Formulota</a></li>
        <li><a href="ELMCC.php">El Lado Más Corto</a></li>
        <li><a href="EDAAS.php">Escalera De Asteriscos </a></li>
    </ul>

    <h2>DESCRIPCIÓN: </h2>
    Eres muy bueno evaluando fórmulas y realizando cálculos directos, 
    pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. <BR>
    Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N ,
    realizar las siguientes operaciones en el orden indicado y con aritmética entera: <BR>

1.Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1.<BR>
2.Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, 
divídelo entre 10.<BR>
3.Si el valor actual de N es un múltiplo de tres, réstale uno.<BR>
Escribe un programa que te ayude a calcular el valor final de N y el número de veces que N fue modificado.<BR>

<BR><h2>SALIDA: </h2>
Dos enteros, uno que de el valor final de N y otro que de el número de veces que N fue modificado.<BR>

<br><table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> 7 </td>
        <td> 8 - 1 </td>
    </tr>
     </table><HR>
     <h2>FORMULARIO: </h2>
     <P class="p1">Llenalo con los datos que gustes :)</P>

<BR><form action="calculoos.php" method="post">
    N:
    <input type="text" name="txtN"> <br>
    <br><input type="submit" value="Enviar"> <br><HR>
</form>
<?php
    if($_POST){
        $N=$_POST['txtN'];
        $cont=0;
        $N2=0;
        $n2=0;
        if($N%2==0)
        {
            $N=$N/2;
            $cont=$cont+1;
            
        }

        else
        {
            $N=$N+1;
            $cont=$cont+1;
           
        }

        $d=strlen($N);

        if($d==3)
        {
            $N=$N/100;
            $cont=$cont+1;
           
        }

        elseif($d==2)
        {
            $N=$N/10;
            $cont=$cont+1;
            
        }  

        if($N%3==0)
        {
            $N=$N-1;
            $cont=$cont+1;
        }
        echo "RESULTADO FINAL DE N : " . $N . "<br>";
        echo "NÚMERO DE VECES QUE SE MODIFICÓN N : " . $cont;
    }
?>
</body>
</html>