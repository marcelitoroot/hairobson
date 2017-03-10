<?php
   include "valida_sessao.php";
	include "conecta_mysql.php";
   // Obtem o usuario que efetuou o login
   $nome_usuario = $_SESSION['nome_usuario'];
   // Obtem informacoes digitadas
   $t            = $_POST['t'];
   $nome         = $_POST['nome'];
   $classe       = $_POST['classe'];
   $mesRef       = $_POST['mesRef'];
   $valor        = $_POST['valor'];
   $descricao    = $_POST['descricao'];
   $query_select = "SELECT ranking FROM usuarios WHERE login = ('$nome_usuario')";
   $res = mysql_query($query_select);
   $jok = mysql_fetch_array($res);
   $lulz = $jok['ranking'];
   
   // Validacao dos campos nome e valor .
   if (empty($nome) || empty($valor)) {
       $erro = 1;
       $msg  = "Por favor , preencha todos os campos obrigatorios .";
   } elseif ((substr_count($valor, '.') != 1) || (!is_numeric($valor))) {
       $erro = 1;
       $msg  = " Digitar o campo valor apenas com numeros e no formato(xx.xx).";
   } else {
       // Tratamento da Descricao
       if (empty($descricao))
           $descricao = NULL;
       // Id do usuario que efetuou o login
       $resultado  = mysql_query("SELECT id FROM usuarios WHERE login ='$nome_usuario'");
       $idUsuario  = mysql_result($resultado, 0, "id");
       // Data e Hora
       $datahora   = date("Y-m-d H:i:s");
       // Formatar o valor para duas casas decimais .
       // Comandos SQL para insercao na base de dados .
       $comandoSQL = "INSERT INTO receitas_despesas (nome, tipo, classe, mes_referencia, datahora, valor, usuario, descricao) VALUES";
       $comandoSQL .= " ('$nome','$t','$classe','$mesRef','$datahora','$valor','$idUsuario','$descricao')";
	   if ($t == 1){
		  $lil = $valor * 1.5;
		  $lol = $lulz + $lil;
	   }
	   if ($t == 2){
		  $lil = $valor * 2.0;
			$lol = $lulz - $lil;
	   }
	   $query = "UPDATE usuarios SET ranking = ('$lol') WHERE login = ('$nome_usuario')";
	   $insert = mysql_query($query);
       $resultado = mysql_query($comandoSQL) or die(mysql_error($con));
       $msg = "Inclusao realizada com sucesso.";
   }
   mysql_close($con);
   ?>
<html>
   <head>
      <title> Controle de Finan&ccedil;as </title>
   </head>
   <body>
      <center>
         <img src="60765175.jpg" width ="30%" height ="30%"/>
         <h1>$$$ Sistema de Controle de Financas $$$</h1>
         <hr width="700 px"/>
         <br/>
         <?php
			echo "<p>" . $valor . "</p>";
			echo "<p>" . $msg . "</p>";
            ?>
         <p><a href="principal.php">Voltar</a></p>
      </center>
   </body>
</html>