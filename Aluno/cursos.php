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
    <title>Cursos</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
                    </li>
                     <li>
                        <a  href="sala.php"><i class="fa fa-desktop fa-3x"></i> Sala de Aula</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
                    </li>
						   <li  >
                        <a   href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
                    </li>	
                      <li  >
                        <a  href="dados.php"><i class="fa fa-table fa-3x"></i> Dados do Aluno </a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-pencil-square fa-3x"></i> Atendimento </a>
                    </li>					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Mais Cursos</h2>   
                        <h5><?php echo "Olá <strong>". $_SESSION['nome'] ."</strong>, escolha um curso que combina com você"?></h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
             <div class="row">
                 
                     <section class="mar-20">
        
            <div class="box first">
                
                <ul class="portfolio-filter">
                    <li><a class="btn btn-info active" href="#" data-filter=".info">Informática</a></li>
                    <li><a class="btn btn-info" href="#" data-filter=".bootstrap">Programação</a></li>
                    <li><a class="btn btn-info" href="#" data-filter=".html">Mecânica</a></li>
                    <li><a class="btn btn-info" href="#" data-filter=".wordpress">Empresa</a></li>
                    <li><a class="btn btn-info" href="#" data-filter=".wordpress">Portuário</a></li>
                    <li><a class="btn btn-info" href="#" data-filter=".wordpre">Idiomas</a></li>
                    <li><a class="btn btn-info" href="#" data-filter=".wordpress">Exatas</a></li>
                    
                    <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Nome do Curso ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
                </form>

                    <?php
                    $sql = mysqli_query($conexao,"SELECT id,nome,link,descricao,categoria,page,acao FROM cad_cursos ");
					
                    while($valor = mysqli_fetch_array($sql)) {
                    $id = $valor['id']; 
                    ?>
                </ul><!--/#portfolio-filter-->
                <ul class="portfolio-items col-3">
                    <li class="portfolio-item apps <?=$valor["categoria"]?>">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="<?=$valor["link"]?>" alt="">
                                <div class="overlay">
                                    <?php echo "<a href=\"add.php?id=$id\"><button class='preview btn btn-success'><i class='fa fa-plus'></i> Adiconar Curso </button></a>"; ?>
                                </div>
                            </div>
                            <div class="blank">
                            	<h4><?=$valor["nome"]?></h4>
                                <p><?=$valor["descricao"]?></p>
                            </div>
                        </div>
                    </li><!--/.portfolio-item-->

                    <?php
                    }
                    ?>

                </ul>  


            </div><!--/.box-->
       
    </section><!--/#portfolio-->
                
           
               </div>  <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery.isotope.min.js"></script>
    <script src="../assets/js/jquery.prettyPhoto.js"></script>
    
   
</body>
</html>
