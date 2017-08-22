<?php
  
  /*$ curl ipinfo.io/8.8.8.8
{
  "ip": "8.8.8.8",
  "hostname": "google-public-dns-a.google.com",
  "loc": "37.385999999999996,-122.0838",
  "org": "AS15169 Google Inc.",
  "city": "Mountain View",
  "region": "CA",
  "country": "US",
  "phone": 650
}
*/
include "php/config.php";

session_start();  // Inicia a session

  $ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

 

  
?>

<!--<!DOCTYPE html>
<html>
<head>
<title>IP Location</title>
  <meta charset="utf-8">
  <script>
     $.get("https://ipinfo.io/json", function (response) {
      $("#ip").html("IP: " + response.ip);
      $("#address").html("Location: " + response.city + ", " + response.region);
      $("#details").html(JSON.stringify(response, null, 4));
  }, "jsonp");
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
  
  
<h3>Client side IP geolocation using <a href="http://ipinfo.io">ipinfo.io</a></h3>

<hr/>
<div id="ip"></div>
<div id="address"></div>
<hr/>Full response: <pre id="details"></pre>

</body>
</html>
-->
<?php


$_SESSION['ip'] = $details->ip;
$_SESSION['org'] = $details->org;
$_SESSION['loc'] = $details->loc;
$_SESSION['city'] = $details->city; 
$_SESSION['region'] =$details->region; 
$_SESSION['country'] = $details->country;

$ip = $details->ip;
$org = $details->org;
$loc = $details->loc;
$city = $details->city; 
$region =$details->region; 
$country = $details->country;

$sql = mysqli_query($conexao, "INSERT INTO users (ip, org, loc, city, region, country, ultimo_acesso) 
									VALUES('{$ip}', '{$org}', '{$loc}', '{$city}', '{$region}', '{$country}', now())") 
									or die( mysql_error() );
?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IP Location | Atitude Cursos</title>
    <link rel="stylesheet" href="css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposede.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="index.html"><i class="fa fa-home fa-lg"></i></a></li>
                    <li><a href="index.html#Cursos">Cursos</a></li>
                    <li><a href="cadastro.html">Cadastre-se</a></li>
                    <li><a href="index.html#contact">Contato</a></li>
                </ul>
                    <div class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" size="15% 10px" placeholder="Email" required class="form-control">
            </div>
            <div class="form-group">
              <input type="password" size="15% 10px" placeholder="Senha" required class="form-control">
            </div>
            <a href="Login.html"><button type="submit" class="btn btn-success">Entrar</button></a>
          </div>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <div class="error-404-page text-center">
                    <br>
                    <br>
                    
                       
                        <h3><strong>RESULTADO DA BUSCA</strong> </h3>
                        
                        <h3>Confira abaixo os dados relativos a sua localização</h3>
                        <br>
                        <br>
                        
                        
                        <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-success">
                        <div class="panel-heading">
                           Tabela de resultado
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td class="col-lg-1"><strong>IP</strong></td>
                                            <td class="col-lg-3"><strong>Organização</strong></td>
                                            <td class="col-lg-2"><strong>Localização</strong></td>
                                            <td class="col-lg-2"><strong>Cidade</strong></td>
                                            <td class="col-lg-2"><strong>Região</strong></td>
                                            <td class="col-lg-2"><strong>País</strong></td>
						
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
									
                                        <tr> 
                                            <td><?php echo $details->ip;  ?></td>
                                            <td><?php echo $details->org; ?></td>
                                            <td><?php echo $details->loc;?></td>
                                            <td><?php echo $details->city; ?></td>
                                            <td><?php echo $details->region; ?></td>
                                          <td><?php echo $details->country; ?></td>
                                          
                                            
                                        </tr>
                                       
									
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>
                        
                        
                        
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 | Todos os direitos reservados a <a target="_blank" href="#">Atitude Cursos</a>.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="images/designer.png" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./busca.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
