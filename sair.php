<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();//Inicia a sessão
session_name('meulocal');//Dá um nome a sessão
unset($_SESSION['user']);//Esvazia o metodo $_SESSION['user']
unset($_SESSION['nome']);//Esvazia o metodo $_SESSION['nome']
unset($_SESSION['senha']);//Esvazia o metodo $_SESSION['senha']
unset($_SESSION['dataN']);//Esvazia o metodo $_SESSION['dataN']
unset($_SESSION['validacao']);//Esvazia o metodo $_SESSION['verificacao']
session_destroy();//destroi a sessão
header("location:index.php");//redireciona o usuário para index.php
//salvar como sair.php
?>
</body>
</html>







