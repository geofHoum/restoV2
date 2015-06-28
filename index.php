<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="medias/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="medias/css/half-slider.css" rel="stylesheet">
        <script src="medias/js/jquery-1.11.3.min.js"></script>
        <script src="medias/bootstrap/dist/js/bootstrap.min.js"></script>
        <link href="medias/css/marmite.css" rel="stylesheet">

        <title>La Marmite St Genevieve</title>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        $dir = 'public/pages/';
        if (isset($_GET['p']) && $_GET['p'] != '' && !empty($_GET['p'])) {
            $page = $_GET['p'] . ".php";
        } elseif (isset($_POST['p']) && $_POST['p'] != '' && !empty($_POST['p'])) {
            $page = $_POST['p'] . ".php";
        }else{
            if(!isset($page) || $page='' || empty($page)) {
                $page = "accueil.php";
            }
        }
        $filename = 'public/structure/s.'.$page;

        if (file_exists($filename)) {
            
        if (isset($page) && $page !== '') {
                include $filename;
            }
        }
        ?>
        <!-- NAVBAR -->
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-inverse " role="navigation">
                    <div class="container">
                        <!-- FOR BETTER MOBILE DISPLAY -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar-carte-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="Accueil.html">La Marmite</a>
                        </div>
                        <!-- NAVBAR CONTENT -->
                        <div class="collapse navbar-collapse" id="navbar-carte-menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="Accueil.html">Accueil<span class="sr-only">(current)</span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Carte et Menus<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation"><a href="Formule-déjeuner.html">Formule Déjeuner</a></li>
                                        <li role="presentation"><a href="Menus.html">Menus</a></li>
                                        <li role="presentation"><a href="Carte.html">Carte</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="#">Marmitons</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Boissons<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="presentation"><a href="Apéritifs.html">Apéritifs</a></li>
                                        <li role="presentation"><a href="Carte-des-Vins.html">Carte des vins</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">&Eacute;vénements</a></li>
                                <li><a href="#about">A propos</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
        </div>
        <!--/.NAVBAR -->
        <!-- CAROUSEL -->
        <?php include 'include/slide.php';
              include $dir.$page;
        ?>
        <!--/.CAROUSEL -->
        <div class='clear'></div>
        <section id="horaires" class="section-horaires">
            <div class="container">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        <span class="top">
                            <strong>HORAIRES D'OUVERTURE</strong>
                        </span>
                    </h2>
                </div>
                <div class="lead">
                    <div class="section-subtitle lead">
                        <span>Mardi au Samedi…</span>
                    </div>
                    <div class="section-subtitle hours">
                        09:00 14:00
                        <br/>
                        19:00 22:00
                    </div>
                </div>
            </div>

        </section>


       <script src="medias/js/js-djo-marmite.js"></script> 
    </body>
</html>


