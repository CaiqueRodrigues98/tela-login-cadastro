<?php

if (isset($_POST['submit']))
{

echo count($_POST)."<br>";
echo "Recebe<br>";

include_once('config.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$genero = $_POST["genero"];
$data_nasc = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];

$result = mysqli_query($conexao, "INSERT INTO usuarios() VALUES()");
}
?>