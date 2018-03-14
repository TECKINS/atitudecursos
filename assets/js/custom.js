function carregaPag(pagina) {
    $.ajax({
        url: 'paginas/'+pagina+'.php',
        type: 'post',
    })
    .done(function(retorno) {
        $('#page-inner').html(retorno);
    });
}

$(document).ready(function () {
    $('#menu-toggle').click(function(event) {
        $('.sidebar-menu').toggleClass('active');
    });
});
