<?php
$arr=array();
$arreg=rand(1,1000);
$sum=0;
$cont=0;
$cont2=0;
$cont3=0;
echo "CALIFICACIONES DE LOS ALUNMOS DE EL CBTIS 217: ";
echo "<br><hr>";
for($i=1; $i<=$arreg; $i++)
{
    array_push($arr, rand(1,10)); 
}
for($i=0; $i<$arreg; $i++)
{
    echo $arr [$i] . ",  ";
}

#para sacar el promedio
for($i=0; $i<$arreg; $i++)
{
    $sum=$sum+$arr[$i];
}
$prom=$sum/$arreg;
echo "<br> <hr>";
echo "EL PROMEDIO ES:  ", round($prom, 2);

#Alunmos con calificación mayor o igual al promedio
for($i=1; $i<=$arreg; $i++)
{
    array_push($arr, rand(1,10));
}

for($i=0; $i<$arreg; $i++)
{
    if($arr[$i]>=$prom)
    {
        $cont++;
    }
}
echo "<br> <hr>";
echo "ALUMNOS CON CALIFICACIÓN MAYOR O IGUAL AL PROMEDIO:  ", $cont;

#Porcentaje de alunmos reprobados
for($i=0; $i<$arreg; $i++)
{
    if($arr[$i]<6)
    {
        $cont2++;
    }
}
$porcentajeR=($cont2 * 100)/$arreg;
echo "<br> <hr>";
echo "EL PORCENTAJE DE ALUNMOS REPROBADOS DEL CBTIS 217 ES :  ", round($porcentajeR, 5), "%";

#Porcentaje de alunmos reprobados
for($i=0; $i<$arreg; $i++)
{
    if($arr[$i]>=6)
    {
        $cont3++;
    }
}
$porcentajeA=($cont3 * 100)/$arreg;
echo "<br> <hr>";
echo "EL PORCENTAJE DE ALUNMOS APROBADOS DEL CBTIS 217 ES :  ", round($porcentajeA, 5), "%";

#Desviación estándar de las calificaciones

?>