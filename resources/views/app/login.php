<!DOCTYPE html>
<html lang="pt_br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIM - Bootstrap</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/app.css" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/m2br.dialog.css" rel="stylesheet">
    <link href="css/exemplo.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
            
             <!-- /.row -->
            <div class="row" id="panel-center">
                <div class="col-lg-12">
                    <!-- <div class="panel"> -->
                        <div class="col-sm-6 col-md-4 col-md-offset-4">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                              <br>
                                <strong> Sign in to continue</strong>
                              </div>
                              <div class="panel-body">
                                <form id="login" action ="" method = "post">
                                  <fieldset>
                                    <div class="row">
                                      <div class="center-block">
                                        <img class="profile-img"
                                          src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="">
                                          
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                        <div class="form-group">
                                          <div class="input-group">
                                            <span class="input-group-addon">
                                              <i class="glyphicon glyphicon-user"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Username" name="nome" type="email" id="cmpLogin" autofocus required>
                                          </div>
                                        <!-- </div> -->
                                        <div class="form-group">
                                          <div class="input-group">
                                            <span class="input-group-addon">
                                              <i class="glyphicon glyphicon-lock"></i>
                                            </span>
                                            <input class="form-control" placeholder="Password" name="password" type="password" id="cmpSenha" required>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <input type="submit" class="btn btn-lg btn-primary btn-block" id="btnLogin">
                                        </div>
                                      </div>
                                    </div>
                                    <div id="sucessoLogin" class="col-sm-12 col-md-10">
                                      <div class="alert alert-success">Login efetuado com sucesso. Redirecionando...</div>
                                      </div>

                                  <div id="falhaLogin" class="col-sm-12 col-md-10">
                                    <div class="alert alert-danger">Usuário ou senha inválido.</div>
                                  </div>
                                  </fieldset>
                                </form>
                                
                                <div id="MeuConfirme" style="display: none" title="atencao"></div>
                          <!-- </div> -->
                              <div class="panel-footer ">
                                Don't have an account! Sign Up Here
                                <h5 id="log">olha</h5>
                              </div>
                            </div>
                          </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- /.row -->

    </div>
    <!-- /#wrapper -->

    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
  
    <!-- Bootstrap Core JavaScript -->
    <script src="js/app.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/menu.js"></script>

    <script src="js/clickmenu.js"></script>

    <!-- Custom -->
    <script src="js/custom.js"></script>
</body>

</html>
