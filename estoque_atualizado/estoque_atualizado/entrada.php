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
  s
  <!-- Fim do JavaScript que validar os campos obrigatorios! -->
</script>
</head>
<h2><center>##### Entrada de Produtos  #####</center></h2>
<br>

<body>
  <center>
    <form id="cadastro" name="cadastro" method="post" action="gravar_produto.php" onsubmit="return validaCampo(); return false;">
      <table width="625" border="0">
        
        <tr>
          <td width="69">Seu Nome:</td>
          <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
          </td>
        </tr>
        
        <tr>
          <td width="69">Produto:</td>
          <td width="546"><input name="nome_produto" type="text" id="nome_produto" size="70" maxlength="60" />
          </td>
        </tr>
        <tr>
          <td width="69">Código:</td>
          <td width="546"><input name="codigo_produto" type="text" id="codigo_produto" size="70" maxlength="60"/>
          </td>
        </tr>
        
        <tr>
          <td>Quantidade:</td>
          <td><input type="number" name="qtde" id="qtde" min="1" max="200" />
          </td>
        </tr>
        <tr>
         
          <tr>
            <td>Fornecedor:</td>
            <td><input name="fornecedor" type="text" id="fornecedor" maxlength="20" />
            </td>
          </tr>
          <tr>
           
            <tr>
              <td>Tel do Fornecedor:</td>
              <td><input name="telefone" type="text" id="telefone" maxlength="20" />
              </td>
            </tr>
            <tr>

              <tr>
                <td colspan="2"><p>
                  <input name="cadastrar" type="submit" id="cadastrar" value="Concluir!" /> 
                  
                  <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                  
                </p>
                <p>  </p></td>
              </tr>
            </table>
          </form>
        </center>


      </body>
      </html>
