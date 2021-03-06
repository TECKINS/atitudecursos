﻿<?php
session_start();

include("../../php/config.php");
protegePagina();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
      <link rel="shortcut icon" href="../../images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NR 35</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<!--<div id="wrapper">-->
<?php include("../../php/cabecalho.php"); ?>
<?php include("../menu.php"); ?>
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="text-align:justify"><strong>CURSO DE SEGURANÇA E SAÚDE NO TRABALHO EM ALTURA (NR-33)</strong></h2>
                        <h5><?php echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>, ao curso de NR-33. "?></h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                     <div class="col-lg-3 col-md-6">
                         <div class="panel panel-primary">
                             <div class="panel-heading">
                                 <div class="row">
                                     <div class="col-xs-3">
                                         <i class="fa fa-folder-open fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge">Material</div>
                                     </div>
                                 </div>
                             </div>
                             <a data-toggle="modal" data-target="#material" href="#">
                                 <div class="panel-footer">
                                     <span class="pull-left">Ver Material</span>
                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                     <div class="clearfix"></div>
                                 </div>
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                         <div class="panel panel-green">
                             <div class="panel-heading">
                                 <div class="row">
                                     <div class="col-xs-3">
                                         <i class="fa fa-tasks fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge">Atividades</div>
                                     </div>
                                 </div>
                             </div>
                             <a data-toggle="modal" data-target="#atividade" href="#">
                                 <div class="panel-footer">
                                     <span class="pull-left">Começar a Praticar</span>
                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                     <div class="clearfix"></div>
                                 </div>
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                         <div class="panel panel-yellow">
                             <div class="panel-heading">
                                 <div class="row">
                                     <div class="col-xs-3">
                                         <i class="fa fa-bullhorn fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge">Avaliação</div>
                                     </div>
                                 </div>
                             </div>
                             <a data-toggle="modal" data-target="#prova" href="#">
                                 <div class="panel-footer">
                                     <span class="pull-left">Fazer a Prova Final</span>
                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                     <div class="clearfix"></div>
                                 </div>
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                             <div class="panel panel-red">
                                 <div class="panel-heading">
                                     <div class="row">
                                         <div class="col-xs-3">
                                             <i class="fa fa-mortar-board fa-5x"></i>
                                         </div>
                                         <div class="col-xs-9 text-right">
                                             <div class="huge">Certificado</div>
                                         </div>
                                     </div>
                                 </div>
                                 <a data-toggle="modal" data-target="#cert" href="#">
                                     <div class="panel-footer">
                                         <span class="pull-left">Solicitar Certificado</span>
                                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                         <div class="clearfix"></div>
                                     </div>
                                 </a>
                             </div>
                     </div>
                     <hr />

                      <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         	<strong>NR 33</strong>
                        </div>

                        <div class="panel-body">
						<p style="text-align:justify">Esta NR tem por objetivo estabelecer os requisitos mínimos para identificação de espaços confinados e o reconhecimento, avaliação, monitoramento e controle dos riscos existentes, de forma a garantir permanentemente a segurança e saúde dos trabalhadores e que interagem direta ou indiretamente nesses espaços.
							</br>Espaço confinado é qualquer área ou ambiente não projetado para ocupação humana contínua, que possua meios limitados de entrada e saída, cuja ventilação existente é insuficiente para remover contaminantes ou onde possa existir a deficiência ou enriquecimento de oxigênio.</p>
                         <iframe src="//www.slideshare.net/slideshow/embed_code/key/7pJC1gHC1iHryK" width="980" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe></div>
			 <iframe width="980" width="560" height="551" height="315" src="https://www.youtube.com/embed/Hnsc33ok9mQ" frameborder="0" allowfullscreen></iframe>
                            <br>
                            <br>
                            <br>
                            <br>
                   <!-- <h4>Small Button</h4>
                    <a href="#" class="btn btn-default btn-sm">default</a>
                    <a href="#" class="btn btn-primary btn-sm">primary</a>
                    <a href="#" class="btn btn-danger btn-sm">danger</a>
                    <a href="#" class="btn btn-success btn-sm">success</a>
                    <a href="#" class="btn btn-info btn-sm">info</a>
                    <a href="#" class="btn btn-warning btn-sm">warning</a>-->

                   <!--
                    <h4>Large Button</h4>

                   <a href="#" class="btn btn-default btn-lg">default</a>
                    <a href="#" class="btn btn-primary btn-lg">primary</a>
                    <a href="#" class="btn btn-danger btn-lg">danger</a>
                    <a href="#" class="btn btn-success btn-lg">success</a>
                    <a href="#" class="btn btn-info btn-lg">info</a>-->


                </div>
            </div>
                          </div>

                <!-- /. ROW
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Circle Icon Buttons
                        </div>

                        <div class="panel-body">
                             <br /> <br />
                            <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-money"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
                            </button>
                           <br />
                             <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com
                        </p>
                        </div>

                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Icons Examples :
                        </div>

                        <div class="panel-body">
                            <br />
                            <i class="fa fa-desktop "></i>

                             <i class="fa fa-desktop fa-2x"></i>
                              <i class="fa fa-desktop fa-3x"></i>
                              <i class="fa fa-desktop fa-4x"></i>
                              <i class="fa fa-desktop fa-5x"></i>
                              <br />
                             <br />
                            <i class="fa fa-flask "></i>

                             <i class="fa fa-flask fa-2x"></i>
                              <i class="fa fa-flask fa-3x"></i>
                              <i class="fa fa-flask fa-4x"></i>
                              <i class="fa fa-flask fa-5x"></i>
                              <br />
                              <p>
                        For more customization Of icons please visit website : fortawesome.github.io/Font-Awesome/icons/ or  <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank" >Click here</a> . You will get all font-awesome icons and there classes there.
                        </p>
                        </div>

                    </div>
                    </div>
                </div>
                 <!-- /. ROW
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Simple Progress Bars
                        </div>

                        <div class="panel-body">
                       <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Stripped Progress Bars
                        </div>

                        <div class="panel-body">
                       <div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                </div>
                 <!-- /. ROW
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Animated Progress Bars
                        </div>

                        <div class="panel-body">
                       <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                      <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Stacked Progress Bars
                        </div>

                        <div class="panel-body">
                       <div class="progress">
  <div class="progress-bar progress-bar-success" style="width: 35%">
    <span class="sr-only">35% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width: 20%">
    <span class="sr-only">20% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 10%">
    <span class="sr-only">10% Complete (danger)</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                </div>
                <!-- /. ROW
                <div class="row">
                    <div class="col-md-6">

                     <!--  Modals
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modals Example
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Click  Launch Demo Modal
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Modals

                    </div>
                     <div class="col-md-6">
                          <div class="panel panel-default">
                        <div class="panel-heading">
                            Alerts Examples
                        </div>
                        <div class="panel-body">
                            <h5><strong>Simple Alert</strong></h5>
                            <div class="alert alert-info">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            Info: You can use other classes like <i>alert-success</i> , <i>alert-warning</i> & <i>alert-danger</i> instead of <i>alert-info</i>
                           <br />
                              <h5><strong>Dismissable Alert</strong></h5>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            Info: You can use other classes like <i>alert-success</i> , <i>alert-warning</i> & <i>alert-danger</i> instead of <i>alert-info</i>

                             </div>
                              </div>
                     </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        </div>

    <div class="modal fade" id="material" role="dialog">
        <div class="modal-dialog modal-md">

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" data-dismiss="modal" class="btn btn-default pull-right"><i class="fa fa-times"></i></button>
                    <p><a href="http://www.anamt.org.br/site/upload_arquivos/clipping_2015_2732015153467055475.pdf" target="_blank" style="color: #000""><i class="fa fa-file-pdf-o fa-2x"></i> Aportila Fundamentos de NR-33</a></p>
                </div>
            </div>



        </div>
    </div>

    <div class="modal fade" id="atividade" role="dialog">
        <div class="modal-dialog modal-md">

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" data-dismiss="modal" class="btn btn-default pull-right"><i class="fa fa-times"></i></button>
                    <h4>Perguntas e Respostas</h4>
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeXcZ02JaJ80682Uz6OUNmyJrqMv72Rjw7aE5NA3rD_6KSRQA/viewform?embedded=true" width="500" height="500" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
                </div>
            </div>

        </div>
    </div>

<div class="modal fade" id="prova" role="dialog">
    <div class="modal-dialog modal-md">

        <div class="modal-content">
            <div class="modal-body">
                <button type="button" data-dismiss="modal" class="btn btn-default pull-right"><i class="fa fa-times"></i></button>
                <h4>Avaliação</h4>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeXcZ02JaJ80682Uz6OUNmyJrqMv72Rjw7aE5NA3rD_6KSRQA/viewform?embedded=true" width="500" height="500" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="cert" role="dialog">
    <div class="modal-dialog modal-md">

        <div class="modal-content">
            <div class="modal-body">
                <button type="button" data-dismiss="modal" class="btn btn-default pull-right"><i class="fa fa-times"></i></button>
                <h4>Forma de Pagamento</h4>
                <iframe src="../pag/index.php" width="500" height="500" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
            </div>
        </div>

    </div>
</div>


     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>

</body>
</html>
