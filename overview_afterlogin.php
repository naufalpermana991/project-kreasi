<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Overview</title>
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="styles/styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--navbar-->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="Logo Royal Hotel" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3">
              <a class="nav-link" href="index_afterlogin.php">Home</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="restaurant_afterlogin.php">Restaurant</a>
            </li>
            <li class="nav-item mr-3 active">
              <a class="nav-link" href="overview_afterlogin.php">Overview</a>
            </li>
            <li class="nav-item dropdown ">
              <a
                class="nav-link dropdown-toggle user"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Welcome, <span style="font-weight: 500;"><?php echo $_SESSION["user"]["name"]?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                <a class="dropdown-item" href="logout.php"  style="color: red;">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--akhir navbar-->

    <!--jumbotron-->
    <div class="jumbotron jumbotron-fluid overview">
      <div class="container">
        <div class="header-text" style="margin-top: 210px;">
          <h1>Overview</h1>
        </div>
      </div>
    </div>
    <!--akhir jumbotron-->

    <!--foto-->
    <div class="container">
      <h6 class="mt-5 ml-5">Photo</h6>
      <div class="grid-container">
        <div class="grid-item item-1"></div>
        <div class="grid-item item-2"></div>
        <div class="grid-item item-3"></div>
        <div class="grid-item item-4"></div>
      </div>
    </div>
    <!--akhir foto-->
    <!--footer-->
    <footer>
      <div class="footer" style="background-color: #222222;">
        <div class="container p-5 mt-5">
          <div class="row">
            <div class="col-sm-2">
              <h4 class="mb-5">Information</h4>
              <ul>
                <li class="footer-item mt-3">
                  <a class="footer-link" href="index_afterlogin.php">Home</a>
                </li>
                <li class="footer-item mt-3">
                  <a class="footer-link" href="restaurant_afterlogin.php">Restaurant</a>
                </li>
                <li class="footer-item mt-3">
                  <a class="footer-link" href="overview_afterlogin.php">Overview</a>
                </li>
              </ul>
            </div>
            <div class="col-sm">
              <h4 class="mb-5">Customer Service</h4>
              <ul>
                <li class="footer-item mt-3">
                  e-mail : customerservice@royalhotel.com
                </li>
                <li class="footer-item mt-3">phone : (+52)-32392390</li>
              </ul>
            </div>
            <div class="col-sm-3 mt-4">
              <ul>
                <li class="footer-item mt-3">
                  <img src="images/logo.png" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--akhir footer-->
    <script src="libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
