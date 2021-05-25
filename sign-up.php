<!-- David Faulkner G00299507 GMIT Web Apps Project -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,500;1,200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="img/logo.png">
  <title>Premium Acoustics - Join Us</title>
</head>

<body>

  <!-- NAVBAR, referenced from bootstrap: https://getbootstrap.com/docs/5.0/components/navbar/ -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php"><img class="navbar-brand mr-auto" id="logo" src="img/logo.png" alt="premium-acoustics-logo" width="200px"></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-page-links" aria-controls="nav-page-links" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav-page-links">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav-links">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><!-- END OF NAVBAR -->

  <hr class="line">

  <!-- SIGN-UP FORM, referenced from bootstrap: https://getbootstrap.com/docs/5.0/forms/layout/ -->
  <div class="container" id="sign-up">
    <form class="row g-3 justify-content-center" onsubmit="return false">
      <div class="col-md-6">
        <label for="inputFirstName" class="form-label">First name</label>
        <input type="text" class="form-control" id="inputFirstName">
      </div>
      <br>
      <div class="col-md-6">
        <label for="inputLastName" class="form-label">Last name</label>
        <input type="text" class="form-control" id="inputLastName">
      </div>
      <br>
      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail">
      </div>
      <br>
      <div class="col-md-6">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword">
      </div>
      <br>
      <div class="col-6">
        <br>
        <button type="submit" class="btn btn-primary btn-block" onsubmit="sendDetails()">Create account</button>
      </div>
    </form>
  </div><!-- END OF SIGN-UP FORM -->

  <!-- FOOTER -->
  <footer class="container-fluid bg-dark">
    <div class="container" id="top-footer">
      <div id="social">
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-whatsapp"></i></a>
        <a href=""><i class="bi bi-github"></i></a>
        <a href=""><i class="bi bi-youtube"></i></a>
      </div>
      <div class="" id="back-to-top">
        <a href="#"><i class="bi bi-caret-up-square-fill"></i></a>
      </div>
    </div>
    <div id="base-footer">
      <hr>
      <div class="container-fluid">
        <p>David Faulkner &copy 2021</p>
      </div>
    </div>
  </footer><!-- END OF FOOTER -->

  <script src="functionality.js?2"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>