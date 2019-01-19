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
<body>

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
<right>
	<a HREF="http://gmail.com" TARGET="_blank"><img src="images/if_gmail_1220340.png" idth="30" height="30"/></a>
	<a HREF="http://hotmail.com" TARGET="_blank" ><img src="images/if_Outlook_834704.png" width="30" height="30"/></a>
	<a HREF="http://facebook.com" TARGET="_blank" ><img src="images/if_Facebook_483484.png" width="30" height="30"/></a>

	<!-- Criando o relogio no sistema -->

	<script language="javascript"><!--W3e JAVAscript Preset
		var timerID = null;
		var timerRunning = false;
		function stopclock()
		{
			if(timerRunning)
				clearTimeout(timerID)
			timerRunning = false;
		}

		function startclock()
		{
			stopclock();
			showtime();
		}

		function showtime()
		{
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds();
			var timeValue = "" + ((hours > 24) ? hours - 24 : hours);
			timeValue  += ((minutes < 10) ? ":0" : ":") + minutes;
			timeValue  += ((seconds < 10) ? ":0" : ":") + seconds;
			timeValue  += (hours >= 12) ? " P.M." : " A.M.";
			document.clock.face.value = timeValue;
			timerID = setTimeout("showtime()",1000);
			timerRunning = true;
		}
//-->
</script>

<form name="clock" onSubmit="0">
	<input type="text" name="face" size="6">
</form>

<script>startclock();</script>


<!-- terminando o relogio no sistema -->

</right>
<br/>


<center><img src="images/estoque.png"/></center>
<center><img src="images/centraldasbaterias.jpg"/></center>

</body>
</html>
