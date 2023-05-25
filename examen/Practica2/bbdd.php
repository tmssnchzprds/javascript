<?php 

// 1. ABRIMOS CONEXION CONTRA EL SERVIDOR

    // PASO 1
$servidor="192.168.2.220";
$usuario="root";
$password="sexpe2010";
$bbdd="tienda";


$IdConexion= mysql_connect($servidor,$usuario,$password);

if (!$IdConexion)
{
  die("Error al acceder al Servidor de BBDD".mysql_error()); 
}
// PASO 2

$db_selected = mysql_select_db($bbdd);
if (!$db_selected) 
    { die ('No puedo conectar contra la base de datos: ' . mysql_error()); }



?>