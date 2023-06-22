<?php
include"../includes/conexao.php";
$id = $_GET["id"];

$nome = $_POST["nome"];
$sql = "update animais set nome = '$nome' where id_animal= $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>