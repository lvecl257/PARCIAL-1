<?php
// PASO1: CONECTARSE A UN SERVIDOR Y UNA BASE DE DATOS.
$conexion=mysqli_connect('localhost','root', '', 'sistema', '3306');

// PASO2: REALIZAR LA ACCION (INSERT, UPDATE, ETC...).
$consulta="select * from usuarios 
           where login='Ana' && password='SHA1(123)',
           where login='Chencho' && password='SHA1(pass)',
           where login='Tony' && password='SHA1(tony123)',
           where login='Vero' && password='SHA1(ungatoloco123)'"

$resultado=mysqli_query($conexion, $consulta);

// TOMAR LOS DATOS Y PONERLOS EN UNA TABLA
    if($_POST)
    {
        $LGN=$_POST['txtLG'];
        $PSW=$_POST['txtPW'];
        if($LGN==mysqli_fetch_array($resultado) && $PSW==mysqli_fetch_array($resultado))
        {
            echo "USUARIO Y CONTRASEÑA CORRECTOS" . "\n";
            echo "ACCESO PERMITIDO";
        }
        else
        {
            echo "USUARIO O CONTRASEÑA INCORRECTOS" . "\n";
            echo "ACCESO DENEGADO";
        }
    }
// PASO 3: CERRAR LA CONEXION.
mysqli_close($conexion);
?>