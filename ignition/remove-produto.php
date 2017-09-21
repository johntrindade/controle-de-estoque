<?php
include("cabecalho.php");
include("head.php");
include("conecta.php");
include("utils.php");

$id = $_POST['id'];
removeProduto($conexao, $id);

header("Location: produto-lista.php?removido=true");
die();