<?php ini_set('display_errors', 0); ?>

<?php
require 'boletofacil.php';
use BoletoFacil\BoletoFacil;

if(isset($_POST['amount'])){
    // substitui a "," por "."
    $valorFatura = str_replace(',','.',$_POST['amount']);
    $data = $_POST['dueDate'];

    $date = new DateTime("$data");
    $dataVencimento = $date->format('d/m/Y');

    // verifica se o amount é valor numerico
    if(is_numeric($valorFatura)){

        // verifica valor minimo para boleto
        if($valorFatura > 2.50){
            // gera a fatura

            $nomePagador = $_POST['payerName'];
            $cpfCnpjPagador = $_POST['payerCpfCnpj'];
            $emailPagador = $_POST['payerEmail'];
            $valorFatura = $valorFatura;
            $dataVencimento = $dataVencimento;
            $parcelamento = $_POST['installments'];
            $descricaoPedido = $_POST['description'];

            //divide o valor total do boleto
            $calcValor = $valorFatura / $parcelamento;

            $boletoFacil = new BoletoFacil("COLE_SEU_TOKEN_AQUI");
            $boletoFacil->payerName = $nomePagador;
            $boletoFacil->payerCpfCnpj = $cpfCnpjPagador;
            $boletoFacil->payerEmail = $emailPagador;
            $boletoFacil->amount = $calcValor;
            $boletoFacil->dueDate = $dataVencimento;
            $boletoFacil->description = $descricaoPedido;
            $boletoFacil->installments = $parcelamento;

            $xml = $boletoFacil->issueCharge();
            $boleto = simplexml_load_string($xml);

            $success = $boleto->success;
            $error = $boleto->errorMessage;
            $checkoutUrl = $boleto->data->charges->charge->checkoutUrl;
            $barcodeNumber = $boleto->data->charges->charge->billetDetails->barcodeNumber;

            if($success == "false"){
                echo $error ."\n";
            }else{

                echo '<center>'
                    .'<h3>Obrigado, '.$nomePagador.'! </h3>'
                    .'<p><b>Enviamos uma copia do boleto para o seu email. Clique em "Imprimir", caso queira visualiza-lô agora. </b></p>'
                    .'<br/><a href="'.$checkoutUrl.'" target="_blank" class="btn btn-primary">Imprimir</a>'
                    .'</center><br/>';
            }

        }else{
            echo "ATENÇÃO: Valor da Fatura não deve ser menor que R$ 2.50.";
        }
    }else{
        echo "Por favor, informe valores numericos no campo \"VALOR DA FATURA\"";
    }
    
}

?>
