<?php

define("HOST", "localhost");
define("USER", "seminariopsi");
define("PASSWORD", ":|&DGG--QWbR");
define("DATABASE", "seminariopsi");

// define("HOST", "localhost");
// define("USER", "root");
// define("PASSWORD", "1234");
// define("DATABASE", "psico");

$nome = htmlspecialchars($_POST["nome"]);
$email = htmlspecialchars($_POST["email"]);
$telefone = htmlspecialchars($_POST["telefone"]);
$escolaridade = htmlspecialchars($_POST["escolaridade"]);

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->set_charset("utf8");

if($mysqli->query("INSERT INTO `gt-aion_2021` (`nome`, `email`, `telefone`, `escolaridade`) VALUES ('".$nome."', '".$email."', '".$telefone."', '".$escolaridade."')"));

echo $mysqli->error;


?>
