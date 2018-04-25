# GeraBoletoPHPv1.0
Script php para gera boletos através da API-boletobancario.com 


Como usar:

Cadastre e gere o seu Token no link
https://sandbox.boletobancario.com/boletofacil/user/login.html para ambiente de testes ou https://www.boletobancario.com/boletofacil/user/login.html para ambiente de produção.

Abra o arquivo "boletofacil.php" em seu editor preferido e prucure a seguinte linha:

 function __construct($token, $sandbox = true) {
        (...)
    }
    
"$sandbox = true" para ambiente de teste.
"$sandbox = false" para ambiente de produção.


Abra o arquivo "geraBoleto.php" e prucure a seguinte linha:

$boletoFacil = new BoletoFacil("COLE_SEU_TOKEN_AQUI");


Dúvidas? Entre em contato via e-mail.

Wanderson Maracaipe
e-mail: wanderson@caolho.net
