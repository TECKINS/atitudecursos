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

    </ul>
    <!-- breadcrumb -->
    <h2>Área do Aluno</h2>
    <h5><?php echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>  "?></h5>
</div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12">
     <div class="panel panel-back noti-box">
        <span>
            <i class="icon-box bg-color-red set-icon fa fa-laptop"></i>
        </span>
        <div class="text-box" >
            <p class="main-text">120 Cursos</p>
            <p class="text-muted">Cursos para diversas áreas do conhecimento</p>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
 <div class="panel panel-back noti-box">
    <span >
        <i class="icon-box bg-color-green set-icon fa fa-gears"></i>
    </span>
    <div class="text-box" >
        <p class="main-text">3000 Atividades</p>
        <p class="text-muted">Atividades interativas para você fixar o que aprendeu</p>
    </div>
</div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
 <div class="panel panel-back noti-box">
    <span>
        <i class="icon-box bg-color-blue set-icon fa fa-mortar-board"></i>
    </span>
    <div class="text-box" >
        <p class="main-text">Certificado</p>
        <p class="text-muted">Ao final do cursos você pode solicitar o Certificado</p>
    </div>
</div>
</div>

</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
     <div class="panel panel-back noti-box">
        <span>
            <i class="icon-box bg-color-blue fa fa-info"></i>
        </span>
        <div class="text-box" >
            <p class="main-text">Dica importante !</p>
            <p class="text-muted">Reserve uma a duas horas por dia para estudar</p>
            <hr/>
            <p class="text-muted">
              <span class="text-muted color-bottom-txt"><i class="fa fa-pencil-square-o"></i>
                 Uma a duas horas por dia é o tempo ideal para você aprender com
                 agilidade e eficiência. Sempre fazendo uma pausa a cada meia hora passada de estudos.
             </span>
         </p>
     </div>
 </div>
</div>


<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="panel back-dash">
     <i class="fa fa-shield fa-3x"></i><strong> &nbsp; Autenticação do Certificado</strong>
     <p class="text-muted">Seu certificado possui um número unico, que se encontra na parte de trás do
       certificado, no canto inferior esquerdo, com a indicação <b>número do certificado</b> (Nº).<br>
   Teste a validade do seu certificado clicando no botão abaixo.</p>
   <a href="../certificado.html"><button type="submit" class="btn btn-default">Autenticação do Certificado</button></a>
</div>

</div>


</div>
<!-- /. ROW  -->
<div class="row">


 <div class="col-md-9 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Introdução a Plataforma da Atitude Cursos
        </div>

                            <!--<video class="col-md-12 col-sm-12 col-xs-12" width="745" height="390" poster="../assets/intro/capa.png" controls>
                            <source src="../assets/intro/intro.mp4" type="video/mp4">
                            </video>-->
                            
                            <iframe class="col-md-12 col-sm-12 col-xs-12" width="800" height="450" src="https://www.powtoon.com/embed/bFOp7tmM1Zv/" frameborder="0"></iframe>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3>ID</h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                             Acompanhamento por indicadores de desempenho

                         </div>
                     </div>
                     <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-edit fa-5x"></i>
                            <h3>Perfil</h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Edite suas informaçoes de contato

                        </div>
                    </div>
                </div>

            </div>
            <!-- /. ROW  -->
            <div class="row" >
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-comments-o fa-5x"></i>
                        <h4> 20.000</h4>
                        <h4>Membros</h4>
                    </div>
                    <div class="panel-footer back-footer-green">

                        Compartilhe conhecimento no forum e chat da comunidade.

                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                     Tabela de Professores
                 </div>
                 <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>Especialidade</th>
                                    <th>Online</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jorge</td>
                                    <td>Castelo</td>
                                    <td>Engenharia Mecânica</td>
                                    <td>Sim</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cristiano</td>
                                    <td>Santos</td>
                                    <td>Engenharia de Software</td>
                                    <td>Não</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mikael</td>
                                    <td>Valinoto</td>
                                    <td>Engenharia da Computação</td>
                                    <td>Sim</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Marlon</td>
                                    <td>Pontes</td>
                                    <td>Engenharia da Computação</td>
                                    <td>Sim</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>