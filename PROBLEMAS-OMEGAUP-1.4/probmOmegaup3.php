<html>
<head>
    <link rel="stylesheet" href="estiloss3.css">
</head>
<body>
<h1>13433. Estaciones del Año</h1>

<h2>Descripción</h2>
Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas 
en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación 
(su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día D y un mes M según lo siguiente:

                    <p class="p1">
                    * Winter del 21 de diciembre al 20 de marzo <br>
                    * Spring del 21 de marzo al 21 de junio <br>
                    * Summer del 22 de junio al 22 de septiembre <br>
                    * Fall del 23 de septiembre al 20 de diciembre <br>
                    </p>
Considerando la siguiente cantidad de días para cada mes:<br>

                    <p class="p2">
                    * Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días <br>
                    * Abril, Junio, Septiembre y Noviembre 30 días <br>
                    * Febrero 28 días <br>
                    * Cualquier fecha fuera de estos rangos debe considerarse como no existente <br>
                    </p>

Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.

<h2>Entrada </h2>
Dos números enteros D y M separados por un espacio que corresponden al día y mes de una fecha determinada.

<h2>Salida </h2>
Una cadena S que indique la estación del año a la que pertenece la fecha ingresada o un mensaje 
que indique no existe la fecha, si la fecha no es válida.

<h2>Ejemplo :   </h2>


<table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>ENTRADA</th> 
        <th>SALIDA</th>
    </tr>
    <tr >
        <td> 15 <br> 10</td>
        <td> FALL </td>
    </tr>
    <tr>
        <td> 22 <br> 3 </td>
        <td> SPRING </td>
    </tr>
    <tr>
        <td> 31 <br> 4 </td>
        <td> NO EXSTE LA FECHA :( </td>
    </tr>
     </table>


<?php
  echo " <hr> <br>";

# CODIGO PHP/ DEFINIMOS LA VARIABLE D Y M. D = DIA, M = MES 
$D=22;
$M=3;
#EMPEZAMOS CON LOS IF Y IF ELSE QUE DETERMINARÁN LAS FECHAS DE COMIENZO Y FINAL DE CADA ESTACIÓN, E IMPRIMIRÁN "TODAY IS---" Y LA
#ESTACIÓN INDICADA
if($D>=21 and $M== 12)
{
    echo " TODAY IS WINTER ";
}
if($D<=31 and $M==1)
{
    echo " TODAY IS WINTER ";
}
if($D<=28 and $M==2)
{
    echo " TODAY IS WINTER ";
}
if($D<=20 and $M==3)
{
    echo " TODAY IS WINTER ";
}
elseif($D>=21 and $M==3)
{
    echo " TODAY IS SPRING ";
}
elseif($D<=30 and $M==4)
{
    echo " TODAY IS SPRING ";
}
elseif($D<=31 and $M==5)
{
    echo " TODAY IS SPRING ";
}
elseif($D<=21 and $M==6)
{
    echo " TODAY IS SPRING ";
}
elseif($D>=22 and $M==6)
{
    echo " TODAY IS SUMMER ";
}
elseif($D<=31 and $M==7)
{
    echo " TODAY IS SUMMER ";
}
elseif($D<=31 and $M==8)
{
    echo " TODAY IS SUMMER ";
}
elseif($D<=22 and $M==9)
{
    echo " TODAY IS SUMMER ";
}
elseif($D>=23 and $M==9)
{
    echo " TODAY IS FALL ";
}
elseif($D<=31 and $M==10)
{
    echo " TODAY IS FALL ";
}
elseif($D<=30 and $M==11)
{
    echo " TODAY IS FALL ";
}
elseif($D<=20 and $M==12)
{
    echo " TODAY IS FALL ";
}
else
{
    echo "NO EXISTE LA FECHA :( ";
}
echo " <hr> <br>";
?>

<p class="nombre">LAURA VERONICA ESTRADA CEJA - 4TO DE PROGRAMACIÓN</p>


</body>
</html>