<?php
include"../includes/cabecalho.php";
include"../includes/menu.php";
?>

<h1>Novo Aluno</h1>
<p>Vamos cadastrar um aluno novo no sistema.</p>
<form action="inserir.php" method="post">
  Nome: <input name="nome" required maxlength="150">
  <br>
  Idade: <input name="idade" required maxlength="100">
  <br>
  Sexo: <input name="sexo" required maxlength="100">
  <br>
  Especie: <input name="especie" required maxlength="100">
  <br>
  Porte: <input name="porte" required maxlength="100">
  <br>
  Cidade: <input name="cidade" required maxlength="100">
  <br>
  Estado: <input name="estado" required maxlength="100">
  <br>
  Comportamento: <input name="comportamento" required maxlength="100">
  <br>
  <button type="submit">Salvar</button>
</form>
<?php
 include"../includes/rodape.php";
?>