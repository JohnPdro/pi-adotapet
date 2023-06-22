<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$foto = "";
$nome = "";
$idade = "";
$sexo = "";
$sql = "select * from animais where id_animal = $id";
$todos_os_pets = mysqli_query($conexao, $sql);
while ($um_animal = mysqli_fetch_assoc($todos_os_pets)) :
  $nome = $um_animal["nome"];
endwhile
?>

<h1>Editar aluno <?php echo $id; ?></h1>
<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
  Foto: <input name="nome" value="<?php echo $nome ?>"><br>
  Nome: <input name="nome" value="<?php echo $nome ?>"><br>
  Nome: <input name="nome" value="<?php echo $nome ?>"><br>
  Nome: <input name="nome" value="<?php echo $nome ?>"><br>
  Nome: <input name="nome" value="<?php echo $nome ?>"><br>
  Nome: <input name="nome" value="<?php echo $nome ?>"><br>
  Nome: <input name="nome" value="<?php echo $nome ?>"><br>
  Nome: <input name="nome" value="<?php echo $nome ?>"><br>
  <button type="submit">Atualizar</button>
</form>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>