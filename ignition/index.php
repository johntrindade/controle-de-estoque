<!DOCTYPE html>
<html>
<?php include "head.php"; ?>
<body>
<?php include("cabecalho.php");?>
<div class="container">
    <div class="principal">
        <h1> Minha Loja </h1>
    </div>
</div>
<h2>Login</h2>
<form action="login.php" method="post">
<table class="table">
     <tr>
         <td>Email</td>
         <td><input class="form-control" type="email" name="email"</td>
     </tr>
     <tr>
         <td>Senha</td>
         <td><input class="form-control" type="password" name="senha"</td>
     </tr>
     <tr>
         <td><button type="submit" class="btn btn-primary">Login</button></td>
     </tr>
</table>
</form>
<?php include("rodape.php"); ?>
</body>
</html>
