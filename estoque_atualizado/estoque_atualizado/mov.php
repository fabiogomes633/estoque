<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Movimentação Estoque</title>
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

<h3><center>### Movimentacao do Estoque ###</center></h3>


<?php
// conexao com o banco
$servidor = "localhost";
$usuario = "root";
$senhadb = "";
$bd = "estoque";
$conexao = mysqli_connect($servidor,$usuario,$senhadb);

// $conexao = mysql_connect("localhost","root"); //localhost � onde esta o banco de dados.

if (!$conexao)
	die ("Erro de conexao com localhost, o seguinte erro ocorreu -> ".mysqli_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao,$bd); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
	die ("Erro de conexao com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());
// fim da conexao
?>

<form id="cadastro" name="cadastro" method="post" action="movimenta.php" onsubmit="return validaCampo(); return false;">
	<center>
		<td>Produto:</td>
		<td><select name="nome_produto" id="nome_produto">
			<option value="todos">Todos</option>
			<?php
			$query = "SELECT desc_produto FROM produto";
			$resultado = mysqli_query($conexao,$query);

			while ($linha = mysqli_fetch_array($resultado)) {
				?>
				
				<option value="<?php echo $linha['desc_produto']; ?>"> <?php echo $linha['desc_produto']; ?> </option>
				
				<?php
			}
			?>	
			
		</select>

	</select>

	<td>Escolha:</td>
	<td><select name="es" id="es">
		<option value="entrada">Entrada</option>
		<option value="saida">Saida</option>
	</select>	
</center>


	<!-- colocando a data para filtro 

	<center>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
	  </script>
		<p>Data inicial: <input type="text" id="datepicker"></p>
	</center>

	<center>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
		  $( function() {
		    $( "#datepickerf" ).datepicker();
		  } );
	  </script>
		<p>Data Final:  <input type="text" id="datepickerf"></p>
	</center> 

	fim da data para filtro -->
	
	
	<!-- teste do novo calendario -->
	<br>
  <!--<center>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
	  $( function() {
	    var dateFormat = "yy/mm/dd",
	      from = $( "#from" )
	        .datepicker({
	          defaultDate: "+1w",
	          changeMonth: true,
	          numberOfMonths: 2
	        })
	        .on( "change", function() {
	          to.datepicker( "option", "minDate", getDate( this ) );
	        }),
	      to = $( "#to" ).datepicker({
	        defaultDate: "+1w",
	        changeMonth: true,
	        numberOfMonths: 2
	      })
	      .on( "change", function() {
	        from.datepicker( "option", "maxDate", getDate( this ) );
	      });
	 
	    function getDate( element ) {
	      var date;
	      try {
	        date = $.datepicker.parseDate( dateFormat, element.value );
	      } catch( error ) {
	        date = null;
	      }
	 
	      return date;
	    }
	  }

	 );  
	  </script>
	  <label for="from">Data inicial</label>
	<input type="text" id="from" name="from">
	<label for="to">Data Final</label>
	<input type="text" id="to" name="to">
</center>	


fim de teste -->
<center>
	<tr>
		<td>
			Data inicial:
		</td>
		<td>
			<input type="text" name="dataini" id="dataini">
		</td>
		<td>
			Data Final:
		</td>
		<td>
			<input type="text" name="datafim" id="datafim">
		</td>
	</tr>
</center>

<center>
	<br>
	<input name="cadastrar" type="submit" id="cadastrar" value="Filtrar" />
	<input name="limpar" type="reset" id="limparmov" value="Limpar" /> 
</center>




</form>
