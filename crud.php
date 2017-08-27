<script>
$(document).ready(function() {
  $('#tblEditavel tbody tr td.editavel').dblclick(function() {
      if ($('td > input').length > 0) {
        return;
      }
      var conteudoOriginal = $(this).text();
      var novoElemento = $('<input/>', {
        type: 'text',
        value: conteudoOriginal
      });
      $(this).html(novoElemento.bind('blur keydown', function(e) {
        var keyCode = e.which;
        var conteudoNovo = $(this).val();
        if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal) {
          var objeto = $(this);
          $.ajax({
            type: "POST",
            url: "#",
            data: {
              id: $(this).parents('tr').children().first().text(),
              campo: $(this).parent().attr('title'),
              valor: conteudoNovo
            }, //added this comma here
            success: function(result) {
              objeto.parent().html(conteudoNovo);
              $('body').append(result);
            }
          })
        } else if (keyCode == 27 || e.type == 'blur'){
          $(this).parent().html(conteudoOriginal);
          }
      }));
      $(this).children().select();
    
        //} removed the extra } from here.
    });

  })
</script>
<html>
  <head>
  <title>CRUD</title>
  <style>
    table {
      border-collapse: collapse;
    }
    table,
    td,
    th {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
  </head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table id="tblEditavel">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Valor</th>
      <th>Vencimento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>74</td>
      <td title="Nome" class="editavel">Conta de Telefone</td>
      <td title="valor" class="editavel">2.350,00</td>
      <td title="vencimento" class="editavel">10/02/2017</td>
    </tr>
    <tr>
      <td>74</td>
      <td title="Nome" class="editavel">Conta de água</td>
      <td title="valor" class="editavel">235,00</td>
      <td title="vencimento" class="editavel">18/02/2017</td>
    </tr>

  </tbody>
</table>
</body>
<html>
