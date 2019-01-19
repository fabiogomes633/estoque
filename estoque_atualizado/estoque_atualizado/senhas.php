<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Alterar Senhas</title>
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

<h2><center>##### Alteracoes de senhas #####</center></h2>
<br>
<b>
	<body>
		<center>
			<form id="cadastro" name="cadastro" method="post" action="mudar_senha.php" onsubmit="return validaCampo(); return false;">
				<table width="625" border="0">
					
					<tr>
						<td width="69">Login:</td>
						<td width="546"><input name="login" type="text" id="login" size="70" maxlength="60" /></td>
					</tr>

					<tr>
						<td>Senha atual</td>
						<td><input name="senha_atual" type="password" id="senha_atual" maxlength="12" /></td>
					</tr>
					
					<tr>
						<td>Nova Senha:</td>
						<td><input name="senha" type="password" id="senha" maxlength="12" /></td>
					</tr>
					
					<tr>
						<td colspan="2"><center>
							<p>
								<input name="cadastrar" type="submit" id="cadastrar" value="Concluir" /> 
								<input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
							</p>
						</td>
					</center>
				</tr>
				
			</table>
		</form>
	</center>
</b>

</body>
</html>
