<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Cadastrando</title>
<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
<?php //Savar como cadastrando.php
$nome=$_POST['nome'];//recebe o valor digitado do campo de texto com name="nome"
$dataNasc=$_POST['data'];//recebe o valor digitado do campo de texto com name="data"
$email=$_POST['email'];//recebe o valor digitado do campo de texto com name="email"
$senha=$_POST['senha'];//recebe o valor digitado do campo de texto com name="senha"
$cad="/&Fim&/".$nome."/&sep&/".$dataNasc."/&sep&/".$email."/&sep&/".$senha;
//"/&Fim&/".$nome."/&sep&/".$dataNasc."/&sep&/".$email."/&sep&/".$senha
$abrir=fopen("registro.txt","r");
$ler=fgets($abrir);
fclose($abrir);
$registro=explode("/&Fim&/",$ler);
foreach($registro as $conta){
  $dado=explode("/&sep&/",$conta);
  if($email==$dado[2]){
  $cont++;
  }
}
if($cont!=0){
echo "E-mail já está cadastrado!";
}else{
$abrir=fopen("registro.txt","a");
fwrite($abrir,$cad);
fclose($abrir);
echo "Cadastro criado com sucesso!";
session_start();
session_name("meulocal");
$_SESSION['nome']=$nome;
$_SESSION['dataN']=$dataNasc;
$_SESSION['user']=$email;
$_SESSION['senha']=$senha;
$_SESSION['verificacao']="On123";//alt
echo "<a href='meulocal.php'>Meu perfil.</a>";//alt
}
?>
</body>
</html>








