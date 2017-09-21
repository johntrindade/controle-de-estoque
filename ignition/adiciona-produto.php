<?php
include "conecta.php";
include "utils.php";
include "head.php";
include "banco-categoria.php";

//die(var_dump($_POST));
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
$usado = $_POST['usado'];

if(array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}
?>

<?php include("cabecalho.php");?>
<div class="container">
    <div class="principal">
        <h1> Minha Loja </h1>
        <?php if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)): ?>
            <p class="text-success">Produto <?= $nome ?>, <?= $preco ?> foi adicionado.</p>
        <?php else: ?>
            <?php $msg = mysqli_error($conexao); ?>
            <p class="text-danger">O produto <?= $nome ?> nao foi adicionado: <?= $msg?></p>
        <?php endif; ?>
    </div>
</div>
<?php include("rodape.php"); ?>
