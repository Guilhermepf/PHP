<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$email=$_POST['usuario'];//recebe e-mail
$senha=$_POST['password'];//recebe senha.
$abrir=fopen("registro.txt","r");//abre o txt.
$ler=fgets($abrir);//lê o txt.
fclose($abrir);//fecha txt.
$registro=explode("/&Fim&/",$ler);//separa os registros.
foreach($registro as $conta){
$dado=explode("/&sep&/",$conta);//separar os dados.
if($dado[2]==$email&&$dado[3]==$senha){
session_start();
session_name("meulocal");
$_SESSION['nome']=$dado[0];
$_SESSION['dataN']=$dado[1];
$_SESSION['user']=$dado[2];
$_SESSION['senha']=$dado[3];
$_SESSION['verificacao']="On123";
header("location: Untitled-1.php");
}
}
?>
</body>
</html>








