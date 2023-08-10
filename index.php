<?php
include "./dbconnect.php";
// infomrations 
$info = $conn->prepare("SELECT * from infos limit 1");
$info->execute();
$info = $info->fetch();
// data of home_page table
$home_page = $conn->prepare("SELECT * from home_page Limit 1");
$home_page->execute();
$home_page = $home_page->fetch();

$home_slider = $conn->prepare("SELECT * from home_slider");
$home_slider->execute();
$home_slider = $home_slider->fetchAll();

$home_partenaire = $conn->prepare("SELECT * from home_partenaire");
$home_partenaire ->execute();
$home_partenaire  = $home_partenaire ->fetchAll();
// data of srvices table
$services = $conn->prepare("SELECT * from services");
$services->execute();
$services = $services->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
  <!-- Library CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.html" rel="stylesheet" />
  <link href="css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/animations.css" media="screen" rel="stylesheet" />
  <link href="css/superfish.css" media="screen" rel="stylesheet" />
  <link href="css/revolution-slider/css/settings.css" media="screen" rel="stylesheet" />
  <link href="css/prettyPhoto.css" media="screen" rel="stylesheet" /><!-- Theme CSS -->
  <link href="css/style.css" rel="stylesheet" /><!-- Skin -->
  <link class="colors" href="css/colors/blue.css" rel="stylesheet" /><!-- Responsive CSS -->
  <link href="css/theme-responsive.css" rel="stylesheet" /><!-- Switcher CSS -->
  <link href="css/switcher.css" rel="stylesheet" />
  <link href="css/spectrum.css" rel="stylesheet" /><!-- Favicons -->
  <link href="img/logo plomberie .png" rel="shortcut icon" />
  <link href="img/ico/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="img/ico/apple-touch-icon-72.png" rel="apple-touch-icon" sizes="72x72" />
  <link href="img/ico/apple-touch-icon-114.png" rel="apple-touch-icon" sizes="114x114" />
  <link href="img/ico/apple-touch-icon-144.png" rel="apple-touch-icon" sizes="144x144" />


  <title>Société de plomberie à Casablanca | HVNET PLOMBERIE </title>
  <meta name="description" content="Société de plomberie, plomberie à Casablanca, HVNET plomberie , Societe de plomberie sur Casablanca et partout au Maroc.">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Link canonique -->
  <link rel="canonical" href="idnex.php/">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style type="text/css">
    .home .content .container .row .posts-block.col-lg-9.col-md-8.col-sm-8.col-xs-12 article .post-content .img-content {
      text-align: justify;
    }

    .home .content .container .row .posts-block.col-lg-9.col-md-8.col-sm-8.col-xs-12 article .post-content .img-content {
      text-align: justify;
    }

    .home #footer .footer-top .container .row .col-lg-3.col-md-3.col-xs-12.col-sm-3.footer-one ul a il {

      font-size: 14px;
    }

    .de {
      color: #F00;
    }

    .home .wrap center {
      display: none;
    }

    .pr {
      text-align: center;
    }
  </style>




  <style type="text/css">
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu a::after {
      transform: rotate(-90deg);
      position: absolute;
      right: 6px;

      margin-top: 8px;

    }

    .dropdown-submenu .dropdown-menu {

      bottom: 35px !important;
      left: 100% !important;
      margin-left: .1rem;
      margin-right: .1rem;
    }
  </style>

</head>

<body class="home">
  <div class="wrap">
    <!-- Header Start -->


    <header id="header">
      <div class="top-bar">
        <div class="slidedown collapse">
          <div class="container">
            <div class="phone-email pull-left">
              <i class="icon-phone"></i>Tel : <a href="Tel:+212 <?php echo $info["Tel"] ?>"><strong>+212 <?php echo $info["Tel"] ?></strong></a>
              <i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a href="mailto:<?php echo $info["email"] ?>"> <strong><?php echo $info["email"] ?></strong></a>
            </div>
            <div class="pull-right">
              <ul class="social pull-left">
                <li class="facebook"><a href="<?php echo $info['facebook']; ?>"><i class="icon-facebook"></i></a></li>
                <li class="twitter"><a href="<?php echo $info['twitter']; ?>"><i class="icon-twitter"></i></a></li>
                <li class="linkedin"><a href="<?php echo $info['linkedin']; ?>"><i class="icon-linkedin"></i></a></li>
           
              </ul>
              <div id="search-form" class="pull-right">
                <form action="#" method="get">

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- nav bar start -->
      <div class="main-header">
        <div class="container" id="container-header">

          <div class="topnav navbar-header">
            <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
              <i class="icon-angle-down icon-current"></i>
            </a>
          </div>

          <div class="logo pull-left" style="margin-top:20px ;"> <a href="idnex.php"><img id="img-nav" alt="Societe de Plomberie HVNET à Casablanca Maroc" src="img/logo plomberie .png" /></a>
          </div>


          <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a id="button-phone" class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
              <i class="icon-reorder icon-2x"></i>
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                  <a class="nav-link" href="idnex.php">Accueil<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item dropdown">

                  <a class="nav-link" href="a-propos-nous.php">A PROPOS DE NOUS<span class="sr-only">(current)</span></a>

                </li>


                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> NOS ACTIVITES
                  </a>
                  <ul class="dropdown-menu activites" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                        foreach($services as $service){
                          ?>
                              <li class="dropdown-submenu">
                                 <a href="service.php?service=<?php echo $service["id"]; ?>"> <?php echo $service["title"]; ?><span class="fas fa-caret-down" style="color:red ;"></span></a>
                              </li>
                          <?php
                        }
                    ?>
                  </ul>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="blogs.php">Blog</a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item btn-menu" id="btn-menu">
                  <a id="btnn" class="nav-link" href="devis.php">DEMANDEZ DEVIS</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- nav bar end -->
    </header>
    <div id="main">
      <!-- Slider Start-->
      <div class="fullwidthbanner-container">
        <div class="fullwidthbanner rslider">
          <ul>
            <?php
            foreach ($home_slider as $slider) {
            ?>
              <li data-delay="6000" data-masterspeed="300" data-transition="fade">
                <div class="slotholder">
                  <img id="img-slid" alt="Societe de Plomberie HVNET à Casablanca Maroc" data-fullwidthcentering="on" src="dashboard/pages/home_page/slider_imgs/<?php echo $slider["img"]; ?>" style="width: 1245.55px; height: 470px; position: absolute; top: 0px; left: 0px;">
                </div>
                <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800" data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une
                  urgence plomberie
                  <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :
                  </p>
                </div>

                <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530" data-y="250" style="margin-left: 180px; margin-top: 30px;">
                  <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 <?php echo $info["Tel"]; ?></strong></a>

                  <!-- <a href="contact.php" id="btn-demandez-devis">
                <strong>+212 000 000 000</strong>
              </a> -->

                </div>

                <!-- <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1400" data-x="20" data-y="20"><img alt="dératisation, désinsectisation à casablanca Maroc" src="deratisation-casablanca/deratisation-desinsectisation-casablanca.jpg"/></div> -->
                <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530" data-y="250" style="margin-left: -130px; margin-top: 30px;">
                  <a href="devis.php" id="btn-demandez-devis">
                    <strong>Devis en ligne</strong>
                  </a>
                </div>
              </li>
            <?php
            }
            ?>
            <!-- THE FIRST SLIDE -->

            <!-- THE RESPONSIVE SLIDE -->
            <!-- <li data-masterspeed="300" data-slotamount="1" data-transition="fade"><img id="img-slid"
                alt="société de dératisation à casablanca" data-fullwidthcentering="on"
                src="img/img plomberie webp/slider2.webp" />
              <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800"
                data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une
                urgence plomberie
                <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :
                </p>
              </div>

              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: 180px; margin-top: 30px;">
                <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 000 000 000</strong></a>
                </a>
              </div>


              <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530"
                data-y="250" style="margin-left: -130px; margin-top: 30px;">
                <a href="devis.php" id="btn-demandez-devis">
                  <strong>Devis en ligne</strong>
                </a>
              </div>
            </li> -->
            <!-- THE RESPONSIVE SLIDE -->
            <!--<li data-masterspeed="300" data-slotamount="1" data-transition="fade"><img id="img-slid"-->
            <!--    alt="société de dératisation à casablanca" data-fullwidthcentering="on"-->
            <!--    src="img/dépannage-plomberie-lyon.jpg" />-->
            <!--  <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800"-->
            <!--    data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une-->
            <!--    urgence plomberie-->
            <!--    <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :-->
            <!--    </p>-->
        </div>

        <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530" data-y="250" style="margin-left: 180px; margin-top: 30px;">
          <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 000 000 000</strong></a>
          </a>
        </div>

        <!-- <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1400" data-x="20" data-y="20"><img alt="dératisation, désinsectisation à casablanca Maroc" src="deratisation-casablanca/deratisation-desinsectisation-casablanca.jpg"/></div> -->
        <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530" data-y="250" style="margin-left: -130px; margin-top: 30px;">
          <a href="devis.php" id="btn-demandez-devis">
            <strong>Devis en ligne</strong>
          </a>
        </div>
        </li>
        <!-- THE FIRST SLIDE -->
        <li data-delay="6000" data-masterspeed="300" data-transition="fade">
          <div class="slotholder"><img id="img-slid" alt="Societe de Plomberie HVNET à Casablanca Maroc" data-fullwidthcentering="on" src="img/slide-1.jpg" /></div>
          <div class="caption large_text sft" data-easing="easeOutExpo" data-speed="300" data-start="800" data-x="220" data-y="150" style="padding: 15px; text-transform: none !important;">Besoin d'aide pour une
            urgence plomberie
            <p style="margin-left: 150px;">Nous intervenons sur rendez - vous ou dans l'heure qui suit votre appel :
            </p>
          </div>

          <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530" data-y="250" style="margin-left: 180px; margin-top: 30px;">
            <a href="Tel:+212615599092" id="btn-demandez-devis"><strong>+212 000 000 000</strong></a>
            </a>
          </div>

          <!-- <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1400" data-x="20" data-y="20"><img alt="dératisation, désinsectisation à casablanca Maroc" src="deratisation-casablanca/deratisation-desinsectisation-casablanca.jpg"/></div> -->
          <div class="caption lfl" data-easing="easeOutExpo" data-speed="300" data-start="1600" data-x="530" data-y="250" style="margin-left: -130px; margin-top: 30px;">
            <a href="devis.php" id="btn-demandez-devis">
              <strong>Devis en ligne</strong>
            </a>
          </div>
        </li>
        </ul>
      </div>
    </div>

    <!-- Slider End-->

    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">

        </div>
      </div>
    </div>


    <!-- block text star -->
    </br></br></br>
    <div class="container">
      <div class="row">

        <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <div class="elementor-text-editor elementor-clearfix">
            <h1 id="paragraphe" class="titre-principal" style="text-align: center ;"><strong>Société de plomberie
                Casablanca</strong>
            </h1>
             <?php 
                echo $home_page["presentation"];
             ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </br></br></br>


  <div class="container" id="te2">
    <div class="row " id="listse">
      <?php
          foreach($services as $service){
             ?>
    <div class="col-md-3"><img id="imgserr" alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc" src="./dashboard/pages/services/imgs/<?php echo $service['img']; ?>">
        <h4 style="text-align: center;" id="servicebackimg" class="card-title"><strong  id="servicetitleimg"> <?php echo $service['title']; ?>
            </strong></a></h4>
        <hr style="border:solid 1px black">
        <p>
           <?php echo $service["presentation"]; ?>
        </p>
      </div>
             <?php
          }
      ?>
  
     
    </div>


    <div class="row">
      <h2 style="text-align: center ; margin-left: 20%; margin-right: 38px;">Societe de Plomberie Casablanca Maroc</h2>
      <p>
        En effet, nos professionnels spécialistes des syndics d'immeubles vous proposent leur intervention pour
        l'entretien de vos
        équipements d'assainissement et réseaux communs.

        Notre équipe vous propose notamment des prestations de curage, de <a href="debouchage-canalisation-casablanca.html">débouchage</a>, de dégorgement ou encore
        d'inspection vidéo pour toutes canalisations et équipements sanitaires au Maroc.

        Nous intervenons également pour des contrats d'entretien ou des prestations de remplacement de pompe de relevage
        et des collecteurs associés
      </p>
    </div>

    <div class="row">

      <div class="col-md-5">
        <img width="100%" style="width:100% !important; height:300px !important" src="img/img plomberie webp/plombier-accueil.webp" alt="">
      </div>
      <div class="col-md-7">
        <h3 style="text-align: center;">Dépannage urgent Casablanca</h3>
        Chez HVNET PLOMBERIE nous faisons le Dépannage urgent Casablanca de tout, du flexible d'évacuation cassée au
        flotteur, en passant par la chasse entartrée nécessitant un
        dépannage urgent ou express. La plomberie sur base de ses tuyaux de raccordement endommagés peut nécessiter un
        dépannage sanitaire.</p>

        <p>La colonne de douche peut vite être réparée grâce à notre plombier professionnel, tout comme
          la colonne d'évacuation ou le siphon. Notre palette de services est large, puisque nous pouvons aussi réparer
          le Sani broyeur, le robinet, le thermostat, la baignoire, et nous nous chargeons aussi de réparer le wc
          broyeur,
          de poser un adoucisseur d'eau, ou de réparer l'évier. Le dépannage plomberie est donc complet, et comprend
          aussi
          la réparation fuite d'eau et gaz.
      </div>

    </div>

    <div class="row">
      <p>Votre évier ou votre baignoire sont bouchés ? Vous avez un problème de fuite ? Vous souhaitez réaménager votre
        salle de bain ? Vous avez atterri sur le bon site.

        Que vous souhaitiez une visite rapide dans le cadre d'une rénovation de vos appareils sanitaires divers (des
        simples robinetteries aux cabines de douche italiennes) ou que vous aimeriez fixer un rendez-vous pour un
        entretien, ces experts sont à votre service. Tout détartrage, dépannage et débouchage s'effectue dans l'urgence.
        De plus, ils vous proposeront les meilleurs tarifs et marques de chauffe-eau, douches et baignoires.

        Nous opérons dans le 11eme arrondissement de Paris et ses environs.</p>
    </div>


    <a href="societe-nettoyage-particuliers-casablanca.html">
      <img src="./dashboard/pages/home_page/imgs/<?php echo $home_page["img"]; ?>" alt="societe de nettoyage pour les particulier Casabalanca">
    </a>
    <br> <br>
    <h3>PARTICULIERS</h3>

    <div class="row">
      <h2>Plomberie de confiance : des solutions sur mesure pour votre maison</h2>
      <p>Si vous avez besoin de services de plomberie, ne cherchez pas plus loin que notre <strong>societe de plomberie
          Casablanca</strong>
        experte. Nous disposons d'une équipe de plombiers qualifiés qui se consacrent à fournir des services
        d'installation, d'entretien et de réparation de premier ordre.</p>

      <p>Nos plombiers sont équipés des derniers outils et
        technologies afin d'assurer une prestation de service rapide et efficace. Choisissez notre <strong>societe de
          plomberie Casablanca</strong> de
        plomberie pour tous vos besoins en plomberie et profitez de la tranquillité d'esprit que procure le fait de
        savoir que votre système de plomberie est entre de bonnes mains. Contactez-nous dès aujourd'hui pour prendre
        rendez-vous avec nos plombiers experts.</p>


    </div>



    <div class="row">

      <div class="col-md-7">

        <h3 style="text-align: left; margin-right: -15px;">Des plombiers qualifiés et expérimentés pour tous vos projets
          de plomberie
        </h3>
        <p>Nous comprenons que les problèmes de plomberie peuvent être un inconvénient majeur et peuvent avoir un impact
          sur votre routine quotidienne. C'est pourquoi nous nous efforçons de fournir des services rapides et fiables
          afin de minimiser les perturbations dans votre vie.</p>

        </p> Nos plombiers experts sont formés pour diagnostiquer et
        résoudre efficacement tout problème de plomberie, garantissant ainsi un fonctionnement optimal de votre
        système de plomberie pendant plus longtemps..
        </p>
        <p>
          Les plombiers qui interviennent pour lesbonsartisans.fr sont des experts dans leur domaine. Non seulement ils
          possèdent le savoir-faire que tout un chacun est en droit d'attendre d'un professionnel du bâtiment dans sa
          spécialité, mais ils continuent à se former aux nouveaux produits et appareils qu'ils seraient susceptibles de
          devoir dépanner ou installer.
        </p>
      </div>
      <div class="col-md-5">
        <img width="100%" style="width:100% !important; height:350px !important ; margin-left: -5%; margin-right: 100%;" src="img/cheerful-asian-plumber-sitting-floor-repairing-kitchen-sink.jpg" alt="Societe de dératisation et desinsectisation à Casablanca">
        
      </div>

    </div>
    <br>
    <div class="row">


      <p>Si vous recherchez un plombier Casablanca intervenant à Casablanca, vous pouvez faire appel à Notre societe de
        plomebrie Casablanca. <strong>HVNET PLOMBERIE</strong> disposent des meilleurs plombiers et des meilleurs
        chauffagiste de Casablanca. Ce sont des experts en
        plomberie depuis 2012 et ils sont réputés pour travailler avec les meilleurs plombiers de Casablanca et Le
        réseau est composé de milliers de plombier chauffagiste.

        Trouver un bon plombier à Casablanca n'est pas si facile, il vaut mieux faire confiance à l'entreprise de
        plomberie Notre <strong>societe de plomebrie Casablanca</strong> présent à Casablanca et partout au Maroc .
      </p>

    </div>
    <br>
  </div>

  </div>


  </div>
  <div class="container">
    <div class="row" id="listes">
      <?php 
         foreach($home_partenaire as $partenaire){
          ?>
          <div class="col-md-3">
          <img id="imgserr" alt="societe de plomberie Casabalanca" src="./dashboard/pages/home_page/partenaire_imgs/<?php echo $partenaire["img"]; ?>">
        </div>
        <?php
         }
      ?>
   
    
    </div>
  </div>

  <br> <br>
  <!-- Footer Start -->
  <footer id="footer">
    <!-- Footer Top Start -->
    <div class="footer-top">
      <div class="container" id="foorter-container">
        <div class="row">
          <div class="fixed-btn">
            <a href="mailto:<?php echo $info["email"]; ?>"><i class="fas fa-comment-alt" aria-hidden="true"></i></a>
          </div>
          <div class="fixed-btn1">
            <a href="tel:+212<?php echo $info["Tel"]; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
          </div>
          <div class="fixed-btn2">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $info["Tel"]; ?>"><i class="fa-brands fa-whatsapp" style="color: #FFF;" aria-hidden="true"></i></a>
          </div>

          <!-- insertion de l'élément fixe a gauche -->
          <div class="fixed-left">
            <a href="#" id="site-scroll-top" class="show"><span class="fa-solid fa-chevron-up" style="color:#FFF;"></span></a>
          </div>


          <!--description-->


          <div class="col-md-4 col" id="description">
            <div class="col col-social-icons">
              <a href="idnex.php"><img style="width: 160px; height:160px; margin-bottom: 30px;" alt="Société de dératisation et désinsectisation à Casablanca Maroc" height="86" src="img/logo footer.png" width="120" /></a>
              <p class="p-footer" id="pf">
              <?php echo $info["presentation"]; ?>
              </p>
              <a class="nav-link" href="contact.php"><img class="image-link" alt="Socite de deratisation" src="img/contact/nous contactez.png" style="margin-left: 30px;"></a>

            </div>
          </div>



          <!--nos services-->

          <div class="col-md-5 col" id="services">
            <div class="col">
              <h4 class="h-footer" id="h-service">Nos Services</h4>
              <br>
              <ul class="service-ul">
                <div class="row">

                  <div class="col-md-6 service-left">
                    
                       <?php
                       $i = 1;
                          foreach($services as $service){
                            if($i<=6){
                              ?>
                              <li>
                              <il> <?php echo $service["title"]; ?></il>
                            </a></li> <br>

                          <?php
                            }
                        
                          ++$i;
                          }
                       ?>
                  </div>

                  <?php
                    if(count($services)>6){
                      ?>
                      <div class="col-md-6 service-right">
                      <?php
                       $i = 1;
                          foreach($services as $service){
                            if($i>4){
                              ?>
                              <li>
                              <il> <?php echo $service["title"]; ?></il>
                            </a></li> <br>

                          <?php
                            }
                        
                          ++$i;
                          }
                       ?>
  
  
                    </div>
                    <?php
                    }
                  ?>
               
                </div>
              </ul>

            </div>
          </div>


          <!--contact-->

          <div class="col-md-3 col" id="contact">
            <div class="col">
              <h4 class="h-footer">Contact</h4>

              <ul class="contact-footer">
                <hr>
                <li>Adresse :  <?php echo $info["adresse"]; ?></li>
                <hr>
                <li> Tel : <a href="Tel:+212 <?php echo $info["Tel"]; ?>"> +212 <?php echo $info["Tel"]; ?></a></li>
                <hr>

                <li><i class="fa-solid fa-envelope" style="color: #f5f9ff;"></i><a href="mailto:<?php echo $info["email"]; ?>"> <?php echo $info["email"]; ?></a></li>
                <hr>
              </ul>



              <!--A PROPOS DE NOUS-->


              <h4 class="h-footer">A PROPOS DE NOUS</h4>

              <iframe src="<?php echo $info["localisation"]; ?>" width="265" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <a href="idnex.php">
                <P><u>Société de Plomberie Casablanca Maroc</u></P>
              </a>

            </div>
          </div>

        </div>

        <!--copyright-->


        <div class="row">

          <div class="col-lg-3 "></div>


          <div class="col-lg-6 ">
            <div class="row icon">
              <div class="col item social">
                <a href="<?php echo $info["facebook"]; ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="<?php echo $info["linkedin"]; ?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                <a href="<?php echo $info["twitter"]; ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="row copyright">
              <div class="copyright"> &copy; Copyright 2022 by &nbsp; <a href="idnex.php">HVNET PLOMBERIE
                  Casablanca</a>. Tous droits réservés.</div>
            </div>
          </div>


          <div class="col-lg-3 footer-logo"></div>
        </div>


      </div>
    </div>
    <!-- Footer Bottom End -->
  </footer>



  </div>


  <!-- The Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.parallax.js"></script>
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
  <script src="js/jquery.nivo.slider.pack.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/superfish.js"></script>
  <script src="js/tweetMachine.js"></script>
  <script src="js/tytabs.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jflickrfeed.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/spectrum.js"></script>
  <script src="js/switcher.js"></script>
  <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/jquery.gmap.min.js"></script>
  <script src="js/custom.js"></script>
  </div>
</body>

</html>