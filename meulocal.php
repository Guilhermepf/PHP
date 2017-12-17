<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Meu Local</title>
<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
<center>
<?php
session_start();
session_name("meulocal");
if($_SESSION['verificacao']=="On123"){
echo "Seja bem vindo <b>".$_SESSION['user']."</b>!<br>";
echo "<a href='index.php'>Voltar</a><br>";
echo "<a href='alterar.php'>Alterar senha</a><br>";
echo "<a href='excluir.php'>Excluir</a><br>";
echo "<a href='sair.php'>Sair</a><br>";
}else{
echo "<a href='index.php'>Voltar</a><br>";
}
//meulocal.php
?>
</center>
</body>
</html>









