<?php
include "./dbconnect.php";
// infomrations 

$info = $conn->prepare("SELECT * from infos limit 1");
$info->execute();
$info = $info->fetch();
// data of srvices table
$services = $conn->prepare("SELECT * from services");
$services->execute();
$services = $services->fetchAll();
/* send mail */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$success = "";
if(isset($_POST["send"])){
  // $email = $_POST["email"];
  $name = $_POST["name"];
  $tel = $_POST["tel"];
  $ville = $_POST["ville"];
  $local = $_POST["local"];
  $email = $_POST["email"];
  $message = "ville choisi : ".$ville."<br>"."local choisi : ".$local."<br>"."tel : ".$_POST["tel"]."<br>"."message : ".$_POST["message"];

  // Load Composer's autoloader
  require 'vendor/autoload.php';
  $mail = new PHPMailer(true);
  // Import PHPMailer classes into the global namespace

  try {
    // Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'techchoual7@gmail.com';                
    $mail->Password   = 'kkpaacfzezrlajxz';                                  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
    $mail->Port       = 587;                                   

    // Recipients
   $mail->setFrom($email, $name);
    $mail->addAddress('techchoual7@gmail.com', "plomberie maroc");
    // Add more recipients if needed

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Client Contact - par mr/mm : '.$name;
    $mail->Body    = $message;
    if($mail->send()){
        $success = "message sent succesfuly";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <link href="img/ico/logo-winbest-deratisation.ico" rel="shortcut icon" />
    <link href="img/ico/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="img/ico/apple-touch-icon-72.png" rel="apple-touch-icon" sizes="72x72" />
    <link href="img/ico/apple-touch-icon-114.png" rel="apple-touch-icon" sizes="114x114" />
    <link href="img/ico/apple-touch-icon-144.png" rel="apple-touch-icon" sizes="144x144" />


    <title> Societe d'installation de broyeur casablanca - HVNET PLOMBERIE</title>
    <meta name="description"
        content="Societe d'installation de broyeur societe professionel dans l'installation de broyeur au maroc">
    <meta name="keywords"
        content="Broyeur casablanca , societe broyeur casablanca , Broyeur casablanca , entreprise broyeur casablanca, Broyeur casablanca Maroc , societe broyeur casablanca Maroc , Broyeur casablanca Maroc, Broyeur Maroc, societe broyeur Maroc , Broyeur Maroc">

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
    <link rel="canonical" href="idnex.php/broyeur-casablanca.html">
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


       


                <!-- Content Start -->

                <!-- fixed div end-->
                <!-- Title, Breadcrumb Start-->
                <div class="breadcrumb-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <h2 class="title">Contact</h2>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Title, Breadcrumb End-->
                <!-- Main Content start-->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" id="contact-form">
                                <h3 class="title">DEVIS GRATUIT</h3>
                                <p>
                                    Si vous recherchez des services de plomberie professionnels et fiables à Casablanca, vous êtes au bon endroit. Nous sommes une societe de plomberie expérimentée et qualifiée, offrant une gamme complète de services de plomberie pour les propriétaires et les societes de Casablanca.

                                </p>
                                <p>
                                    Nous prendrons contact avec vous dès réception de votre message
                                </p>


                                <div class="col-sm-8">
                                  <?php
                                     if($success!=""){
                                         ?>
                                            <div class="alert alert-success"><?php echo $success; ?></div>
                                         <?php
                                     }
                                  ?>
                                    <form method="POST">
                                    
                                        <div id="contactFormHolder">
                                           <div class="inputAndLabelCon">
                                              <label for="">Nom/Prenom <span class="necessary">*</span></label><br>
                                              <input type="text" name="name" placeholder="Nom" style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " required="">
                                           </div>
                                           <div class="inputAndLabelCon">
                                              <label for="">Ville <span class="necessary">*</span></label><br>
                                              <select name="ville" id="vll" style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " required="">
                                                 <option value='' disabled selected hidden>Choisi la Ville</option>
                                                 <option value="agadir">Agadir</option>
<option value="ait_melloul">Ait Melloul</option>
<option value="ait_mohamed">Ait Mohamed</option>
<option value="ait_yourir">Ait Yourir</option>
<option value="al_hoceima">Al Hoceima</option>
<option value="assilah">Assilah</option>
<option value="azemmour">Azemmour</option>
<option value="azrou">Azrou</option>
<option value="beni_ansar">Beni Ansar</option>
<option value="beni_mellal">Beni Mellal</option>
<option value="ben_slimane">Ben Slimane</option>
<option value="bouarfa">Bouarfa</option>
<option value="boujdour">Boujdour</option>
<option value="casablanca">Casablanca</option>
<option value="chefchaouen">Chefchaouen</option>
<option value="dar_bouazza">Dar Bouazza</option>
<option value="demnate">Demnate</option>
<option value="driouch">Driouch</option>
<option value="el_hajeb">El Hajeb</option>
<option value="el_jadida">El Jadida</option>
<option value="el_kelaâ_des_srarhna">El Kelaâ des Sraghna</option>
<option value="errachidia">Errachidia</option>
<option value="essaouira">Essaouira</option>
<option value="fes">Fes</option>
<option value="fnideq">Fnideq</option>
<option value="fquih_ben_salah">Fquih Ben Salah</option>
<option value="guelmim">Guelmim</option>
<option value="guercif">Guercif</option>
<option value="imzouren">Imzouren</option>
<option value="inezgane">Inezgane</option>
<option value="jerada">Jerada</option>
<option value="kasba_tadla">Kasba Tadla</option>
<option value="kenitra">Kenitra</option>
<option value="khemisset">Khemisset</option>
<option value="khenifra">Khenifra</option>
<option value="khouribga">Khouribga</option>
<option value="ksar_el_kebir">Ksar el Kebir</option>
<option value="laayoune">Laayoune</option>
<option value="larache">Larache</option>
<option value="lqliaa">Lqliaa</option>
<option value="marrakech">Marrakech</option>
<option value="martil">Martil</option>
<option value="meknes">Meknes</option>
<option value="midar">Midar</option>
<option value="mohammedia">Mohammedia</option>
<option value="moulay_bousselham">Moulay Bousselham</option>
<option value="nador">Nador</option>
<option value="ouarzazate">Ouarzazate</option>
<option value="ouazzane">Ouazzane</option>
<option value="oued_zem">Oued Zem</option>
<option value="oujda">Oujda</option>
<option value="rabat">Rabat</option>
<option value="safi">Safi</option>
<option value="sale">Sale</option>
<option value="sefrou">Sefrou</option>
<option value="settat">Settat</option>
<option value="sidi_bennour">Sidi Bennour</option>
<option value="sidi_ifni">Sidi Ifni</option>
<option value="sidi_kacem">Sidi Kacem</option>
<option value="sidi_slimane">Sidi Slimane</option>
<option value="skhirat">Skhirat</option>
<option value="souk_el_arbaa">Souk el Arbaa</option>
<option value="souk_larbaa">Souk Larbaa</option>
<option value="souq_el_had">Souq el Had</option>
<option value="tan_tan">Tan Tan</option>
<option value="tangier">Tangier</option>
<option value="taounate">Taounate</option>
<option value="taroudannt">Taroudannt</option>
<option value="taza">Taza</option>
<option value="tetouan">Tetouan</option>
<option value="tifelt">Tifelt</option>
<option value="tiznit">Tiznit</option>
<option value="youssoufia">Youssoufia</option>
<option value="zagora">Zagora</option>
</select>

                                           </div>
                                           <div class="inputAndLabelCon">
                                              <label for="">Tél <span class="necessary">*</span></label><br>
                                              <input style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " type="tel" name="tel" placeholder="Tél" maxlength="10"
                                                 onkeypress="return onlyNumberKey(event)" required="">
                                           </div>
                                           <div class="inputAndLabelCon">
                                              <label for="">Email <span class="necessary">*</span></label><br>
                                              <input name="email" style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " type="text" name="senderEmail" placeholder="Email" required="">
                                           </div>
                         
                                           <div class="inputAndLabelCon" id="rt">
                                              <label>Type de local<span class="necessary">*</span></label><br>
                                              <select name="local" id="TypeLocal" style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " required="">
                                                 <option value='' disabled selected hidden>Choisi le type de local</option>
                                                 <option value="immeuble">Immeuble</option>
<option value="bureau">Bureau</option>
<option value="villa">Villa</option>
<option value="appartement">Appartement</option>
<option value="magasin">Magasin</option>
<option value="usine">Usine</option>
<option value="restaurant">Restaurant</option>
<option value="hôtel">Hôtel</option>
<option value="école">École</option>
<option value="hôpital">Hôpital</option>
<option value="centre_commercial">Centre commercial</option>
<option value="entrepôt">Entrepôt</option>
<option value="cinéma">Cinéma</option>
<option value="salle_de_sport">Salle de sport</option>
<option value="terrain_sport">Terrain de sport</option>
<option value="banque">Banque</option>
<option value="pharmacie">Pharmacie</option>
<option value="agence">Agence</option>
<option value="maison_retraite">Maison de retraite</option>
<option value="garage">Garage</option>
<option value="musée">Musée</option>
<option value="bibliothèque">Bibliothèque</option>
<option value="clinique">Clinique</option>
<option value="laboratoire">Laboratoire</option>
<option value="studio">Studio d'enregistrement</option>
<option value="salle_de_réunion">Salle de réunion</option>
<option value="piscine">Piscine</option>
<option value="stade">Stade</option>
<option value="aéroport">Aéroport</option>
<option value="gare">Gare</option>
<option value="place_publique">Place publique</option>
<option value="église">Église</option>
<option value="mosquée">Mosquée</option>
<option value="synagogue">Synagogue</option>
<option value="temple">Temple</option>
</select>

                                           </div>
                         
                                           <div class="inputAndLabelCon" id="Part">
                                              <label for="">Sujet <span class="necessary">*</span></label><br>
                                              <select name="messageSubject1" style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " id="pr">
                                                 <option value='' disabled selected hidden>Choisi le Sujet</option>
                                             
                                              </select>
                                           </div>
                         
                                           <div class="inputAndLabelCon" id="Prof">
                                              <label for="">Sujet <span class="necessary">*</span></label><br>
                                              <select name="messageSubject2" style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " id="pf">
                                                 <option value='' disabled selected hidden>Choisi le Sujet</option>
                                                 
                                              </select>
                                           </div>
                         
                                           <div class="inputAndLabelCon" id="atre">
                                              <label for="">Autre <span class="necessary">*</span></label><br>
                                              <input style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 40px; " type="text" name="messageSubject3" id="atr" placeholder="Autre">
                                           </div>
                         
                         
                                           <script>
                                              $(document).ready(function () { $("#Part").hide(); $("#Prof").hide(); $("#atre").hide(); });
                                           </script>
                         
                                           <script>
                                              let sltplc = document.querySelector('#TypeLocal');
                                              sltplc.addEventListener('change', function () {
                         
                                                 if (this.value == '2') {
                                                    $("#Prof").show();
                                                    $("#atre").hide();
                                                    $('#atr').val('');
                                                    $("#Part").hide();
                                                    $("#pr")[0].selectedIndex = 0;
                         
                                                    let slpf = document.querySelector("#pf");
                                                    slpf.addEventListener('change', function () {
                                                       if (this.value == 10) {
                                                          $("#atre").show();
                                                       }
                                                       else {
                                                          $("#atre").hide();
                                                          $('#atr').val('');
                                                       }
                                                    });
                                                 }
                                                 else
                                                    if (this.value == '1') {
                                                       $("#Part").show();
                                                       $("#atre").hide();
                                                       $('#atr').val('');
                                                       $("#Prof").hide();
                                                       $("#pf")[0].selectedIndex = 0;
                         
                                                       let slpr = document.querySelector("#pr");
                                                       slpr.addEventListener('change', function () {
                                                          if (this.value == 5) {
                                                             $("#atre").show();
                                                          }
                                                          else {
                                                             $("#atre").hide();
                                                             $('#atr').val('');
                                                          }
                                                       });
                                                    }
                                              });
                                           </script>
                         
                                           <div class="inputAndLabelCon" id="messageTxt">
                                              <label for="">Message <span class="necessary">*</span></label><br>
                                              <textarea style=" border: 1px solid rgb(10, 10, 10) !important;
                                   font-family: arial;
                                   font-Weight: bold;
                                   font-size: 18px;
                                   color: #6c757d;  width: 100%;
                                   height: 100px; " type="text" name="message" placeholder="Message" required=""></textarea><br><br>
                         
                                           </div>
                         
                         
                         
                                           <button id="sendMessageBtn" style="color:#fff; width: 100% ; background-color:#000; font-weight:bold"
                                              name="send">ENVOYER</button>
                         
                                           
                                        </div>
                                     </form>

                                </div>









                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                                <div class="address widget">
                                    <h3 class="title">Nos coordonnées </h3>
                                    <ul class="contact-us">
                                        <li>
                                            <i class="icon-map-marker"></i>
                                            <p>
                                                <strong>Addresse:</strong> <?php echo $info["adresse"]; ?> <br>
                                            </p>

                                        </li>
                                        <li>
                                            <i class="icon-phone"></i>
                                            <p>
                                                <strong>Téléphone:</strong>+212 <?php echo $info["Tel"]; ?>
                                            </p>
                                        </li>
                                        <li>
                                            <i class="icon-phone"></i>
                                            <p>
                                                <strong>Fixe:</strong>+212 <?php echo $info["Tel"]; ?>
                                            </p>
                                        </li>
                                        <li>
                                            <i class="icon-envelope"></i>
                                            <p>
                                                <strong>Email:</strong><a
                                                    href="mailto:<?php echo $info["email"]; ?>"><?php echo $info["email"]; ?>
                                                </a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-info widget">
                                    <h3 class="title">Heures de travail</h3>
                                    <ul>
                                        <li><i class="icon-time"> </i><?php echo $info["temps_travail"]; ?></li>

                                    </ul>
                                </div>
                                <div class="content-box-info" style="text-align: left;">
                                    <h4 class="title">Societe de Plomberie à casablanca</h4>

                                    <ul class="check-list why">
                                     

 <?php
                        foreach($services as $service){
                          ?>
                        
                              <li><a href="service.php?service=<?php echo $service["id"]; ?>"><?php echo $service["title"]; ?></a></li>

                              
                          <?php
                        }
                    ?>
                                        


                                    </ul>
                                </div>
<br>
                                <div class="button-devis">
                                    <button class="btn btn-special btn-color pull-right"
                                        style="background-color: #FBB216; border-radius: 50px;font-size: 13px;margin-left: 0px;width: 200px; height: 50px;">
                                        <span onmouseover="hover()" onmouseout="out()" class="icon-phone"
                                            id="icon-phone" style="color: rgb(255, 255, 255);"></span>
                                            Tel: <a href="Tel:+212<?php echo $info["Tel"]; ?>"> <strong> +212 <?php echo $info["Tel"]; ?></strong></a> </button>
                                </div>

                            </div>
                        </div>

                        <!-- Left Section End -->
                    </div>
                </div>
                <div class="divider"></div>
            </div>
    </div>
    <!-- Main Content end-->

    <!-- Content End -->








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