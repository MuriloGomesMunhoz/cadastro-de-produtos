<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");

if(array_key_exists("removido", $_GET) && $_GET['removido']=='true'){?> 
        <p class="alert-success">Produto apagado com sucesso.</p>]
        
<?php 
      die();
}
$categorias = listaCategorias($conexao);
?>

<?php

$nome = $_POST["nome"];


    if(insereCategoria($conexao, $nome)) { ?>
        <p class="text-success">A categoria <?= $nome; ?> adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">A categoria <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
    <?php
    }
    ?>


<?php include("rodape.php"); ?>