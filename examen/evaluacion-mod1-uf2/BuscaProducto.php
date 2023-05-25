  <?php 
   require("bbdd.php");
   $CodArticulo=$_GET["id"];
   $consulta="SELECT c.nombre As NombreCategoria,a.nombre AS NombreProducto,a.Pvp,a.descripcion
FROM articulos a,categorias c
WHERE a.id_categoria=c.id_categoria AND
a.id_articulo=".$CodArticulo;
$resultado=  mysql_query($consulta);
$registro=  mysql_fetch_assoc($resultado);
//print_r($registro);
echo json_encode($registro);
mysql_close();
  
  ?>
