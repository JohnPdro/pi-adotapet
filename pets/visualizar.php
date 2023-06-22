<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$foto = "";
$nome = "";
$idade = "";
$sexo = "";
$especie = "";
$porte = "";
$cidade = "";
$estado = "";
$comportamento = "";
$sql = "select * from animais where id_animal = $id";
$todos_os_pets = mysqli_query($conexao, $sql);
while($um_animal = mysqli_fetch_assoc($todos_os_pets)):
  $foto = $um_animal["foto"];
  $nome = $um_animal["nome"];
  $idade = $um_animal["idade"];
  $sexo = $um_animal["sexo"];
  $especie = $um_animal["especie"];
  $porte = $um_animal["porte"];
  $cidade = $um_animal["cidade"];
  $estado = $um_animal["estado"];
  $comportamento = $um_animal["comportamento"];
endwhile;
?>

<h1>Ficha do Animal</h1>

<img src="<?php echo $foto; ?>" width="100" alt=""> <br>
Nome: <?php echo $nome; ?> <br>
Idade: <?php echo $idade; ?> <br>
Sexo: <?php echo $sexo; ?> <br>
Especie: <?php echo $especie; ?> <br>
Porte: <?php echo $porte; ?> <br>
Cidade: <?php echo $cidade; ?> <br>
Estado: <?php echo $estado; ?> <br>
Comportamento: <?php echo $comportamento; ?> <br>


<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>