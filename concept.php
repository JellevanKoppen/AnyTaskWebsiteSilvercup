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
  <script src="./js/master.js"></script>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/master.css">
</head>

<body>
  <!-- Navigation bar -->
  <?php include 'inc/nav.php' ?>

  <div class="w-100">
    <img src="./images/h-1.jpg" alt="" class="w-100 header" style="height: 200px;object-fit: cover;">
  </div>

  <!-- Content -->
  <!-- Zet hier je content! -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-custom mt-5 w-100">Zet hier je content</h1>
        <h3 class="text-custom mt-2 w-100">Voorbeeldtekst</h3>
      </div>
      <div class="col-6 mt-5">
        <section class="text-justify text-muted small">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac mi accumsan, pharetra mi non, mollis eros. Morbi et massa quis tortor porttitor consequat. Donec commodo, nisi et eleifend maximus, justo lectus porttitor risus,
          laoreet convallis urna tellus vel mauris. Quisque at mi lacinia, sodales lorem quis, pretium orci. Nulla tellus ipsum, tincidunt et pharetra in, sodales vestibulum neque. Sed pulvinar molestie enim, id laoreet tortor semper in.
        </section>
      </div>
      <div class="col-6 mt-5">
        <section class="text-justify text-muted small">
          In dapibus, dolor sed pellentesque varius, sapien mauris vestibulum tellus, eget pretium magna velit vitae quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dictum nisl non metus molestie
          dapibus. Duis bibendum odio ut maximus tempus. Aliquam sollicitudin velit nulla, nec faucibus orci cursus sed.
        </section>
      </div>
    </div>
  </div>

  <!-- Cookie banner -->
  <?php include 'inc/cookie-banner.php' ?>

  <!-- footer -->
  <?php include 'inc/footer.php' ?>

</body>

</html>
