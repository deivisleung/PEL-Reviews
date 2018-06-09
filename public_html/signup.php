
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="../../assets/logo.png">

  <title>P.E.L Reviews</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="../343CSS/signup.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <a class="blog-header-logo" href="../../index.php"><img src="../assets/logo.png" alt="logo" class = "img-responsive"/></a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="products/electronics.php">Electronics</a>
              <a class="dropdown-item" href="products/books.php">Books</a>
              <a class="dropdown-item" href="products/furniture.php">Furniture</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entertainment</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="entertainment/movies.php">Movies</a>
              <a class="dropdown-item" href="entertainment/videogames.php">Videos Games</a>
              <a class="dropdown-item" href="entertainment/tvshows.php">Tv Shows</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="location/unitedstates.php">United States</a>
              <a class="dropdown-item" href="location/mexico.php">Mexico</a>
              <a class="dropdown-item" href="location/canada.php">Canada</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <form action="html/login.php">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        </form>
      </div>
    </nav>


  </div>

  <section class="main-container">
    <div class = "main-wrapper">
      <h2>Signup</h2>
      <form class = "signup-form" action = "logincode/signup.inc.php" method = "POST">
        <input type="text" name = "first" placeholder="Firstname">
        <input type="text" name = "last" placeholder="Lastname">
        <input type="text" name = "email" placeholder="E-mail">
        <input type="text" name = "uid" placeholder="Username">
        <input type="password" name = "pwd" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name = "submit">Sign up</button>
      </form>
  </section>
  <!-- /.container -->


  <!--Footer-->
  <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 mx-auto">
          <ul class="list-unstyled">
            <li>
              <a href="footer/contact.php">Contact</a>
            </li>
            <li>
              <a href="footer/about.php">About</a>
            </li>
            <li>
              <a href="footer/privacy.php">Privacy</a>
            </li>
            <li>
              <a href="footer/termsofuse.php">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-copyright py-3 text-center">
      © 2018 Copyright:
      <a href="index.php"> PELReviews.com </a>
    </div>
  </footer>
  <!--/.Footer-->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
