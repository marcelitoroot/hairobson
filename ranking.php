<?php
   include "valida_sessao.php";
   include "conecta_mysql.php";
   $nome_usuario   = $_SESSION["nome_usuario"];
   $perfil_usuario = $_SESSION["perfil_usuario"];
   $resultado      = mysql_query("SELECT * FROM usuarios WHERE login = '$nome_usuario'");
   $sexo           = mysql_result($resultado, 0, "sexo");
   $nome           = mysql_result($resultado, 0, "nome");
   $query_select = "SELECT nome,ranking FROM usuarios ORDER BY ranking DESC";
   $res = mysql_query($query_select);


   mysql_close($con);

   $saud = "Olá, " . $nome;

?>
<!DOCTYPE html>
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
    <meta charset="utf-8">
    <title>Ranking</title>
  </head>
  <body background="wat3.png">>>
	<center>
      <div class="hue">
		<a class="umidaqui">
	  <table>
        <thead>
          <th>Posição</th><th>Nome</th>
		  </a>
		  </div>
        </thead>
		</div>
		</a>
        <?php

        while(($jok = mysql_fetch_array($res)) != false){
          ?>
          <tr>
            <td><?php echo $jok['ranking']; ?></td><td><?php echo $jok['nome']; ?></td>
          </tr>
          <?php
        }

        ?>
      </table>
  </body>
</html>
