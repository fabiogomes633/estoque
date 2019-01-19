<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Gravar Cliente</title>
	<link rel="stylesheet" media="all" type="text/css" href="menu_style.css" />
	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
</head>
<body>
	<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome = $_POST['nome'];	//atribuição do campo "nome" vindo do formulário para variavel
$cpf = $_POST['cpf'];	//atribuição do campo "nome" vindo do formulário para variavel	
$email = $_POST['email'];	//atribuição do campo "email" vindo do formulário para variavel
$ddd = $_POST['ddd'];	//atribuição do campo "ddd" vindo do formulário para variavel
$tel = $_POST['telefone'];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco = $_POST['endereco'];	//atribuição do campo "endereco" vindo do formulário para variavel
$cidade = $_POST['cidade'];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado = $_POST['estado'];	//atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST['bairro'];	//atribuição do campo "bairro" vindo do formulário para variavel
$pais = $_POST['pais'];	//atribuição do campo "pais" vindo do formulário para variavel
$sexo = $_POST['sexo'];	//atribuição do campo "sexo" vindo do formulário para variavel
//Gravando no banco de dados ! conectando com o localhost - mysql

$servidor = "localhost";
$usuario = "root";
$senhadb = "";
$bd = "estoque";
$conexao = mysqli_connect($servidor,$usuario,$senhadb);

// $conexao = mysql_connect("localhost","root"); //localhost � onde esta o banco de dados.

if (!$conexao)
	die ("Erro de conexao com localhost, o seguinte erro ocorreu -> ".mysqli_error());


//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao, $bd); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
	die ("Erro de conexao com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());


// 


$query = "SELECT cpf FROM cliente WHERE cpf = '".$cpf."' ";

$result = mysqli_query($conexao,$query);

$resposta = mysqli_num_rows($result);

//
if ($resposta > 0 ){
	echo '<script type="text/javascript">alert("CPF já cadastrado!")</script>';
}
else{

//$sql = "INSERT INTO cliente ( `nome` , `cpf` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `id` ) 
//VALUES ('$nome', `$cpf` , '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '')";
	
	$sql = 
	"INSERT INTO 
	cliente
	(nome, cpf, email, sexo, ddd, telefone, endereco, cidade, estado, bairro, pais, id_cliente ) 
	VALUES
	('$nome', '$cpf', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '' ) ";
	
	
	

	mysqli_query($conexao,$sql);

	echo '<script type="text/javascript">alert("Seu cadastro foi realizado com sucesso!  Agradecemos a atenção!")</script>';

}

include "principal.php";

?>

</body>
</html>
