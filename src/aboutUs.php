<!DOCTYPE html>
<html class="h-100">
  <head>
    <meta charset="utf-8">
    <title> About Us </title>
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/customstyle.css">
    <!--<link rel="stylesheet" href="styles/style.css">-->

  </head>
  <!-- The classes help format the sticky footer -->
  <body class="d-flex flex-column h-100">
    <script src="./js/customfunctions.js"> </script>

    <?php include './php/header.php' ?>
    
    <main role="main" class="flex-shrink-0">
      <br>
      <br>
    <div id="content" class="container"  style="background-color:#9A9A9A; padding-right:0; padding-left:0;">
    
    <div class="team-section"><h1>Meet the Team.</h1></div>

      <div class="description"><h3>Project - Description </h3></div>

      <div class = "project-description">
        <p>
          Our application is catered towards machine learning developers, photographers, and anybody who is curious about photos.
          Our project takes an image and, if the image has the information embedded, identifies when and where it was taken. It then uses external resources to determine what type of weather it was at that particular time and location.
        </p>
      </div>

      <div class = "team-members"><h4> Team Members</h4><br>

      <p>Martin Donovan - Junior </p>
      <p>Sean Jones - Senior </p>
      <p>Nick Anzalone - Senior </p>
      <p>Mohit Gokul Murali - Senior </p>
      <p>Joyce Sommer - Junior </p>
      </div>
      
      </div>
      </main>

      <br>
      
      <?php include './php/footer.php' ?>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      
      <script>
          //ImgServerView.insertNavbar();
          //ImgServerView.insertFooter();
          ImgServerController.setupMenuEvents();
      </script>

  </body>
</html>
