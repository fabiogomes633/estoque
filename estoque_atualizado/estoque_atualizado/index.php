<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<!-- General meta information -->
	<title>Tela de Login - Controle de Estoque</title>

	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="./js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<!-- // Load stylesheets -->
	
	<script>


		$(document).ready(function(){
			
			$("#submit1").hover(
				function() {
					$(this).animate({"opacity": "0"}, "slow");
				},
				function() {
					$(this).animate({"opacity": "1"}, "slow");
				});
		});


	</script>
	
</head>
<body>

	<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">
		
			<h2>Controle de Estoque</h2><br/>
		
			<div id="username_input">

				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
					<form method="post" action="cadastrado.php">
						<input type="text" name="p1" id="url" placeholder="Usuário">
						<img id="url_user" src="./images/mailicon.png" alt="">				
					</div>					
					
					<div id="username_inputright"></div>
				</div>

				<div id="password_input">

					<div id="password_inputleft"></div>

					<div id="password_inputmiddle">
						<input type="password" name="p2" id="url" placeholder="Senha">
						<img id="url_password" src="./images/passicon.png" alt="">
						
					</div>

					<div id="password_inputright"></div>

				</div>

				<div id="submit">
					
					<input type="image" src="images/submit_hover.png" id="submit1" value="Entrar">
					<input type="image" src="images/submit.png" id="submit2" value="Entrar">
				</form>
			</div>
			

			<div id="links_left">

				<a href="mailto:supratecsolucoes@gmail.com">Suporte</a>

			</div>

			<div id="links_right"><a href="#">SupraTec Sistemas</a></div>

		</div>

		<div id="wrapperbottom"></div>
		
		<div id="powered">
			Bem vindo ao Sistema! Faça login para acessar.
		</div>
	</div>

</body>
</html>