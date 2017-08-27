<script>
$(document).ready(function(){


  $("input.CEP").mask("99.999-999"); 
  $("input.DN").mask("99/99/9999");


  $('#cancelar').on('click', function(){
    $('#nome').val('');
    $('#DN').val('');	
    $('#email').val('');
    $('#CEP').val('');


  });
  $('#registrar').on('click', function(){

    var nomeVal = form1.nome.value;
    var emailVal = form1.email.value;
    var ddnVal = form1.DN.value;
    var cepVal = form1.CEP.value;

    var testCad = 0;

    console.log(nomeVal);



    if(nomeVal != "" && ddnVal != "" && emailVal != "" && cepVal != ""){



      var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

      if(filtro.test(emailVal))
      {


        $('#tabCrud').append('<tr"><td>'+ nomeVal +'</td> <td>'+ emailVal +'</td><td>'+ ddnVal +'</td><td>'+ cepVal +'</td> <td><input type="button" class="AltBut" value="Alterar"/></td> <td><input type="button" class="salBut" value="Salvar"/></td><td><input type="button" class="ExBut" value="Excluir"/></td></tr>');

        $('#nome').val('');
        $('#DN').val('');	
        $('#email').val('');
        $('#CEP').val('');

        //$('.salBut').hide();


        $(".AltBut").bind("click", Editar);  
        $(".salBut").bind("click", FunSal);
        $(".ExBut").bind("click", Excluir);


        return true;


      } else {
        alert("Este endereço de email não é válido!");
        document.form1.email.focus();
        return false;
      }



    }else{

      alert("Todos os campos são obrigatorios");
    }



  });	



  function Editar(){

    var par = $(this).parent().parent(); //tr
    var tdNome = par.children("td:nth-child(1)");
    var tdEmail = par.children("td:nth-child(2)");
    var tdDN = par.children("td:nth-child(3)");
    var tdCEP = par.children("td:nth-child(4)");




    tdNome.html("<input type ='text' value='"+tdNome.html()+"'/td>");
    tdEmail.html("<input type='text' id='txtEmail' value='"+tdEmail.html()+"'/>");
    tdDN.html("<input type='text'id='txtDN' value='"+tdDN.html()+"'/>");
    tdCEP.html("<input type='text'id='txtDN' value='"+tdCEP.html()+"'/>");


    //$('.salBut').show()

  }


  function FunSal(){
    var par = $(this).parent().parent(); //tr
    var tdNome = par.children("td:nth-child(1)");
    var tdDN = par.children("td:nth-child(2)");
    var tdEmail = par.children("td:nth-child(3)");
    var tdCEP = par.children("td:nth-child(4)");

    tdNome.html(tdNome.children("input[type=text]").val());
    tdDN.html(tdDN.children("input[type=text]").val());
    tdEmail.html(tdEmail.children("input[type=text]").val());
    tdCEP.html(tdCEP.children("input[type=text]").val());
    //$('.AltBut').show();
    //$('.salBut').hide();


  };


  function Excluir(){
    var par = $(this).parent().parent();
    //$('.AltBut').show() //tr
    par.remove();
  };
});
</script>
<html>
  <head>
  <title>CRUD</title>
  <style>
    body {background-color: #FFE4B5;}
    table.bordasimples {border-collapse: collapse;}
  </style>
  </head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://files.rafaelwendel.com/jquery.js"></script>
  <script type="text/javascript" src="http://files.rafaelwendel.com/jquery.maskedinput.js"></script>
  <form name="form1" action="#" method="post">
    <table boder = '1px' align=center  >
      <caption>CADASTRO</caption>
      <tr>
        <td><label for ="nome">*Nome: </label></td>
        <td><input id="nome" type="text" name = "nome"></td>
        <td><label id="labelNome"></label> </td>
      </tr>
      <tr>
        <td><label for ="Email">*Email: </label></td>
        <td><input type="text" id="email" name = "email"></td>
      </tr>
      <tr>
        <td><label for ="Data de Nascimento">*Data de Nascimento: </label></td>
        <td><input type="text" class="DN" id="DN" name = "DN"></td>
      </tr>
      <tr>
      </tr>
      <tr>
        <td><label for ="CEP">*CEP: </label></td>
        <td><input type="text" id="CEP" class="CEP" name = "CEP"></td>
      </tr>
      <tr>
        <td colspan="2">
          <!--<input type="submit" id="cadastrar" onclick="validar()">-->
          <input type="button" name="registrar" id="registrar" value="registrar">
          <input type="button" name="Cancelar" id="cancelar" value="Cancelar">
        </td>
      </tr>
    </table>
  </form>
  <div >
    <table id="tabCrud" border ="1px" align=center bordercolor = " #8B8682  " class="bordasimples" bgcolor =" #D2B48C">
      <tr>
        <td>Nome</td>
        <td>e-mail</td>
        <td>Data Nascimento</td>
        <td>CEP</td>
      </tr>
    </table>
  </div>
</body>
<html>
