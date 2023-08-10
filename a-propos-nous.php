<?php
include "./dbconnect.php";
// infomrations 
$info = $conn->prepare("SELECT * from infos limit 1");
$info->execute();
$info = $info->fetch();
// data of home_page table
$about_page = $conn->prepare("SELECT * from about_page Limit 1");
$about_page->execute();
$about_page = $about_page->fetch();
// services about 
$about_services = $conn->prepare("SELECT * from about_services");
$about_services->execute();
$about_services = $about_services->fetchAll();
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

          <div class="logo pull-left" style="margin-top:20px ;"> <a href="index.php"><img id="img-nav" alt="Societe de Plomberie HVNET à Casablanca Maroc" src="img/logo plomberie .png" /></a>
          </div>


          <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a id="button-phone" class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
              <i class="icon-reorder icon-2x"></i>
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
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


      <!-- block text star -->
      <div class="container">
        <div class="row">
          <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h3 id="titlee" style="display: none;">A propos de nous
            </h3>
            <div class="elementor-text-editor elementor-clearfix">
              <h1 id="paragraphe" class="titre-principal" style="text-align: center;"><strong>Société de plomberie
                  Casablanca - HVNET PLOMBERIE.</strong></h1>
              <?php 
                 echo $about_page["presentation"];
              ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <img id="imgser" alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="./dashboard/pages/about_page/imgs/<?php echo $about_page["img1"]?>">
          </div>
          <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h1 id="paragraphe" class="titre-secend"></h1><strong>Pourquoi faut-il faire appel a notre societe de plomberie ? </strong></h1>
                <p>En faisant appel à notre societe de plomberie professionnelle, vous pouvez économiser du temps et de l'argent à long terme. Les plombiers professionnels diagnostiqueront les problèmes de plomberie rapidement et efficacement, évitant ainsi les problèmes plus importants et coûteux à l'avenir. De plus, nos atisans plombiers peuvent vous fournir des conseils et des recommandations pour aider à prévenir les problèmes de plomberie à l'avenir.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h2 id="paragraphe" class="titre-principal" style="text-align: center;"><strong>Un artisan plombier à Casablanca pour dépannage</strong></h1>
                 <p>Le plombier à Casablanca est à l'écoute du client pour le satisfaire au maximum.</p>
                 <p>Un chauffagiste plombier Casablancais intervient spécialement dans le dépannage des chauffe eau, ballon d'eau chaude et chaudière à gaz.</p>
                 <p>Le dépannage et l'installation par un plombier à Casablanca sont des activités principales que nous avons pratiquement tout le temps.</p>
                 <p>Dans le cadre d'une urgence, un plombier Casablancais intervient dans tous les quartiers.</p>
                 <p>Un bon plombier Paris est organisé dans son travail avec les outils nécessaires  pour accomplir les misisions dans la journée.</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="elementor-text-editor elementor-clearfix">
                  <h2 id="paragraphe" class="titre-secend"><strong>Artisan Plombier Casablanca</strong></h1>
                   <p>Le tarif horaire d'un plombier à Casablanca et dans les autres villes du Maroc peut se connaître par un simple appel, et en toute transparence.</p>
                   <p>Le tarif horaire d'un plombier Casablancais est assez cher en général, en sachant que le coût de la main d'oeuvre ne dépend pas du type de travail à réaliser.</p>
                   <p>Le tarif plombier à Casablanca pour un certain type d'intervention n'est pas en fonction du cout horaire et est valable toute la semaine y compris parfois meme le dimanche; ce sont en général des forfaits.</p>
                   <p><strong>SOS</strong> Urgence Plombier Casablanca pas cher intervient dans le cadre d'une urgence 7 jours sur 7 et 24 heures sur 24.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
              <img id="imgser" alt="Société de dératisation et désinsectisation à Casablanca et partout au Maroc"
              src="./dashboard/pages/about_page/imgs/<?php echo $about_page["img2"]?>">
            </div>
          </div>


          <div class="row">
            <div class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <div class="elementor-text-editor elementor-clearfix">
                <h3><strong>Recherche et développement</strong></h3>
                <p>Chaque plombier à Casablanca a reçu une formation de qualité en sachant parfaitement gérer les différentes missions qui leur sont proposées</p>
                <p>En cas d'urgence, nous avons un service spécialement adapté de maintenance et d'astreinte. Une équipe de veille se tient prête à intervenir pour les urgences plomberie graves comme des fuites d'eaux majeures.</p>
                <p>Notre societe de plomberie installe le sanitaire qui représente une grosse partie du travail du plombier a Casablanca.
                  Notre societe plomberie HVNET se charge d'installer votre appareil de plomberie par des poseurs professionnels.
                  <br>
                <br><strong><a href="idnex.php">HVNET PLOMBERIE,
                </a></strong><strong>realise l'installation et la pose de :</strong> </p>

        
              <ul class="service-ul">
                <div class="row">

                  <div class="col-md-4 service-left">
                    <p style="margin-left: 65px; color: #5AC8E8;">Pour Maison</p>
                         <!-- <li>Changement chaudière</li>
                         <li>Installation chauffe - eau</li>
                         <li>Nettoyage de tuyaux</li>
                         <li>Reparation de fuites</li>
                         <li>Conduite d'evacuation</li> -->
                         <?php 
                            foreach($about_services as $service){
                              if($service["type"]=="maison"){
                                ?> 
                                  <li><?php echo $service["title"]; ?></li>
                                <?php
                              }
                            }
                         ?>
                   
                  </div>
                  <div class="col-md-4 service-center">
                    <p style="margin-left: 65px; color: #5AC8E8;">Pour Cuisine</p>
                    <?php 
                            foreach($about_services as $service){
                              if($service["type"]=="cuisine"){
                                ?> 
                                  <li><?php echo $service["title"]; ?></li>
                                <?php
                              }
                            }
                         ?>
             
                  </div>
                  

                  <div class="col-md-4 service-right">
                    <p style="margin-left: 14px; color: #5AC8E8;">Pour Salle de bain et Toilette</p>
                    <?php 
                            foreach($about_services as $service){
                              if($service["type"]=="toilette"){
                                ?> 
                                  <li><?php echo $service["title"]; ?></li>
                                <?php
                              }
                            }
                         ?>
                     <br>
                  </div>
                </div>
              </ul>
              <p style="margin-left: 180px;">Nos tarifs de plomberie sur Casablanca sont compétitifs grâce à un partenariat efficace avec les grossistes du secteur.</p>
              <p style="margin-left: 85px;">Vous pouvez nous contacter pour obtenir un devis gratuit pour des travaux de plomberie en passant par notre page de <a href="devis.php">Demandez devis</a></p>

          
              </div>
            </div>
          </div>

        </div>

        <!-- block text end -->





      </div>


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
                              <li><a href="reparation-fuite-eau-casablanca.html">
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
                              <li><a href="reparation-fuite-eau-casablanca.html">
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