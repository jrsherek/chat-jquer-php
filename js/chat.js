$(function() {
    //inserir
    $("#submit").click(function() {
        msg = $("#mensagem").val();
        if (msg.trim() !== '')
        {
            $.post('chat.php', {
                mensagem : msg,
                acao : 'inserir'
            }, function(retorno){
                $("#painel").prepend(retorno);
                $("#mensagem").val('');
            });
        }
    });
    // atualizar
    setInterval(function() {
        $.post('chat.php', {
            acao : 'atualizar'
        }, function (retorno){
            $("#painel").html(retorno);
        });

    }, 5000);

});