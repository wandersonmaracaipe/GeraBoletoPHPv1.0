<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Gerador de fatura!</title>
  </head>
  <body>
      <center style="margin-top: 250px;">
          <h2>Clique no botão para gerar uma fatura.</h2><br/>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" data-whatever="@mdo">Gerar Fatura</button>
      </center>
    

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div id="retorno"></div>
        <form id="form">
  <div class="form-group">
      <label for=""><b>Dados Pessoais</b></label>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="payerName" placeholder="Nome Completo">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="payerCpfCnpj" placeholder="CPF ou CNPJ">
    </div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="payerEmail" placeholder="E-mail. Ex.: joao@gmail.com">
  </div>
  
<div class="form-group">
    <label for=""><b>Dados da Fatura</b></label>
  </div>     
            
            
  <div class="form-row">
    <div class="form-group col-md-4">
      <input type="text" class="form-control" id="amount" value="350,00" placeholder="Valor da Fatura">
    </div>

      <div class="form-group col-md-5">
      <input type="date" class="form-control" id="dueDate" placeholder="Vencimento">
    </div>

    <div class="form-group col-md-3">
      <select id="installments" class="form-control">
        <option selected value="">Parcelas</option>
        <option value="1">1x</option>
        <option value="2">2x</option>
        <option value="3">3x</option>
        <option value="4">4x</option>
        <option value="5">5x</option>
      </select>
    </div>
      <div class="form-group col-md-12">
          <input type="email" class="form-control" id="description" placeholder="Descrição do Pedido">
      </div>

  </div>
            <div class="modal-footer" id="btn">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="geraBoleto();">Continuar</button>
            </div>
</form>

      </div>

    </div>
  </div>
</div>




      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/function.js"></script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>     

      