<?php

// ---Creaci�n de una conexi�n a la base de datos-----
/*
//$db_conexion = mysqli_connect("localhost", "root", "");
if (!$db_conexion) {
  die("La conexion a la base de datos ha fallado: " . msqli_error());
}

// ---------Selecci�n de una base de datos-----------

$db_seleccion = mysqli_select_db($db_nombre, $db_conexion);
if (!$db_seleccion) {
  die("La seleccion de la base de datos ha fallado: " . msqli_error());
}*/

$db_conexion = mysqli_connect("localhost", ",,," ",,,",",,,");
if (!$db_conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


?>

<!-- Verifica si est� definida la etiqueta 'tipo'  -->

<?php
if (isset($_GET['tipo'])) {  
  $tipo = $_GET['tipo'];
} else {
  $tipo = "null";
}

//----------------usuario3-------------------------

 if ($tipo == "cargar") { 
  $query = "SELECT * FROM $db_tabla";
  $db_resultado = mysqli_query($db_conexion, $query);
  if (!$db_resultado) {
    die("La consulta a la base de datos ha fallado: " . msqli_error());
  }

  $num_filas = mysqli_num_rows($db_resultado);
  if ($num_filas == 0) {
    return "";
  } else {
    // 4. Uso de datos devueltos
    while($fila = mysqli_fetch_array($db_resultado)) {
      echo
       $fila[0] .",".  //id          
       $fila[1] .",".  //user valores[1]
       $fila[4] .",".  //sexo valor[2]
       $fila[5] .",".  //lit1
       $fila[6] .",".  //lit2
       $fila[7] .",".  //lit3
       $fila[8] .",".  //lit4
       $fila[9] .",".  //lit5
       $fila[10] .",". //lit6
       $fila[11] .",". //lit7
       $fila[12] .",". //lit8
       $fila[13] .",". //lit9
       $fila[14] .",".  //lit10
       $fila[15] .",".  //lit11
       $fila[16] .",".  //lit12
       $fila[17] .",".  //lit13

       $fila[18] .",".  //edad
       $fila[19] .",".  //sexo_gusto
       $fila[20] .",".  //pareja
       $fila[21]        //locacion
       ."\n";  
    }

}
}

//--------------final---------------
else{ 
  echo "S�lo funciona con tipo=cargar,2,3,tipo=salvar,tipo=limpiar"; 
}
?>

<?php
mysqli_close($db_conexion);
?>
