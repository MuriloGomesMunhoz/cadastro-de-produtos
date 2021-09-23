<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>



<h1>Adiciona categoria</h1>
<form action="adiciona-categoria.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<h1>Remover Categoria:</h1>
<table class="table table-striped table-bordered">
            <tr>
                
                        <?php foreach($categorias as $categoria) : ?>
                            <td>
                                <?=$categoria['nome']?>
                            </td>
                            <td>
                                <form action="remove-categoria.php" method="post">
                                    <input type="hidden" name="id" value="<?=$categoria['id']?>" />
                                    <button class="btn btn-danger">remover</button>
                                </form>
                            </td>
                            </tr>
                        <?php endforeach ?>
</table>

<?php include("rodape.php"); ?>
