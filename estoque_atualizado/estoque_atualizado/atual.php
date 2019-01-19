<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Sistema de Estoque</title>

	<link rel="stylesheet" media="all" type="text/css" href="menu_style.css" />
	<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
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

			<ul class="select"><li><a href="#"><b>Ferramentas</b></a>
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



<h2><center>Produtos do Estoque!!!</center></h2>
<?php 

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

// Colocando o In�cio da tabela
?>
<br><br>
<center>
	<table border="1"><tr>
		<td><b>Codigo Produto</b></td>
		<td><b>Produto</b></td>
		<td><b>Quantidade</b></td>
		<td><b>Data de Chegada</b></td>
		<td><b>Fornecedor</b></td>
		<td><b>Tel Fornecedor</b></td>
	</tr>
</center>
<?php 

// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
$query = "SELECT codigo_produto,desc_produto,qtde,date_format(data_chegada,'%d/%m/%y') as data_chegada ,fornecedor,tel_forn FROM produto";
$resultado = mysqli_query($conexao,$query);

while ($linha = mysqli_fetch_array($resultado)) {
	?>
	<tr>
		<td><?php echo $linha['codigo_produto']; ?></td>
		<td><?php echo $linha['desc_produto']; ?></td>
		<td><?php  echo $linha['qtde']; ?></td>
		<td><?php  echo $linha['data_chegada']; ?></td>
		<td><?php  echo $linha['fornecedor']; ?></td>
		<td><?php  echo $linha['tel_forn']; ?></td>
	</tr>
	<?php 
}
?>

</table>

<br>
<tr>
	<td><center><img onclick="print();" src="images/impressora.png" width="40" height="40" />
	</tr>

</body>
</html>




