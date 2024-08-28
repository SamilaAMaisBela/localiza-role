<?php
//conexão com banco de dados
$severName = "localhost";
$userName = "root";
$passWord = "";
$dbName = "logica";

$connect = mysqli_connect($severName, $userName, $passWord, $dbName);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error())  :
   echo "Erro na conexão : " . mysqli_connect_error();
endif;
?>