<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Listar Artículos</title>

    <!-- Bootstrap Core CSS -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="styles/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top" ></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>">Noticas Solidarias</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>">Alianzas & colaboradores</a>
                    </li>
                    <li>
                         <a class="page-scroll" href="<?php echo base_url();?>">Quienes Somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>">Contacto</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>articulos_controller">Artículos Donados</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>login_controller">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <center>
                <img src="styles/img/logotipo.png" class="img-responsive" alt="">
                </center>
                <div class="intro-heading">Únete a nosotros</div>
            </div>
        </div>
    </header>

    

      <!-- Articulos Donados -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Articulos donados </h2>
                    <h3 class="section-subheading text-muted">Aquí puedes ver lor artículos que quieren ser donados y puedes aportar tú alguno más.</h3>
                </div>
            </div>
                        <center><a href="<?php echo base_url();?>articulos_controller/newArticulo" class= "btn btn-success btn-lg"> Donar Articulo</a></center>

            <div class="row text-center">
               <?PHP
                if($articulos){
        foreach ($articulos->result() as $articulo){ ?>
         <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?= $articulo->descripcion; ?></h4>
            </div>
    <?PHP }
    }else echo 'No hay datos.';?>
            </div>
        </div>
    </section>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    

    <!-- jQuery -->
    <script src="styles/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="styles/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="styles/js/classie.js"></script>
    <script src="styles/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="styles/js/jqBootstrapValidation.js"></script>
    <script src="styles/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="styles/js/agency.js"></script>

</body>

</html>