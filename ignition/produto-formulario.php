<?php
include "conecta.php";
include "utils.php";
include "banco-categoria.php";

$categorias = listaCategorias($conexao);
?>
<html>
<?php include "head.php"; ?>
<body>
<?php include "cabecalho.php";?>
<div class="container">
    <div class="principal">


        <h1> Minha Loja </h1>
        <h1>Formulario de produto</h1>

        <div class="container">
            <form action="adiciona-produto.php" method="post">
                <table class="table">
                    <tr>
                        <td>Nome</td>
                        <td><input class="form-control" type="text" name="nome" /><br/></td>
                    </tr>
                    <tr>
                        <td>Preco</td>
                        <td><input class="form-control" type="number" name="preco"/><br/></td>
                    </tr>
                    <tr>
                        <td>Descrição</td>
                        <td><textarea class="form-control" name="descricao"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="usado" value="true">Usado</td>
                    </tr>
                    <tr>
                        <td>Categoria</td>
                        <td>
                            <select class="form-control" name="categoria_id">
                            <?php foreach($categorias as $categoria) : ?>
                            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                            <?php endforeach ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>
</body>
</html>