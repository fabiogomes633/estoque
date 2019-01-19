<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Cadastrar Cliente</title>
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
        </b>
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
<head>
  <script type="text/javascript">
    function validaCampo()
    {
      if(document.cliente.nome.value=="")
      {
       alert("O Campo nome é obrigatório!");
       return false;
     }
     else 
       if(document.cliente.cpf.value=="")
       {
         alert("O Campo cpf é obrigatório!");
         return false;
       }
       else
         if(document.cliente.email.value=="")
         {
           alert("O Campo email é obrigatório!");
           return false;
         }
         else
           if(document.cliente.endereco.value=="")
           {
             alert("O Campo endereço é obrigatório!");
             return false;
           }
           else
             if(document.cliente.cidade.value=="")
             {
               alert("O Campo Cidade é obrigatório!");
               return false;
             }
             else
               if(document.cliente.estado.value=="")
               {
                 alert("O Campo Estado é obrigatório!");
                 return false;
               }
               else
                 if(document.cliente.bairro.value=="")
                 {
                   alert("O Campo Bairro é obrigatório!");
                   return false;
                 }
                 else
                   if(document.cliente.pais.value=="")
                   {
                     alert("O Campo país é obrigatório!");
                     return false;
                   }
                   else 
                    return true;

                }
                <!-- Fim do JavaScript que validará os campos obrigatórios! -->
              </script>
            </head>
            <br/>
            <h2><center>##### CADASTRO DE CLIENTE  #####</center></h2>
            <br/>

            <body>
              <center>
                <form id="cliente" name="cliente" method="post" action="gravar_cliente.php" onsubmit="return validaCampo(); return false;">
                  <table width="60%" border="0">
                    <tr>
                      <td width="69">Nome:</td>
                      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="200" />
                        <span class="style1">*</span></td>
                      </tr>
                      <tr>
                        <td width="69">CPF:</td>
                        <td width="546"><input name="cpf" type="text" id="cpf" size="70" maxlength="15" />
                          <span class="style1">*</span></td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td><input name="email" type="text" id="email" size="70" maxlength="60" />
                            <span class="style1">*</span></td>
                          </tr>
                          <tr>
                            <td>Sexo:</td>
                            <td><input name="sexo" type="radio" value="Masculino" checked="checked" />
                              Masculino 
                              <input name="sexo" type="radio" value="Feminino" />
                              Feminino <span class="style1">*</span> </td>
                            </tr>
                            <tr>
                              <td>DDD:</td>
                              <td><input name="ddd" type="text" id="ddd" size="4" maxlength="3" />
                                Telefone:
                                <input name="telefone" type="text" id="telefone" maxlength="9" />
                                <span class="style3">Apenas n&uacute;meros</span> </td>
                              </tr>
                              <tr>
                                <td>Endereço:</td>
                                <td><input name="endereco" type="text" id="endereco" size="70" maxlength="200" />
                                  <span class="style1">*</span></td>
                                </tr>
                                <tr>
                                  <td>Cidade:</td>
                                  <td><input name="cidade" type="text" id="cidade" maxlength="20" />
                                    <span class="style1">*</span></td>
                                  </tr>
                                  <tr>
                                    <td>Estado:</td>
                                    <td><select name="estado" id="estado">
                                      <option>Selecione...</option>
                                      <option value="AC">AC</option>
                                      <option value="AL">AL</option>
                                      <option value="AP">AP</option>
                                      <option value="AM">AM</option>
                                      <option value="BA">BA</option>
                                      <option value="CE">CE</option>
                                      <option value="ES">ES</option>
                                      <option value="DF">DF</option>
                                      <option value="MA">MA</option>
                                      <option value="MT">MT</option>
                                      <option value="MS">MS</option>
                                      <option value="MG">MG</option>
                                      <option value="PA">PA</option>
                                      <option value="PB">PB</option>
                                      <option value="PR">PR</option>
                                      <option value="PE">PE</option>
                                      <option value="PI">PI</option>
                                      <option value="RJ">RJ</option>
                                      <option value="RN">RN</option>
                                      <option value="RS">RS</option>
                                      <option value="RO">RO</option>
                                      <option value="RR">RR</option>
                                      <option value="SC">SC</option>
                                      <option value="SP">SP</option>
                                      <option value="SE">SE</option>
                                      <option value="TO">TO</option>
                                    </select>
                                    <span class="style1">*      </span></td>
                                  </tr>
                                  <tr>
                                    <td>Bairro:</td>
                                    <td><input name="bairro" type="text" id="bairro" maxlength="20" />
                                      <span class="style1">*</span></td>
                                    </tr>
                                    <tr>
                                      <td>País:</td>
                                      <td><input name="pais" type="text" id="pais" maxlength="20" />
                                        <span class="style1">*</span></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2"><p>
                                          <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" /> 
                                          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                                          <a href="mov.php"><b><img src="images/back.png" width="20" height="20"/></b></a>  
                                          <br />
                                          <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
                                          <p>&nbsp; </p></td>
                                        </tr>
                                      </table>
                                    </form>
                                  </center>




                                </body>
                              </body>
                              </html>
