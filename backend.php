<?php


// echo 'Hello World con ajax';


// Si existe una petición post devolvemos el dato al front  y lo mostramos 
if(isset($_POST)){
echo 'dato devuelto:  ' . $_POST['username'];
}

?>