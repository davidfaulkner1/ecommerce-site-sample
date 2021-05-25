<!-- David Faulkner G00299507 GMIT Web Apps Project -->

<?php

// connect to database
include("connection.php");

// php code referenced from Webslesson: https://www.webslesson.info/2016/08/simple-php-mysql-shopping-cart.html
if (isset($_POST["add_to_cart"])) {
  if (isset($_SESSION["shopping_cart"])) {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if (!in_array($_GET["id"], $item_array_id)) {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'      =>  $_GET["id"],
        'item_model'      =>  $_POST["hidden_model"],
        'item_brand'      =>  $_POST["hidden_brand"],
        'item_price'    =>  $_POST["hidden_price"],
        'item_quantity'    =>  $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][$count] = $item_array;
    } else {
      echo '<script>alert("Item Already Added")</script>';
    }
  } else {
    $item_array = array(
      'item_id'      =>  $_GET["id"],
      'item_model'      =>  $_POST["hidden_model"],
      'item_brand'      =>  $_POST["hidden_brand"],
      'item_price'    =>  $_POST["hidden_price"],
      'item_quantity'    =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}

if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete") {
    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
      if ($values["item_id"] == $_GET["id"]) {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>window.location="index.php#order-table"</script>';
      }
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,500;1,200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="img/logo.png">
  <title>Premium Acoustics - Home</title>
</head>

<body>

  <!-- NAVBAR, referenced from bootstrap: https://getbootstrap.com/docs/5.0/components/navbar/ -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container div for navbar -->
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        <div class="ml-auto" id="nav-bar-buttons">
          <ul class="nav navbar-nav" id="user-buttons">
            <!-- Sign-up button -->
            <li>
              <a class="nav-link" href="sign-up.php"><i class="bi bi-person-plus-fill"></i> Sign Up
              </a>
            </li>
            <br>
            <!-- Log-in dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-person-circle"></i> Login
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="mb-3">
                  <p style="color: red; font-size: 12px;">Login required before purchase</p>
                </div>
                <form method="POST" id="form">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                  </div>
                  <div class="form-text">Don't have a Premium Acoustics account? <a href="sign-up.php">Sign up.</a></div>
                  <br>
                  <input type="button" class="btn btn-primary" onclick="login()" value="Login"></input>
                </form>
                <br>
                <div>
                  <p class="text-center" id="incorrect-login" style="color:red;"></p>
                </div>
              </div>
            </li>
            <li>
              <a class="nav-link" id="logout-button" onclick="logout()"><i class="bi bi-box-arrow-right"></i> Logout
              </a>
            </li><br>
          </ul>
        </div>
      </div>
    </div>
  </nav><!-- END OF NAVBAR -->

  <hr class="line">


  <!-- IMAGE CAROUSEL, referenced from W3 Schools: https://www.w3schools.com/bootstrap/bootstrap_carousel.asp -->
  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
      <li data-target="#carouselIndicators" data-slide-to="2"></li>
      <li data-target="#carouselIndicators" data-slide-to="3"></li>
    </ol>
    <!-- Carousel inner with image divs -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/guitar9.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/guitar3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/guitar4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/guitar7.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>

  <!-- WELCOME NOTE -->
  <div class="container justify-content-center">
    <h6 id="welcome-note"></h6>
  </div>
  <br>

  <!-- ABOUT SECTION -->
  <hr class="container">
  <!-- Container div for about section -->
  <div class="container" id="about">
    <div class="row align-items-start">
      <div class="col-md-6 text-center">
        <h2>About Us</h2>
        <br>
        <p>Your one stop shop for premium handmade acoustic guitars.</p>
        <p>Based in the west of Ireland, we source and service some of the best handmade guitars from all over the world.</p>
        <p>Founded in 2021, we have supplied and serviced new and used premium hand-built acoustic guitars to all levels of musicians in Ireland and abroad. We supply beautifully crafted instruments to musicians and ensure that you will be getting a product that will last a lifetime which will increase in quality as the years go on.</p>
      </div>
      <div class="col-md-6 text-center">
        <img class="img-fluid" src="img/crafted.png" alt="">
      </div>
    </div>
  </div>
  <hr class="container">
  <br>

  <!-- PRODUCT LINE -->
  <h3 class="container text-center" id="shop">Product Line</h3>
  <div class="container">
    <div>
      <div class="col-md-12">
        <div class="row">

          <!-- Start of PHP connection, referenced from Webslesson: https://www.webslesson.info/2016/08/simple-php-mysql-shopping-cart.html -->
          <?php
          $query = "SELECT * FROM stock ORDER BY id ASC";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
          ?>

              <div class="col-md-4">
                <br>
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                    <img src="img/<?php echo $row["image"]; ?>" class="img-fluid" />
                    <br><br>
                    <h4 class="text-default"><?php echo $row["model"]; ?></h4>
                    <h4 class="text-info"><?php echo $row["brand"]; ?></h4>
                    <br>
                    <h4 class="text-danger">€<?php echo number_format($row["price"], 2); ?></h4>
                    <br>
                    <div class="d-grid">
                      <input type="text" name="quantity" value="1" class="form-control" />
                      <input type="hidden" name="hidden_model" value="<?php echo $row["model"]; ?>" />
                      <input type="hidden" name="hidden_brand" value="<?php echo $row["brand"]; ?>" />
                      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                      <input type="submit" name="add_to_cart" style="margin-top:10px;" class="btn btn-outline-dark btn-block" value="Add to Cart" />
                    </div>
                  </div>
                </form>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>

      <!-- Order details table -->
      <div style="clear:both"></div>
      <br>
      <h3>Order Details</h3>
      <div id="order-table">
        <table class="table" style="border-bottom:1px solid #333">
          <thead>
            <tr>
              <th scope="col">Item Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Total</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <?php
          if (!empty($_SESSION["shopping_cart"])) {
            $total = 0;
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
          ?>
              <tbody>
                <tr>
                  <td><?php echo $values["item_model"];
                      echo " - ";
                      echo $values["item_brand"]; ?></td>
                  <td><?php echo $values["item_quantity"]; ?></td>
                  <td>€ <?php echo $values["item_price"]; ?></td>
                  <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                  <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
              <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
              ?>
              <tr>
                <td colspan="2"></td>
                <td colspan="" align="left"><strong>Total Cost</strong></td>
                <td align="left">$ <?php echo number_format($total, 2); ?></td>
                <td></td>
              </tr>
            <?php
          }
            ?>
              </tbody>
        </table>
      </div>
      <!-- checkout button -->
      <button type="button" class="btn btn-primary" onclick="checkout()">Checkout</button>
    </div>
  </div><!-- END OF PRODUCT LINE -->
  <br>

  <!-- FOOTER -->
  <footer class="container-fluid bg-dark">
    <!-- top part of footer div with container class -->
    <div class="container" id="top-footer">
      <!-- social media icons -->
      <div id="social">
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-whatsapp"></i></a>
        <a href=""><i class="bi bi-github"></i></a>
        <a href=""><i class="bi bi-youtube"></i></a>
      </div>
      <!-- back to top of page icon -->
      <div class="" id="back-to-top">
        <a href="#"><i class="bi bi-caret-up-square-fill"></i></a>
      </div>
    </div>
    <!-- base part of footer, signature and copyright -->
    <div id="base-footer">
      <hr>
      <!-- copyright signature with container-fluid class -->
      <div class="container-fluid">
        <p>David Faulkner &copy 2021</p>
      </div>
    </div>
  </footer> <!-- END OF FOOTER -->


  <script src="functionality.js?2"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>