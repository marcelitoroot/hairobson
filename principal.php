<?php
   include "valida_sessao.php";
   include "conecta_mysql.php";
   $nome_usuario   = $_SESSION["nome_usuario"];
   $perfil_usuario = $_SESSION["perfil_usuario"];
   $resultado      = mysql_query("SELECT * FROM usuarios WHERE login = '$nome_usuario'");
   $sexo           = mysql_result($resultado, 0, "sexo");
   $nome           = mysql_result($resultado, 0, "nome");
   
   mysql_close($con);
   
   $saud = "Olá, " . $nome;
   
?>
<html>
   <head>
     <style>
    .hue{ background-color: white;width: 500px;}
	.umidaqui {
      font-family: "Comic Sans MS", cursive, sans-serif;
      text-decoration: none;
      color: blue;
    }
    .umidaqui:hover {
      color: red;
    }
  </style>
      <title>Controle de Finanças</title>
   </head>
   <body background="wat3.png">>
      <form method ="POST" action ="login.php">
         <center>
            <img src="60765175.jpg" width ="15%"/>
            <div class="hue">
			<a class="umidaqui">
			<h1>Sistema de Controle de Finanças Empresarial </h1>
            <hr width ="700 px"/>
			</div>
			</a>
            <br/>
			<div class="hue">
			<a class="umidaqui">
            <?php
               echo $saud . "" . "[ Perfil: " . $perfil_usuario . "]";
               ?><a href ="logout.php">Sair </a>
            <hr width ="700 px"/>
			</div>
			</a>
			<div class="hue">
			<a class="umidaqui">
            <p>Favor , escolha a opção desejada: </p>
            <b>Incluir: </b><br/>
            <a href ="receitas_despesas.php?t=1">Receitas </a><br/>
            <a href ="receitas_despesas.php?t=2">Despesas </a><br/><br/>
			</div>
			</a>
			
			<div class="hue">
			<a class="umidaqui">
            <b>Visualizar: </b><br/>
			<a href ="ranking.php"> Conferir o Ranking </a><br/>
			</div>
			</a>
			<div class="hue">
			<a class="umidaqui">
            Saldos Mensais: <a href ="saldosMensaisPlan.php">[Planilha]</a>
            <br/>
            <?php
               if ($perfil_usuario == 2) {
               ?>
            <b>Administração: </b><br/>
            <?php
               }
               ?>
			</div>
			</a>
         </center>
      </form>
   </body>
</html>