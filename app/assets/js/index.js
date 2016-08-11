$("#input_telefone").mask("(99) 99999-9999");
$("#input_valor_hora").mask('000.000.000.000.000,00', {reverse: true});

function check_presence(id, cls, success_msg, error_msg){
    if ($("#" + id).val() == '') {
        $("." + cls).show().removeClass("ok").addClass("erro")
        .text(success_msg);
        $("#" + id).focus();
    }else{
        $("." + cls).show().addClass("ok")
        .text(error_msg);
    }
}

$(document).ready(function() {
    $(".nome-msg").hide();
    $(".cpf-msg").hide();
    $(".msg").hide();
    $(".valor_hora-msg").hide();
    $(".email-msg").hide();
    $(".local-msg").hide();
    $(".img_link-msg").hide();
    $(".formacao-msg").hide();
    $(".sobre-msg").hide();

    $('#btn-save').click(function(){
        //atribuindo o valor do campo
        var sEmail  = $("#input_email").val();
        // filtros
        var emailFilter=/^.+@.+\..{2,}$/;
        var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/
        // condição
        if(!(emailFilter.test(sEmail))||sEmail.match(illegalChars)){
            $(".email-msg").show().removeClass("ok").addClass("erro")
            .text('Por favor, informe um email válido.');
            $("#input_email").focus();
        }else{
            $(".email-msg").show().addClass("ok")
            .text('Email informado está correto!');
        }
    
        if (!$('#input_disciplinas').find(":selected").text()) {
            $(".disciplinas-msg").show().removeClass("ok").addClass("erro")
            .text('Por favor, escolha no mínimo uma disciplina.');
            $("#input_disciplinas").focus();
        }else{
            $(".disciplinas-msg").show().addClass("ok")
            .text('Disciplina informada está correta!');
        }

        check_presence('input_nome', 'nome-msg', 'Por favor, informe um nome.', 'Nome informado está correto!');
        check_presence('input_cpf', 'cpf-msg', 'Por favor, informe um cpf.', 'Cpf informado está correto!');
        check_presence('input_valor_hora', 'valor_hora-msg', 'Por favor, informe um valor.', 'Valor informado está correto!');
        check_presence('input_email', 'email-msg', 'Por favor, informe um email.', 'Email informado está correto!');
        check_presence('input_local', 'local-msg', 'Por favor, informe um local.', 'Local informado está correto!');
        check_presence('input_img_link', 'img_link-msg', 'Por favor, informe um link para ixibir sua imagem.', 'Link informado está correto!');
        check_presence('input_formacao', 'formacao-msg', 'Por favor, informe uma formação acadêmica', 'Informação acadêmica está correta!');
        check_presence('input_sobre', 'sobre-msg', 'Por favor, informe os detalhes sobre você.', 'Dados informados estão corretos!');
    
    });

    $('#input_email').focus(function(){
        $(".email-msg.erro").hide();
    });
   });
