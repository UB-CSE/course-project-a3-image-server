<!-- Sean Jones -->
<!DOCTYPE html>

<html class="h-100" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>

    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/customstyle.css">
    <!--<link rel="stylesheet" href="./styles/loginstyle.css">-->

</head>
<!-- The classes help format the sticky footer -->
<body class="d-flex flex-column h-100">
    <script src="./js/customfunctions.js"> </script>

    <?php include './php/header.php' ?>
    <br><br>
    <main role="main" class="flex-shrink-0">
    <div id="content" class="container pb-0" style="background-color:#9A9A9A; padding-right:0; padding-left:0;">


    <form action="./php/action_register.php" method="post">
        <div class="loginContainer container" style="background-color: #9A9A9A;">
            <h1>Register</h1>
            <p>Please complete this form to create an account.</p>
            <hr>

            <!-- input field for email -->
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <!-- input field for password -->
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <!-- input field for repeated password -->
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Enter your password again" name="psw-repeat" id="psw-repeat" required>

            <hr>
            <!-- submit button -->
            <button type="submit" class="registerbtn">Register</button>
            </div>

            <!-- Option to sign in for users who already have account -->
            <div class="loginContainer container signin d-inline-flex align-items-center" style="background-color: #706f6f;">
                <p class="text-center w-100 my-0">Already have an account? <a href="loginForm.php" style="color: #fff;">Sign in</a>.</p>
            </div>
    </form>

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




