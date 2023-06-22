<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php"
?>

<h1>
  Módulo de alunos
</h1>

<p>
  <a href="novo.php">Adicionar aluno</a>
</p>
<h2>Listagem de alunos</h2>
<table border="1">
  <tr>
    <td>Código</td>
    <td>Foto</td>
    <td>Nome</td>
    <td>idade</td>
    <td>sexo</td>
    <td>especie</td>
    <td>porte</td>
    <td>cidade</td>
    <td>estado</td>
    <td>comportamento</td>
    <td>Ações</td>
  </tr>
  <?php
  $sql = "select * from animais";
  $todos_os_pets = mysqli_query($conexao, $sql);
  while ($um_animal = mysqli_fetch_assoc($todos_os_pets)):
  ?>
    <tr>
      <td><?php echo $um_animal['id_animal']; ?></td>
      <td> <img src="<?php echo $um_animal ['foto']; ?>" width="100" alt=""></td>
      <td><?php echo $um_animal['nome']; ?></td>
      <td><?php echo $um_animal['idade']; ?></td>
      <td><?php echo $um_animal['sexo']; ?></td>
      <td><?php echo $um_animal['especie']; ?></td>
      <td><?php echo $um_animal['porte']; ?></td>
      <td><?php echo $um_animal['cidade']; ?></td>
      <td><?php echo $um_animal['estado']; ?></td>
      <td><?php echo $um_animal['comportamento']; ?></td>
      <td>
        <a href="visualizar.php?id=<?php echo $um_animal['id_animal'];?>" title="Ver completo">Visualizar</a>
        <a href="editar.php?id=<?php echo $um_animal['id_animal'];?>">Editar</a>
        <a href="deletar.php?id=<?php echo $um_animal['id_animal'];?>">Excluir</a>

      </td>
    </tr>
  <?php
  endwhile;
  ?>

</table>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>