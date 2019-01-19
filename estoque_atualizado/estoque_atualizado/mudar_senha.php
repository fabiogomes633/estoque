<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>Mudandando senhas...</title>
	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
</head>
<body>

	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !

	$login= $_POST ["login"];
	$senha_atual= $_POST ["senha_atual"];
	$nova_senha= $_POST ["senha"];


//Gravando no banco de dados ! conectando com o localhost - mysql

	$servidor = "mysql942.umbler.com";
$usuario = "supratec";
$senhadb = "supra123";
$bd = "controle_estoque";
	$conexao = mysqli_connect($servidor,$usuario,$senhadb);

	if (!$conexao)
		die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());


	$banco = mysqli_select_db($conexao,$bd); 
	if (!$banco)
		die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

	$sql = "SELECT * FROM usuario WHERE login = '".$login."' AND senha = '".$senha_atual."' ";

	$consulta = mysqli_query($conexao,$sql);

	$contagem = mysqli_fetch_array($consulta);

	$resposta=mysqli_num_rows($consulta);


	if ($resposta > 0){

		$query = "UPDATE usuario set senha = '".$nova_senha."' where login = '".$login."' ";

		mysqli_query($conexao,$query);

	}

	echo '<script type="text/javascript">alert("Senha atualizada")</script>';

	include("principal.php");

	?> 
</body>
</html>