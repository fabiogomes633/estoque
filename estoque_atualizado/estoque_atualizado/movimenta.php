<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Relatorio de Movimentacao</title>
	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
	<link rel="stylesheet" media="all" type="text/css" href="menu_style.css" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="ie.css" />
<![endif]-->

</head>
<body background="images/branco.jpg">

	<div class="nav">
		<div class="table">

			<ul class="select"><li><a href="principal.php"><b>Home</b></a></li></ul>

			<ul class="select"><li><a href="saida.php"><b>Venda</b></a></li></ul>

			<ul class="select"><li><a href="#"><b>Produtos</b></a>
				<div class="select_sub">
					<b>
						<ul class="sub">
							<li><a href="entrada.php">Cadastrar novo Produto</a></li>
							<li><a href="cadastrar_produto.php">Entrada</a></li>
							<!--<li><a href="saida.php">Saida</a></li>-->
							<li><a href="atual.php">Estoque Atual</a></li>
							<li><a href="mov.php">Movimentacao do Estoque</a></li>
							<li><a href="pesquisa.php">Pesquisar Produto</a></li>
						</ul>
						<b>
						</div>
					</li>
				</ul>

				<ul class="select"><li><a href="#"><b>Cadastros</b></a>
					<div class="select_sub">
						<ul class="sub">
							<li><a href="user.php">Funcionarios</a></li>
							<li><a href="cliente.php">Cliente</a></li>
						</ul>
					</div>
				</li>
			</ul>

			<ul class="select"><li><a href="#"><b>Ferrasmentas</b></a>
				<div class="select_sub">
					<ul class="sub">
						<li><a href="senhas.php">Alterar Senhas</a></li>
						
					</ul>
				</div>
			</li>
		</ul>



		<ul class="select"><li><a href="index.php"><b>Sair</b></a>
		</li>
	</ul>

</div>
</div>
<br/>

<h3><center>### Movimentacao do Estoque ###</center></h3>
<?php 

$nome= $_POST ["nome_produto"];
$es= $_POST ["es"];
$dataini = $_POST["dataini"];
$datafim = $_POST["datafim"];

$servidor = "mysql942.umbler.com";
$usuario = "supratec";
$senhadb = "supra123";
$bd = "controle_estoque";;
$conexao = mysqli_connect($servidor,$usuario,$senhadb);

// $conexao = mysql_connect("localhost","root"); //localhost � onde esta o banco de dados.

if (!$conexao)
	die ("Erro de conexao com localhost, o seguinte erro ocorreu -> ".mysqli_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao,$bd); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
	die ("Erro de conexao com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());

// Colocando o In�cio da tabela

?>
<?php
if ( $es == 'saida'){
	?>
	<br><br>
	<center>
		<table border="1"><tr>
			<td><b>Retirado Para </b></td>
			<td><b>Produto </b></td>
			<td><b>Data de Retirada </b></td>
			<td><b>Quantidade Retirada </b></td>
			<td><b>Numero da Requisicao </b></td>
		</tr>
	</center>
	<?php
}
else{
	?>
	<center>
		<table border="1"><tr>
			<td><b> Quem Inseriu </b></td>
			<td><b> Produto </b></td>
			<td><b> Data de Chegada </b></td>
			<td><b> Quantidade Inserida </b></td>
		</tr>
	</center>
	<?php
}
?>

<?php 

// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
//$query = "SELECT *,date_format(data_modific,'%d/%m/%Y') as data_modific FROM ".$es." WHERE desc_produto = '".$nome."' ";

//$query = "SELECT *,date_format(data_modific,'%d/%m/%Y') as data_modific FROM '.$es.' WHERE `desc_produto` LIKE '.$nome.' AND `data_modific` BETWEEN '$_POST[dataini]' AND '$_POST[datafim]'";

	#$sql = "SELECT * FROM '.$es.' WHERE data_modific between '$_POST[dataini]' and '$_POST[datafim]'";

	//$resultado = mysqli_query($conexao,$query);

// inicio do bloo do pesquisa todos produtos da tabela	
if($nome == 'todos' and $es == 'entrada'){
	
	$sql3 = "SELECT * FROM `entrada` WHERE `data_modific` BETWEEN '$dataini' AND '$datafim'";
	$resultado3 = mysqli_query($conexao,$sql3);

	while ($linha = mysqli_fetch_array($resultado3)){
		?>
		<tr>
			<td><?php echo $linha['nome_user']; ?></td>
			<td><?php  echo $linha['desc_produto']; ?></td>
			<td><?php  echo $linha['data_modific']; ?></td>
			<td><?php  echo $linha['inseriu']; ?></td>
		</tr>
		<?php
	}	
}
	//fim do bloco de consulta toda a tabela
?>
<!-- ------------------------------------------------------------------- -->
<?php
if ($nome !='todos' AND $es == 'entrada' ){

	$sql = "SELECT * FROM `entrada` WHERE `desc_produto` LIKE '$nome' AND `data_modific` BETWEEN '$dataini' AND '$datafim'";

	/*$sql = "SELECT * FROM entrada WHERE data_modific between '$_POST[dataini]' and '$_POST[datafim]'";
*/
	$resultado1 = mysqli_query($conexao,$sql); 

	while ($linha = mysqli_fetch_array($resultado1)) {
		?>
		<tr>
			<td><?php echo $linha['nome_user']; ?></td>
			<td><?php  echo $linha['desc_produto']; ?></td>
			<td><?php  echo $linha['data_modific']; ?></td>
			<td><?php  echo $linha['inseriu']; ?></td>
		</tr>
		<?php 
	}
	?>
	<!-- ------------------------------------------------------------------- -->
	<?php

}


// inicio do bloo do pesquisa todos produtos da tabela	
if($nome == 'todos' and $es == 'saida'){
	
	$sql4 = "SELECT * FROM `saida` WHERE `data_modific` BETWEEN '$dataini' AND '$datafim'";
	$resultado4 = mysqli_query($conexao,$sql4);

	while ($linha = mysqli_fetch_array($resultado4)){
		?>
		<tr>
			<td><?php echo $linha['nome_user']; ?></td>
			<td><?php  echo $linha['desc_produto']; ?></td>
			<td><?php  echo $linha['data_modific']; ?></td>
			<td><?php  echo $linha['retirou']; ?></td>
			<td><?php  echo $linha['num_req']; ?></td>
		</tr>
		<?php
	}	
}
	//fim do bloco de consulta toda a tabela
?>
<!-- ------------------------------------------------------------------- -->
<?php

if($nome !='todos' AND $es == 'saida'){

	$sql2 = "SELECT * FROM `saida` WHERE `desc_produto` LIKE '$nome' AND `data_modific` BETWEEN '$dataini' AND '$datafim'";

	/*$sql = "SELECT * FROM saida WHERE data_modific between '$_POST[dataini]' and '$_POST[datafim]'";
*/
	$resultado2 = mysqli_query($conexao,$sql2);

	while ($linha = mysqli_fetch_array($resultado2)) {
		?>
		<tr>
			<td><?php echo $linha['nome_user']; ?></td>
			<td><?php  echo $linha['desc_produto']; ?></td>
			<td><?php  echo $linha['data_modific']; ?></td>
			<td><?php  echo $linha['retirou']; ?></td>
			<td><?php  echo $linha['num_req']; ?></td>
		</tr>
		<?php 
	}
}
?>

</table>

<br>

<tr>
	<td><center><img onclick="print();" src="images/impressora.png" width="40" height="40" />
		<a href="mov.php"><b><img src="images/back.png" width="40" height="40"/></center></b></a></td>
	</tr>

</body>
</html>
