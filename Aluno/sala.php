<?php
session_start();

include("../php/config.php");
protegePagina();
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
    <title>Sala de Aula</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
                        <a class="active-menu"  href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
                    </li>
                    <li>
                        <a  href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
                    </li>
						   <li  >
                        <a   href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
                    </li>	
                      <li  >
                        <a  href="dados.php"><i class="fa fa-table fa-3x"></i> Dados do Aluno </a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Atendimento </a>
                    </li>					
                </ul>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Sala de Aula</h2>   
                        <h5><?php echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>, a sua área de estudos "?></h5>
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
                                         <i class="fa fa-calendar fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge">10</div>
                                         <div>Eventos</div>
                                     </div>
                                 </div>
                             </div>
                             <a href="#">
                                 <div class="panel-footer">
                                     <span class="pull-left">Ver mais detalhes</span>
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
                                         <div class="huge">120</div>
                                         <div>Livros</div>
                                     </div>
                                 </div>
                             </div>
                             <a href="#">
                                 <div class="panel-footer">
                                     <span class="pull-left">Ver mais detalhes</span>
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
                                         <div class="huge">24</div>
                                         <div>Palestras</div>
                                     </div>
                                 </div>
                             </div>
                             <a href="#">
                                 <div class="panel-footer">
                                     <span class="pull-left">Ver mais detalhes</span>
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
                                         <i class="fa fa-support fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge">5</div>
                                         <div>Instrucões</div>
                                     </div>
                                 </div>
                             </div>
                             <a href="#">
                                 <div class="panel-footer">
                                     <span class="pull-left">Ver mais detalhes</span>
                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                     <div class="clearfix"></div>
                                 </div>
                             </a>
                         </div>
                     </div>

                          </div>
                          <hr />
                     
                <!-- /. ROW  -->



<?php
 $sql = mysqli_query($conexao,"SELECT id,curso,link,nota,code,img FROM cursos ORDER BY id DESC ");
?>

<h1><i class="fa fa-laptop"></i> Meus Cursos</h1>

<?php

while($valor = mysqli_fetch_array($sql)) {
if($valor['code'] == $_SESSION['id']){
$id = $valor["id"];
?>
    <ul class="portfolio-items col-4 mar-20">
    <li class="portfolio-item apps">
        <div class="item-inner">
            <div class="portfolio-image">
                <img src="<?=$valor["img"]?>" alt="">
                <div class="overlay">
                    <a href="<?=$valor["link"]?>" class="preview btn btn-danger"><i class="fa fa-eye"></i> Assistir</a>
                </div>
            </div>
            <div id="caixa" class="blank"><h4><?=$valor["curso"]?></h4>

                <h5><i class="fa fa-check-square-o"></i> Nota: <?=$valor["nota"]?>.0</h5><?php echo "<button type='button' id='trash' class='btn btn-default pull-right per-max' data-toggle='modal' data-target='#delete'><i class='fa fa-trash-o'></i></button>"; ?>
                
            </div>
            
        </div>
        
    </li><!--/.portfolio-item-->

<div class="modal fade" id="delete" role="dialog">
  <div class="modal-dialog modal-md">

    <div class="modal-content">
      <div class="modal-body">
            <p>Você tem certeza que deseja excluir este curso?</p>
      </div>
      <div class="modal-footer">
      <?php echo "<a href=\"delete.php?id=$id\" type=\"button\" class=\"btn btn-danger\">Confirmar</a>"; ?>
        
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
      </div>
    </div>

  </div>
</div>

 <?php
 }
 }
?>


             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		<?php include("../php/rodape.php"); ?>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
 
</body>
</html>
