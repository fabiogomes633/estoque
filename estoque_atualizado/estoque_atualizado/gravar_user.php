<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>Cadastro de Usuarios</title>
	
	
	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
</head>
<body>

	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome= $_POST ["nome"];//atribuição do campo "nome" vindo do formulário para variavel
$tel= $_POST ["telefone"];//atribuição do campo "telefone" vindo do formulário para variavel
$login= $_POST ["login"];//atribuição do campo "login" vindo do formulário para variavel
$senha= $_POST ["senha"];//atribuição do campo "senha" vindo do formulário para variavel
$sexo= $_POST ["sexo"];

//Gravando no banco de dados ! conectando com o localhost - mysql
$servidor = "localhost";
$usuario = "root";
$senhadb = "";
$bd = "estoque";
$conexao = mysqli_connect($servidor,$usuario,$senhadb);

// $conexao = mysql_connect("localhost","root"); //localhost é onde esta o banco de dados.

if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao,$bd); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());

//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `usuario` ( `nome` , `telefone` , `login` , `senha`, `id_user` , `sexo` ) 
VALUES ('$nome', '$tel', '$login', '$senha', '', '$sexo')";

mysqli_query($conexao,$query);


echo '<script type="text/javascript">alert("User cadastrado com sucesso!")</script>';
include("principal.php");

?> 
</body>
</html>
