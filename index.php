<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="./images/icon.png">
  <title>SITE TITEL</title>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/master.css">
</head>

<?php

$error_message = "";
$success_message = "";

$required = array("inputEmail", "inputFirstname", "inputLastname", "inputPhone");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $error_message = "";
  $success_message = "";
  $public = true;
  $correct = true;

  foreach($required as $field) {
    if (empty($_POST[$field])) {
      $error_message = "Graag alle verplichte velden invullen";
      $correct = false;
      break;
    }
  }

  if ($public) {
    $correct = false;
    $error_message = "Contactformulier tijdelijk uitgeschakelt wegens gegevensbescherming!";
  }

  if ($correct) {

    $email = $_POST['inputEmail'];
    $voornaam = $_POST['inputFirstname'];
    $achternaam = $_POST['inputLastname'];
    $nummer = $_POST['inputPhone'];

    $subject = "Bericht van " . $voornaam;
    $content = "Hi, <br /> Deze persoon heeft het contactformulier van je website ingevult! <br /><br />";
    $content .= "Naam: " . $voornaam . "<br /> Achternaam: " . $achternaam . "<br /> Email: " . $email . "<br /> Nummer: " . $nummer;

    if (!empty($_POST['bericht'])){
      $bericht = $_POST['bericht'];
      $content .= "<br /> Bericht: <br />" . $bericht;
    }

    $fromAddress = "-fpostmaster@localhost";
    $toEmail = "jelle@sprietenbos.nl";
    $mailHeaders = "From: " . $voornaam . "<". $email .">\r\n";

    require('inc/PHPMailer.php');
    require('inc/SMTP.php');
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port     = 587;
    $mail->Username = "silvercupanytask";
    $mail->Password = "*****";
    $mail->Host     = "smtp.gmail.com";
    $mail->Mailer   = "smtp";
    $mail->SetFrom("silvercupanytask@gmail.com", "Bedrijfsnaam");
    $mail->AddReplyTo("silvercupanytask@gmail.com", "PHPPot");
    $mail->AddAddress("silvercupanytask@gmail.com");
    $mail->Subject = $subject;
    $mail->WordWrap = 80;
    $mail->MsgHTML($content);
    $mail->IsHTML(true);
    if(!$mail->Send()) {
      $error_message = "Problem sending email. \n";
      $error_message .= $mail->ErrorInfo;
    } else {
      $success_message = "Bedankt voor je reactie, je hoort snel van ons!";
    }
  }
}

?>

<body>
  <!-- Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
      <!-- <img src="./images/" alt="" > -->
      <h1>LOGO</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNavDropdown" class="collapse navbar-collapse flex-grow-1 bg-light text-right">
      <ul class="navbar-nav ml-auto flex-nowrap mr-sm-5 mr-md-5">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Wie zijn wij</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="shop.html">Shop</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Carousel -->
  <div id="carousel" class="carousel slide header-carousel" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/h-1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-custom">Welkom bij ...!</h5>
        <p class="text-custom">Hier kun je een ondertitel plaatsen</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/h-2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welkom bij ...!</h5>
        <p>Hier kun je een ondertitel plaatsen</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/h-3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welkom bij ...!</h5>
        <p>Hier kun je een ondertitel plaatsen</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Vorige</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Volgende</span>
  </a>
</div>

  <!-- Content -->
  <div class="container">
    <a class="anchor" id="about"></a>
    <div class="row mt-5">

      <div class="row">
        <div class="col-5 ml-1 mr-n1 ml-md-4 px-md-5">
          <h2 class="text-custom text-center mt-3">WIE ZIJN WIJ</h2>
          <h5 class="text-custom text-center">TECH BEDRIJFSNAAM</h5>
          <section class="text-justify text-muted small">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac mi accumsan, pharetra mi non, mollis eros. Morbi et massa quis tortor porttitor consequat. Donec commodo, nisi et eleifend maximus, justo lectus porttitor risus,
            laoreet convallis urna tellus vel mauris. Quisque at mi lacinia, sodales lorem quis, pretium orci. Nulla tellus ipsum, tincidunt et pharetra in, sodales vestibulum neque. Sed pulvinar molestie enim, id laoreet tortor semper in.
          </section>
          <section class="text-justify text-muted mt-4 small">
            In dapibus, dolor sed pellentesque varius, sapien mauris vestibulum tellus, eget pretium magna velit vitae quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dictum nisl non metus molestie
            dapibus. Duis bibendum odio ut maximus tempus. Aliquam sollicitudin velit nulla, nec faucibus orci cursus sed.
          </section>
        </div>
        <div class="d-none d-md col-md-1"></div>
        <div class="col-7 col-md-6">
          <div class="row">
            <div class="col-sm">
              <img src="./images/ph-2.jpg" class="white-border w-100 img-fluid" alt="">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm">
              <img src="./images/ph-1.jpg" class="white-border w-100 img-fluid" alt="">
            </div>
            <div class="col-sm">
              <img src="./images/ph-3.jpg" class="white-border w-100 img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="white-space"></div>

    <a class="anchor" id="reviews"></a>

    <div class="row mt-5">
      <div class="col-12">
        <h2 class="text-custom text-center">Wat onze klanten zeggen</h2>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 col-md-4 mt-sm-2 mt-md-5">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <img src="./images/hs-1.jpg" alt="" class="img-fluid w-100 rounded-circle">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="text-custom text-center">Voornaam Achternaam</h5>
          </div>
          <div class="col-12">
            <h5 class="text-muted text-center small font-weight-bold">CEO van Example Co.</h5>
          </div>
          <div class="col-4 mx-auto">
            <img src="./images/sterren.jpg" class="w-100 img-fluid" alt="">
          </div>
        </div>
        <div class="col-12 mt-3">
          <section class="text-center text-custom">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac mi accumsan, pharetra mi non, mollis eros. Morbi et massa quis tortor porttitor consequat."
          </section>
        </div>
      </div>
      <div class="col-12 col-md-4 mt-sm-5">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <img src="./images/hs-2.jpg" alt="" class="img-fluid w-100 rounded-circle">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="text-custom text-center">Voornaam Achternaam</h5>
          </div>
          <div class="col-12">
            <h5 class="text-muted text-center small font-weight-bold">CEO van Example Co.</h5>
          </div>
          <div class="col-4 mx-auto">
            <img src="./images/sterren.jpg" class="w-100 img-fluid" alt="">
          </div>
        </div>
        <div class="col-12 mt-3">
          <section class="text-center text-custom">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac mi accumsan, pharetra mi non, mollis eros. Morbi et massa quis tortor porttitor consequat."
          </section>
        </div>
      </div>
      <div class="col-12 col-md-4 mt-sm-5">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <img src="./images/hs-3.jpg" alt="" class="img-fluid w-100 rounded-circle">
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="text-custom text-center">Voornaam Achternaam</h5>
          </div>
          <div class="col-12">
            <h5 class="text-muted text-center small font-weight-bold">CEO van Example Co.</h5>
          </div>
          <div class="col-4 mx-auto">
            <img src="./images/sterren.jpg" class="w-100 img-fluid" alt="">
          </div>
        </div>
        <div class="col-12 mt-3">
          <section class="text-center text-custom">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac mi accumsan, pharetra mi non, mollis eros. Morbi et massa quis tortor porttitor consequat."
          </section>
        </div>
      </div>
    </div>

    <div class="white-space"></div>

    <a class="anchor" id="contact"></a>
    <div class="row mt-5 contact pt-2 pb-5 white-border-sm">
      <div class="col-md-6">
        <div class="row mt-3">
          <div class="col-sm">
            <h2 class="text-custom text-sm-white">CONTACT</h2>
          </div>
        </div>
        <div class="row mt-1">
          <div class="col-sm">
            <h4 class="text-custom text-sm-white">Laten we kennis maken!</h4>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-sm-12">
            <div class="invalid-feedback d-block"><?php echo $error_message?></div>
            <div class="valid-feedback d-block mb-2"><?php echo $success_message?></div>
            <form class="row" method="post" action="#contact">
              <div class="form-group col-6">
                <input type="text" placeholder="Voornaam*" class="form-control" name="inputFirstname" aria-describedby="firstname">
              </div>
              <div class="form-group col-6">
                <input type="text" placeholder="Achternaam*" class="form-control" name="inputLastname" aria-describedby="lastname">
              </div>
              <div class="form-group col-6">
                <input type="email" placeholder="Email*" class="form-control" name="inputEmail" aria-describedby="email">
              </div>
              <div class="form-group col-6">
                <input type="text" placeholder="Telefoonnummer*" class="form-control" name="inputPhone" aria-describedby="phone">
              </div>
              <div class="form-group col-12">
                <textarea name="bericht" placeholder="Bericht" class="form-control" rows="4" cols="80"></textarea>
              </div>
              <div class="small text-muted col-12 text-sm-white">
                * Verplicht veld
              </div>
              <div class="text-center col-12">
                <button type="submit" class="btn btn-custom px-5">VERSTUUR</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="d-none d-md-block col-md-6">
        <img src="./images/ph-4.jpg" alt="" class="img-fluid w-100 white-border">
      </div>
    </div>
  </div>

  <!-- Cookie popup -->

  <!-- footer -->
  <footer class="sticky-bottom bg-custom-dark text-center mt-5 pt-2">
    <h1 class="text-white font-weight-bold">LOGO</h1>
    <section class="text-white pb-3 border-bottom">
      Telefoonnummer: +316******** <br />
      <a class="text-white" href="mailto:example@example.com">Email: example@example.com</a> <br />
      Adresgegevens: Postcode, Straat huisnr, Stad
    </section>
    <section class="text-white py-3">
      © 2020 All rights reserved
    </section>
  </footer>
</body>

</html>
