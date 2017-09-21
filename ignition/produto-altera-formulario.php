<?php
include "conecta.php";
include "utils.php";
include "banco-categoria.php";

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
<html>
<?php include "head.php"; ?>
<body>
<?php include "cabecalho.php";?>
<div class="container">
    <div class="principal">


        <h1> Minha Loja </h1>
        <h1>Alterando produto</h1>

        <div class="container">
            <form action="altera-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <table class="table">
                    <tr>
                        <td>Nome</td>
                        <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br/></td>
                    </tr>
                    <tr>
                        <td>Preco</td>
                        <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br/></td>
                    </tr>
                    <tr>
                        <td>Descrição</td>
                        <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
                    </tr>
                    <tr>
                        <td>Categoria</td>
                        <td>
                            <select class="form-control" name="categoria_id">
                                <?php foreach($categorias as $categoria) :
                                    $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                                    $selecao = $essaEhACategoria ? "selected='selected'" : "";
                                    ?>
                                    <option value="<?=$categoria['id']?>" <?=$selecao?>><?=$categoria['nome']?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" type="submit">Alterar</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>
</body>
</html>