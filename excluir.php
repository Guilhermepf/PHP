<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<!--Excluir-->
<?php
session_start();
session_name("meulocal");
if($_SESSION['verificacao']=="On123"){
$del="/&Fim&/".$_SESSION['nome']."/&sep&/".$_SESSION['dataN']."/&sep&/".$_SESSION['user']."/&sep&/".$_SESSION['senha'];
$abrir=fopen("registro.txt","r");
$ler=fgets($abrir);
fclose($abrir);
$registro=explode($del,$ler);
$abrir=fopen("registro.txt","w");
fwrite($abrir,$registro[0].$registro[1]);
fclose($abrir);
unset($_SESSION['nome']);
unset($_SESSION['dataN']);
unset($_SESSION['user']);
unset($_SESSION['senha']);
session_destroy();
header("location:meulocal.php");
}
?>
<!--Excluir-->
</body>
</html>







