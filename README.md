# GeraBoletoPHPv1.0
Script php para gerar boletos através da API-boletobancario.com 

<b>Como usar:</b>

Cadastre-se e gere o seu Token no link:<br/> 
https://sandbox.boletobancario.com/boletofacil/user/login.html para ambiente de testes <br/> https://www.boletobancario.com/boletofacil/user/login.html para ambiente de produção.

Abra o arquivo "boletofacil.php" em seu editor preferido e prucure a seguinte linha:

 <pre>
 function __construct($token, $sandbox = true) { 
        (...)        
    }
   </pre>  
   
    
"$sandbox = true" para ambiente de teste.<br/>
"$sandbox = false" para ambiente de produção.


Abra o arquivo "geraBoleto.php" e prucure a seguinte linha:

<pre>
$boletoFacil = new BoletoFacil("COLE_SEU_TOKEN_AQUI");
</pre>


Dúvidas? Entre em contato via e-mail.

Wanderson Maracaipe<br/>
e-mail: wanderson@caolho.net
