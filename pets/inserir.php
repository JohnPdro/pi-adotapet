<?php
include"../includes/conexao.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$especie = $_POST["especie"];
$porte = $_POST["porte"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$comportamento = $_POST["comportamento"];
$sql = "insert into animais(nome, idade, sexo, especie, porte, cidade, estado, comportamento) values('$nome', '$idade', '$sexo', '$especie', '$porte', '$cidade', '$estado', '$comportamento')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>
