<?php
session_start();

include("../php/config.php");
protegePaginaAdm();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-88350404-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9095521793912977",
        enable_page_level_ads: true
      });
    </script>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Certificados</title>
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  </head>
  <body>
    <?php include("../php/cabecalho.php"); ?>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
          </li>


          <li>
            <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
          </li>
          <li>
            <a  href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
          </li>
          <li>
            <a  href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
          </li>
          <li  >
            <a class="active-menu" href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
          </li>	
          <li  >
            <a  href="dados.php"><i class="fa fa-table fa-3x"></i> Dados do Aluno </a>
          </li>
          <li  >
            <a href="form.php"><i class="fa fa-pencil-square fa-3x"></i> Atendimento </a>
          </li>					
        </ul>

      </div>

    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
              <li>
                <i class="fa fa-home"></i>
                <a href="../index.php">Home</a>
                <i class="icon-angle-right"></i>
              </li>

              <li>
                <a href="index.php">
                  Painel Inicial                       </a>
                <i class="icon-angle-right"></i>
              </li>
              <li>
                <a href="certificados.php">
                  Certificados                       </a>
                <i class="icon-angle-right"></i>
              </li>


            </ul>
            <!-- breadcrumb -->
            <h2>CADASTRAMENTO DE CERTIFICADOS</h2>   
            <h5><?php echo "Olá <strong>". $_SESSION['nome'] ."</strong>  "?></h5>
          </div>
        </div>              
        <!-- /. ROW  -->
        <hr />      

        <!-- Content Section -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Novo certificado</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3>Certificados:</h3>

              <div class="records_content"></div>
            </div>
          </div>
        </div>
        <!-- /Content Section -->


        <!-- Bootstrap Modals -->
        <!-- Modal - Add New Record/User -->
        <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Adiconar novo certificado</h4>
              </div>
              <div class="modal-body">

                <div class="form-group">
                  <label for="keyword">Matrícula</label>
                  <input type="text" id="keyword" placeholder="Matrícula" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="address">Nome</label>
                  <input type="text" id="address" placeholder="Nome" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="course">Curso</label>
                  <input type="text" id="course" placeholder="Curso" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" id="description" placeholder="Descrição" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="data_inicio">Data de início</label>
                  <input type="text" id="data_inicio" placeholder="Data de início" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="data_fim">Data de Término</label>
                  <input type="text" id="data_fim" placeholder="Data de Término" class="form-control"/>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Adicionar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- // Modal -->

        <!-- Modal - Update User details -->
        <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Atualizar</h4>
              </div>
              <div class="modal-body">


                <div class="form-group">
                  <label for="update_keyword">Matrícula</label>
                  <input type="text" id="update_keyword" placeholder="Matrícula" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="update_address">Nome</label>
                  <input type="text" id="update_address" placeholder="Nome" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="update_course">Curso</label>
                  <input type="text" id="update_course" placeholder="Curso" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="update_description">Descrição</label>
                  <input type="text" id="update_description" placeholder="Descrição" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="update_data_inicio">Data de início</label>
                  <input type="text" id="update_data_inicio" placeholder="Data de início" class="form-control"/>
                </div>

                <div class="form-group">
                  <label for="update_data_fim">Data de Término</label>
                  <input type="text" id="update_data_fim" placeholder="Data de Término" class="form-control"/>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Salvar</button>
                <input type="hidden" id="hidden_user_id">
              </div>
            </div>
          </div>
        </div>
        <!-- // Modal -->
        
      </div>
    </div>
    <?php include("../php/rodape.php"); ?>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
    <!-- Jquery JS file 
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap JS file
    <script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>-->

    <!-- Custom JS file -->
    <script type="text/javascript" src="js/script.js"></script>
    
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    
    <script type="application/javascript">
      $('ul.main li').click(function() {
        $(this).children('ul').toggle();
      });
    </script>

  </body>
</html>
