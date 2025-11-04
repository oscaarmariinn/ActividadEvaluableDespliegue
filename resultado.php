<?php
//quiero sincronizar las variables de mi otro archivo index.php
session_start();
if ($won){
   echo "<h2>¡Felicidades! Has adivinado el número secreto $_SESSION[secret] en " . count($_SESSION['attempts']) . " intentos.</h2>";
 }else{
   echo "<h2>Has agotado tus intentos. El número secreto era $_SESSION[secret]. ¡Inténtalo de nuevo!</h2>";
 }

?>
<button><a href="index.php?reset=1">Jugar otra vez</a></button>