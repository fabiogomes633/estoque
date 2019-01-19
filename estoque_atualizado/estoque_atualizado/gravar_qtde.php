<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>Cadastro de Usuarios</title>
	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
</head>
<body>

	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !

	$nome= $_POST ["nome"];
	$nome_produto= $_POST ["nome_produto"];
	$qtde= $_POST ["qtde"];


//Gravando no banco de dados ! conectando com o localhost - mysql
$servidor = "localhost";
$usuario = "root";
$senhadb = "";
$bd = "estoque";
	$conexao = mysqli_connect($servidor,$usuario,$senhadb);

// $conexao = mysql_connect("localhost","root"); //localhost � onde esta o banco de dados.

	if (!$conexao)
		die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysqli_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao,$bd); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
	die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());

//Query que realiza a inser��o dos dados no banco de dados na tabela indicada acima
$query = "UPDATE `produto` set qtde = qtde+$qtde where desc_produto = '".$nome_produto."' ";
mysqli_query($conexao,$query);

$query = "INSERT INTO `entrada` ( `nome_user` , `desc_produto` , `data_modific` , `inseriu`) 
VALUES ('$nome', '$nome_produto', now(), $qtde)";

mysqli_query($conexao,$query);

echo '<script type="text/javascript">alert("Produto Atualizado!")</script>';

include("principal.php");

?> 
</body>
</html>