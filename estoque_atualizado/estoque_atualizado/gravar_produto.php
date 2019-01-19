<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>Produtos</title>

	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
</head>
<body>

	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
	$nome= $_POST ["nome"];
	$nome_produto= $_POST ["nome_produto"];
	$codigo_produto = $_POST["codigo_produto"];
	$qtde= $_POST ["qtde"];
	$fornecedor= $_POST ["fornecedor"];
	$tel= $_POST ["telefone"];
	

//Gravando no banco de dados ! conectando com o localhost - mysql

$servidor = "localhost";
$usuario = "root";
$senhadb = "";
$bd = "estoque";
	$conexao = mysqli_connect($servidor,$usuario,$senhadb,$bd);

// $conexao = mysql_connect("localhost","root"); //localhost � onde esta o banco de dados.

	if (!$conexao)
		die ("Erro de conexao com localhost, o seguinte erro ocorreu -> ".mysqli_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao, $bd); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
	die ("Erro de conexao com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());


// 

$query = "select desc_produto from produto where desc_produto = '".$nome_produto."' ";

$result = mysqli_query($conexao,$query);

$resposta=mysqli_num_rows($result);

if ( $resposta > 0 ){
	echo '<script type="text/javascript">alert("Ja existe esse produto!")</script>';
}
else{
	$query = "INSERT INTO `produto` ( `desc_produto` , `qtde` , `codigo_produto` ,  `data_chegada` , `fornecedor`, `tel_forn` , `id_produto` )
	VALUES ('$nome_produto', $qtde, $codigo_produto, now(), '$fornecedor', '$tel', '' )";
	
	mysqli_query($conexao,$query);
	
	$query = "INSERT INTO `entrada` ( `nome_user` , `desc_produto` , `data_modific` , `inseriu`) 
	VALUES ('$nome', '$nome_produto' , now(), $qtde)";
	
	mysqli_query($conexao,$query);
	
	echo '<script type="text/javascript">alert("Produto Inserido com sucesso!")</script>';
	
}


include("principal.php");


?> 

<!--<a href="principal.php">Voltar</a>-->


</body>
</html>
