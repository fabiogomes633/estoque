<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Sistema de Estoque</title>
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


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CADASTRO DE CLIENTES COM BANCO DE DADOS E PHP</title>
<style type="text/css">
  <!--
  .style1 {
    color: #FF0000;
    font-size: x-small;
  }
  .style3 {color: #0000FF; font-size: x-small; }
</style>
<script type="text/javascript">
  function validaCampo()
  {
    if(document.cadastro.nome.value=="")
    {
      alert("O Campo nome e obrigatorio!");
      return false;
    }
    else
      return true;
  }
  <!-- Fim do JavaScript que validar� os campos obrigat�rios! -->
</script>

</head>

<?php 

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

// Colocando o In�cio da tabela
?>



<h2><center>##### Saida de Produtos ######</center></h2>
<br>
<b>
  <body>
    <center>
      <form id="cadastro" name="cadastro" method="post" action="gravar_saida.php" onsubmit="return validaCampo(); return false;">
        <table width="625" border="0">
          
         <tr>
          <td width="69">Cliente:</td>
          <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
          </td>
        </tr>
        <td>Produto:</td>
        <td><select name="nome_produto" id="nome_produto">
          <option value"#">Selecione...</option>
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
        


        
        <tr>
          <td>Quantidade:</td>
          <td>
            <input type="number" name="qtde" id="qtde" min="1" max="10" />
          </td>
          <!-- <td><input name="qtde" type="text" id="qtde" maxlength="20" /> </td> -->
        </tr>
        <tr>


          <tr>
            <td>Num. requisicao:</td>
            
            <?php
            $sql3 = "SELECT * FROM saida ORDER BY num_req DESC LIMIT 1";
            $resul = mysqli_query($conexao,$sql3);

            if (mysqli_num_rows($resul) =='' ) {
              $novo_codigo="5";
              ?>

              <td><input type="text" name="num" id="textfield" disabled="disabled" value="<?php echo $novo_codigo?>"></td>
              <input type="hidden" name="num" value="<?php echo $novo_codigo?>">

              <?php 
            }else{
              while($res_1 = mysqli_fetch_assoc($resul)){
                $novo_codigo = $res_1['num_req']+1;
                ?>
                <td><input type="text" name="num" id="textfield" disabled="disabled" value="<?php echo $novo_codigo?>"></td>
                <input type="hidden" name="num" value="<?php echo $novo_codigo?>">

                <?php } } ?>
                
              </tr>
              


              <tr>
                <tr>
                  <td colspan="2"><p>
                    <input name="cadastrar" type="submit" id="cadastrar" value="Concluir!" /> 
                    
                    <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                    
                  </p>
                  <p>  </p></td>
                </tr>
              </tr>
            </table>
          </form>
        </center>
      </b>


    </body>
    </html>
