<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");

$id = $_POST['id'];
removeCategoria($conexao, $id);

header("Location: adiciona-categoria.php?removido=true");
die();
?>
