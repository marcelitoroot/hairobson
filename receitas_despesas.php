<?php
   include "valida_sessao.php";
   // include" conecta_mysql.inc ";
   $nome_usuario = $_SESSION["nome_usuario"];
   // £resultado = mysql_query (" SELECT id FROM usuarios WHERE login = "£nome_usuario "");
   // £id = mysql_result ( £resultado ,0," id ");
   // mysql_close ( £con );
   $t            = $_GET['t'];
   switch ($t) {
       case 1:
           $tipo = "receita";
           break;
       case 2:
           $tipo = "despesa";
           break;
   }
   ?>
<html>
   <head>
   <style>
    .hue{ background-color: white;width: 700px;}
	.umidaqui {
      font-family: "Comic Sans MS", cursive, sans-serif;
      text-decoration: none;
      color: blue;
    }
    .umidaqui:hover {
      color: red;
    }
	</style>
      <title> Controle de Finanças </title>
   </head>
   <body background="wat3.png">>
      <center>
		<div class="hue">
		<a class="umidaqui">
         <img src="60765175.jpg" width ="45%"/>
         <h1> Sistema de Controle de Finanças Empresarial </h1>
         <hr width ="700px"/>
		 </a>
		 </div>
		 
         <div class="hue">
		<a class="umidaqui">
		 <br/>Formulário para cadastro de <?php
            echo $tipo;
            ?> (*Obrigatório) <br/><br/>
         <form method = "post" action = "gravar.php" name ="fCadRecDes">
            <table>
               <tr>
                  <td width ="130px">Nome*: </td>
                  <td width ="200 px"><input size ="80" type = "text" name = "nome"></td>
               </tr>
               <tr>
                  <td width ="130 px">Classe *: </td>
                  <td width ="200 px">
                     <input type = "radio" name = "classe" value ="1" checked>Variável
                     <input type = "radio" name = "classe" value ="2" onclick ="">Fixa
                  </td>
               </tr>
               <tr>
                  <td width ="130 px">Mês de Referência*: </td>
                  <td width ="200 px">
                     <select name = "mesRef">
                        <option value ="1">Janeiro</option>
                        <option value ="2">Fevereiro</option>
                        <option value ="3">Março</option>
                        <option value ="4">Abril</option>
                        <option value ="5">Maio</option>
                        <option value ="6">Junho</option>
                        <option value ="7">Julho</option>
                        <option value ="8">Agosto</option>
                        <option value ="9">Setembro</option>
                        <option value ="10">Outubro</option>
                        <option value ="11">Novembro</option>
                        <option value ="12">Dezembro</option>
                     </select>
                  </td>
               </tr>
               <tr>
                  <td width ="130 px">Valor* (R$): </td>
                  <td width ="200 px">
                     <input size ="10" type = "text" name = "valor">(formato(xx.xx))
                  </td>
               </tr>
               <tr>
                  <td width ="130 px">Descrição: </td>
                  <td width ="200 px">
                     <textarea rows ="7" cols ="69" name = "descricao"></textarea>
                  </td>
               </tr>
               <tr>
                  <td width ="130 px">
                     <input type = "button" value = "Voltar" name = "voltar "
                        onclick = "javascript: history.back()">
                  </td>
                  <td width ="200 px">
                     <input type = "reset" value = "Limpar">
                     <input type = "submit" value = "Salvar">
                     <input type = "hidden" name ="t"
                        value = "<?php
                           echo $t;
                           ?>">
                  </td>
               </tr>
            </table>
			</a>
			</div>
         </form>
      </center>
   </body>
</html>