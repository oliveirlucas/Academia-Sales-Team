<?php
// Conexão com banco de dados

//Servidor OMINIHOST (Database servername: loyusgyp_salesteam Usuario: loyusgyp_lucasd3vSales senha: lucas46521023)
//Localhost (Database servername: localhost Usuario: root senha: "")

$servername = "localhost:3306";
$username = "loyusgyp_lucasd3vSales";
$password = "lucas46521023";
$db_name = "loyusgyp_salesteam";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;

?>