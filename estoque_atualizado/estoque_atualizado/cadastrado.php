<?php

$login = $_POST["p1"];
$senha = $_POST["p2"];

$banco = "estoque";


$conexao = mysqli_connect('localhost','root','');
$bd = mysqli_select_db($conexao,$banco);

if (!$conexao)
	die ("Erro de conexao com localhost, o seguinte erro ocorreu -> ".mysqli_error());

$sql = "SELECT * FROM usuario WHERE login = '".$login."' AND senha = '".$senha."' ";

$consulta = mysqli_query($conexao,$sql);

$contagem = mysqli_fetch_array($consulta);

$resposta=mysqli_num_rows($consulta);

if ($resposta > 0){

	$v1 = $contagem['login'];
	$v2 = $contagem['senha'];


	if ( (strcmp( $v1, $login)==0) && (strcmp($v2,$senha)==0) )  {
		

		header ('Location:principal.php');

	}

	else{
		
		header ('Location:index.php');

	}
}
else{

	header ('Location:index.php');

}


?>
