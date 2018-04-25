function geraBoleto(){

        var payerName = $('#payerName').val();
    if($("#payerName").val()==""){
        alert("Preencha o campo 'NOME COMPLETO'. ");
        return false;
    }
        var payerCpfCnpj = $('#payerCpfCnpj').val();
    if($("#payerCpfCnpj").val()==""){
        alert("Preencha o campo 'CPF/CNPJ'. ");
        return false;
    }
        var payerEmail = $('#payerEmail').val();
    if($("#payerEmail").val()==""){
        alert("Preencha o campo 'E-MAIL'. ");
        return false;
    }
        var amount = $('#amount').val();
    if($("#amount").val()==""){
        alert("Preencha o campo 'VALOR DA FATURA'. ");
        return false;
    }
        var installments = $('#installments').val();
    if($("#installments").val()==""){
        alert("Selecione a quantidade de parcelas. ");
        return false;
    }
        var description = $('#description').val();
    if($("#description").val()==""){
        alert("Preencha o campo 'DESCRIÇÃO DO PEDIDO'. ");
        return false;
    }

    var dueDate = $('#dueDate').val();
    if($("#dueDate").val()==""){
        alert("Escolha uma data de vencimento. ");
        return false;
    }

        $.post('geraBoleto.php', {
            payerName: payerName, payerCpfCnpj: payerCpfCnpj, payerEmail: payerEmail,
            amount: amount, installments: installments, description: description, dueDate: dueDate
        }, function (data) {
            $("#form").hide(600);
            $("#retorno").html(data);

        });
    }


