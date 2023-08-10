<?php
   include "./dbconnect.php";
    // infomrations 
$info = $conn->prepare("SELECT * from infos limit 1");
$info->execute();
$info = $info->fetch();
   if(isset($_GET["blog"])){
        $blog = $conn->prepare("SELECT * from blogs where id=:id");
        $id = $_GET["blog"];
        $blog->bindParam(":id",$id);
        $blog->execute();
        $blog = $blog->fetch();
   }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet"
        type="text/css" />
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


    <title> <?php echo $blog["title"]; ?></title>
    <meta name="description"
        content="Société de dératisation Casablanca: Pro en gestion parasitaire à Casablanca! HVNET PLOMBERIE se déplace à Casablanca. L’entreprise est accréditée pour la Gestion Parasitaire.">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Link canonique -->
    <link rel="canonical" href="idnex.php/a-propos-nous.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <div class="wrap"><!-- Header Start -->


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
        <br>
        <div class="container mt-5">
            <section class="">
                <h1 alt="title" style="text-align: center;"><strong>Idées déco salle de bains, l’art de rafraîchir cette
                        pièce avec trois fois rien.</strong></h1>
                <br>

            </section>
        </div>
        <br>

        <img id="imblog" src="./dashboard/pages/blogs/imgs/<?php echo $blog["img"] ?>" alt="salle de bain">

        <div class="row" style="padding: 100px; margin-top: -50px;">
            <?php echo $blog["contenu"] ?>
        </div>

        <!-- <h3
												class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3">
												3 commentaires pour "Une entrevue avec Joyce Meyer"</h3>

											<ul class="comments">
												<li>
													<div class="comment">
														<div
															class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
															<img class="avatar rounded-circle" alt=""
																src="img/avatars/avatar-2.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong class="text-dark">John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i>
																			Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
																Nam viverra euismod odio, gravida pellentesque urna
																varius vitae, gravida pellentesque urna varius vitae.
																Lorem ipsum dolor sit amet, consectetur adipiscing elit.
																Nam viverra euismod odio, gravida pellentesque urna
																varius vitae. Sed dui lorem, adipiscing in adipiscing
																et, interdum nec metus. Mauris ultricies, justo eu
																convallis placerat, felis enim ornare nisi, vitae mattis
																nulla ante id dui.</p>
															<span class="date float-end">January 12, 2022 at 1:38
																pm</span>
														</div>
													</div>

													<ul class="comments reply">
														<li>
															<div class="comment">
																<div
																	class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																	<img class="avatar rounded-circle" alt=""
																		src="img/avatars/avatar-3.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong class="text-dark">John Doe</strong>
																		<span class="float-end">
																			<span> <a href="#"><i
																						class="fas fa-reply"></i>
																					Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur
																		adipiscing elit. Nam viverra euismod odio,
																		gravida pellentesque urna varius vitae, gravida
																		pellentesque urna varius vitae.</p>
																	<span class="date float-end">January 12, 2022 at
																		1:38 pm</span>
																</div>
															</div>
														</li>
														<li>
															<div class="comment">
																<div
																	class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																	<img class="avatar rounded-circle" alt=""
																		src="img/avatars/avatar-4.jpg">
																</div>
																<div class="comment-block">
																	<div class="comment-arrow"></div>
																	<span class="comment-by">
																		<strong class="text-dark">John Doe</strong>
																		<span class="float-end">
																			<span> <a href="#"><i
																						class="fas fa-reply"></i>
																					Reply</a></span>
																		</span>
																	</span>
																	<p>Lorem ipsum dolor sit amet, consectetur
																		adipiscing elit. Nam viverra euismod odio,
																		gravida pellentesque urna varius vitae, gravida
																		pellentesque urna varius vitae.</p>
																	<span class="date float-end">January 12, 2022 at
																		1:38 pm</span>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comment">
														<div
															class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
															<img class="avatar rounded-circle" alt=""
																src="img/avatars/avatar.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong class="text-dark">John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i>
																			Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
															</p>
															<span class="date float-end">January 12, 2022 at 1:38
																pm</span>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div
															class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
															<img class="avatar rounded-circle" alt=""
																src="img/avatars/avatar.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong class="text-dark">John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i>
																			Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
															</p>
															<span class="date float-end">January 12, 2022 at 1:38
																pm</span>
														</div>
													</div>
												</li>
											</ul>

											<h3 -->
        <div id="comments" class="posts-block post-comments"
            style="padding: 320px;margin-top: -420px; margin-left: -235px;">
            <h3 class="text-color-primary text-capitalize font-weight-bold text-5 m-0 mb-3 mt-5"
                style="margin-right: 100px; color: #5AC8E8; ">
                <strong>Laisser un commentaire </strong>
                <h3>


                    <form class="custom-form-simple-validation p-4 rounded bg-color-grey" action="/" method="POST">
                        <div class="p-2">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="form-label required mb-1 font-weight-bold text-dark">
                                        Nom et prénom*</label>
                                    <input type="text" value="" data-msg-required="Veuillez entrer votre nom et prénom."
                                        maxlength="100" class="form-control py-3 px-3 border-0 box-shadow-none"
                                        name="name" id="name" required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="form-label required mb-1 font-weight-bold text-dark">Adresse
                                        e-mail*</label>
                                    <input type="email" value=""
                                        data-msg-required="Veuillez entrer votre adresse e-mail."
                                        data-msg-email="S'il vous plaît, mettez une adresse email valide."
                                        maxlength="100" class="form-control py-3 px-3 border-0 box-shadow-none"
                                        name="email" id="email" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label
                                        class="form-label required mb-1 font-weight-bold text-dark">Commentaire*</label>
                                    <textarea maxlength="5000" data-msg-required="Veuillez entrer votre message."
                                        rows="8" class="form-control p-3 border-0 box-shadow-none" name="message"
                                        id="message" required=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mb-0" style="text-align: center; font-size: 30px;">
                                    <button type="submit"
                                        class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                        data-loading-text="Loading..." data-cursor-effect-hover="plus"
                                        data-cursor-effect-hover-color="#5AC8E8" style="background-color: #5AC8E8;">
                                        <span>Poster un commentaire</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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