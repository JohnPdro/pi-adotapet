<?php
include "../includes/conexao.php";
$id = $_GET["id_animal"];

$sql = "delete from animais where id_animal = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:selecionar.php");
?>
