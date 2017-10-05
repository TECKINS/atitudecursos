<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.html"><img src="../images/logo.png"/></a>-->
                    <a class="navbar-brand" href="index.php"><img src="../images/logo.png"/></a>
            </div>
		<div style="color: white;padding: 5px 20px 5px 20px;font-size: 16px;">
		<form class="navbar-form navbar-left" role="search">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="O que está buscando?">
                          </div>
                          <button type="submit" class="btn btn-success">Buscar</button>
                        </form>
		</div>
            <div style="color: white;padding: 5px 20px 5px 20px;float: right;font-size: 16px;">
 <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                    <?php
                    $sql = mysqli_query($conexao,"SELECT id,remetente,destinatario,message,date FROM mensagem ");
					
                    while($valor = mysqli_fetch_array($sql)) { 
                    ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?=$valor["remetente"]?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> <?=$valor["date"]?></p>
                                        <p><?=$valor["message"]?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                            <?php
                            }
                            ?>
                        <li class="message-footer">
                            <a href="#">Ler todas as novas mensagens</a>
                        </li>
                            
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
			    <?php
                    $sql = mysqli_query($conexao,"SELECT id,mensagem,tipo,date FROM alerta ");
					
                    while($valor = mysqli_fetch_array($sql)) { 
                    ?>
                        <li>
                            <a href="#"><span class="label label-<?=$valor["tipo"]?>"><?=$valor["mensagem"]?></span></a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#">Ver tudo</a>
                        </li>
			    <?php
                            }
                            ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['nome']?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="dados.php"><i class="fa fa-fw fa-gear"></i> Configuração</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a data-toggle="modal" data-target="#confirm"><i class="fa fa-fw fa-power-off"></i> Sair</a>

                        </li>
                    </ul>
                </li>
            </ul>
            </div>
            <div class="modal fade" id="confirm" role="dialog">
                <div class="modal-dialog modal-md">

                    <div class="modal-content">
                        <div class="modal-body">
                            <p>Você deseja realmente sair?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="../php/logout.php" type="button" class="btn btn-danger" style="margin-left: 30px" id="delete">Confirmar</a>
                            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
