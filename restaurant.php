<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sushi Hanii Restaurant</title>
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item mr-3 active">
              <a class="nav-link" href="restaurant.php">Restaurant</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="overview.php">Overview</a>
            </li>
            <button
              type="button"
              class="btn btn-primary ml-3 px-4 tombol"
              value="Login"
              onclick="login()"
            >
              Login
            </button>
            <script>
              function login() {
                location.href = "login.php";
              }
            </script>
          </ul>
        </div>
      </nav>
    </div>
    <!--akhir navbar-->

    <!--jumbotron-->
    <div class="jumbotron jumbotron-fluid restaurant">
      <div class="container">
        <div class="header-text">
          <h5>Discount 5% Off</h5>
          <h1 class="mt-4">Single Bed Three <br />Booking</h1>
          <button type="button" class="btn btn-primary mr-2 mt-5 px-4 tombol">
            View Offer
          </button>
        </div>
      </div>
    </div>
    <!--akhir jumbotron-->

    <!--card baris 1-->
    <div class="container">
      <h6 class="mt-5">Special Dishes</h6>
      <div class="row row-cols-1 row-cols-md-3 mt-4">
        <div class="col mb-4">
          <div class="card">
            <img src="images/food-1.png " class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Original Sushi</h5>
              <p class="card-text">
                Salmon Fish and Rice wrapped nori
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/food-3.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Deluxe Sushi</h5>
              <p class="card-text">
                8pcs of deluxe fish sushi
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/food-2.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Vegetable Sushi</h5>
              <p class="card-text">
                Delicious vegetable sushi
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--akhir card baris 1 -->

    <!--card baris 2-->
    <div class="container">
      <h6 class="mt-5">Don't Miss The Promo</h6>
      <div class="row row-cols-1 row-cols-md-3 mt-4">
        <div class="col mb-4">
          <div class="card">
            <img src="images/egg.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Free Breakfast Non A/C Room</h5>
              <p class="card-text">Promo Expired until May 2nd 2020t</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/sushi.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Buy 2 get 1</h5>
              <p class="card-text">Buy 2 Sushi get free sushi</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="images/webinar.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Discount 15%</h5>
              <p class="card-text">Special promo event</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--akhir card baris 2 -->

    <!--footer-->
    <footer>
      <div class="footer" style="background-color: #222222;">
        <div class="container p-5 mt-5">
          <div class="row">
            <div class="col-sm-2">
              <h4 class="mb-5">Information</h4>
              <ul>
                <li class="footer-item mt-3">
                  <a class="footer-link" href="index.php">Home</a>
                </li>
                <li class="footer-item mt-3">
                  <a class="footer-link" href="restaurant.php">Restaurant</a>
                </li>
                <li class="footer-item mt-3">
                  <a class="footer-link" href="overview.php">Overview</a>
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
