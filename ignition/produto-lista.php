<?php
include "conecta.php";
include "utils.php";
include "cabecalho.php";
?>
<html>
<?php include "head.php"; ?>
    <body>
        <div class="container"></div>
        <div class="principal"></div>
        <h1> Minha Loja </h1>
        <?php if(array_key_exists("removido", $_GET) && $_GET['removido']==true) { ?>
        <p class="alert-success">Produto apagado com sucesso.</p>
        <?php } ?>
        <table class="table table-striped table-bordered">
            <?php $produtos = listaProdutos($conexao); ?>
            <?php foreach($produtos as $produto) : ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['preco'] ?></td>
                    <td><?= substr($produto['descricao'], 0, 40) ?></td>
                    <td><?= $produto['categoria_nome'] ?></td>
                    <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
                    <td>
                        <form action="remove-produto.php?id=<?=$produto['id']?>" method="post">
                            <input type="hidden" name="id" value="<?=$produto['id']?>"/>
                            <button class="btn btn-danger">Remover</button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php include "rodape.php"; ?>
    </body>
</html>
