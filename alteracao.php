<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$nsenha=$_POST['nsenha'];
session_start();
session_name("meulocal");
if($_SESSION['verificacao']=="On123"){
$aux=$_SESSION['nome']."/&sep&/".$_SESSION['dataN']."/&sep&/".$_SESSION['user']."/&sep&/".$_SESSION['senha'];
//abrir o arquivo registro.txt
$abrir=fopen("registro.txt","r");//abre o txt.
$ler=fgets($abrir);//lê o txt.
fclose($abrir);//fecha txt.
$tnt=explode($aux,$ler);
$alt=$_SESSION['nome']."/&sep&/".$_SESSION['dataN']."/&sep&/".$_SESSION['user']."/&sep&/".$nsenha;
$abrir=fopen("registro.txt","w");
fwrite($abrir,$tnt[0].$alt.$tnt[1]);
fclose($abrir);
echo "Senha alterada com sucesso!UHUL!!!";
}
?>
</body>
</html>








