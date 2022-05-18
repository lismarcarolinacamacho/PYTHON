<?php
$datos =json_decode(file_get_contents("https://api.mercadolibre.com/users/1234"));

print_r($datos);



?>