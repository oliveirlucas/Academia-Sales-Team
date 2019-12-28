<?php
// Conexão com banco de dados
$servername = "mysql873.umbler.com";
$username = "lucas.e.oliveira";
$password = "lucas46521023";
$db_name = "dbadm-sales";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;

?>