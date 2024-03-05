<html>
<head>
    <link rel="stylesheet" href="stl.css">
</head>
<body>
<h1>2765. SUMANDO DOS CONJUNTOS</h1>

<h2>Descripción</h2>
Consta de dos conjuntos de números de tamaño N, se imprime el resultado de sumarlos
1<=N<=100. <br>
Ejemplo: N=4 <br>
2 3 4 5 <br>
6 7 1 3 <br>
Resultado: <br>
8 10 5 8 <br>
<h2>ENTRADA Y SALIDA - Ejemplo :</h2>
Una línea con el número de elementos, segunda línea con el primer conjunto,
tercera línea con el segundo conjunto. <br>
De salida una línea que imprima el resultado de la suma. <br>

<br><table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
        <th>DESCRIPCIÓN</th>
    </tr>
    <tr >
        <td> 4 <br> 2 3 4 5 <br> 6 7 1 3 </td>
        <td> 8 10 5 8 </td>
         <td> 2+6, 3+7, 4+1, 5+3. </td>
    </tr>
     </table>

<?php
  echo " <hr> <br>";

echo "<hr> <br>";
$arrg=array(2, 3, 4, 5);
$n1=strlen($arrg);
$arrl=array(6, 7, 1, 3);
$n2=strlen($arrl);
$r=0;
for($i=$arrg; $i<=$n1; $i++)
{
   $r=$arr[$i]+$arr1[$i];
}


echo "RESULTADO :  " . $r;
?>
<p class="nombre">LAURA VERONICA ESTRADA CEJA - 4TO DE PROGRAMACIÓN</p>


</body>
</html>