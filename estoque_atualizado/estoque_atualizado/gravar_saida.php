<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>Cadastro de Usuarios</title>
	
	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />	
</head>
<body>

	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$nome= $_POST ["nome"];//atribui��o do campo "nome" vindo do formul�rio para variavel
$qtde= $_POST ["qtde"];
$num= $_POST ["num"];
$nome_produto= $_POST ["nome_produto"];

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

$query = "select qtde from produto where desc_produto = '".$nome_produto."' ";

$result  = mysqli_query($conexao,$query);

$num_rows = mysqli_num_rows($result);

$sql = mysqli_fetch_array($result);

$test = $sql ['qtde'];


if ($qtde <= $test){

//Query que realiza a inser��o dos dados no banco de dados na tabela indicada acima
	$query = "UPDATE `produto` set qtde = qtde-$qtde where desc_produto = '".$nome_produto."' ";

	mysqli_query($conexao,$query);

	$query = "INSERT INTO `saida` ( `nome_user` , `desc_produto` , `data_modific` , `retirou` , num_req) 
	VALUES ('$nome', '$nome_produto', now(), $qtde , $num)";

	mysqli_query($conexao,$query);

	echo '<script type="text/javascript">alert("Retirada concluida!")</script>';

	include("saida.php");

}

else{
	echo '<script type="text/javascript">alert("Impossivel retirar essa quantidade!")</script>';
	include("principal.php");
}

?> 
</body>
</html>