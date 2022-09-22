<?php
/*$link = mysqli_connect("localhost", "root", "", "catalogo");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
  
mysqli_close($link);*/

$host = "localhost";
$db   = "catalogo";
$user = "root";
$pass = "";
// conecta ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?> 