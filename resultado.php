<?php

if ($won){
   echo "<h2>¡Felicidades! Has adivinado el número secreto $_SESSION[secret] en " . count($_SESSION['attempts']) . " intentos.</h2>";
 }else{
   echo "<h2>Has agotado tus intentos. El número secreto era $_SESSION[secret]. ¡Inténtalo de nuevo!</h2>";
 }

?>