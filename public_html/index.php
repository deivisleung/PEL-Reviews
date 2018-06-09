<?php 
session_start();
require_once( 'couch/cms.php' ); ?>
<cms:template title='Homepage' />
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="assets/logo.png">

  <title>P.E.L Reviews</title>

   <!--Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

   <!--Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="343CSS/blog.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <a class="blog-header-logo" href="index.php"><img src="assets/logo.png" alt="logo" class = "img-responsive"/></a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="html/products/electronics.php">Electronics</a>
              <a class="dropdown-item" href="html/products/books.php">Books</a>
              <a class="dropdown-item" href="html/products/furniture.php">Furniture</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entertainment</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="html/entertainment/movies.php">Movies</a>
              <a class="dropdown-item" href="html/entertainment/videogames.php">Videos Games</a>
              <a class="dropdown-item" href="html/entertainment/tvshows.php">Tv Shows</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="html/location/unitedstates.php">United States</a>
              <a class="dropdown-item" href="html/location/mexico.php">Mexico</a>
              <a class="dropdown-item" href="html/location/canada.php">Canada</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" id = "searchBox" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <?php
            if(isset($_SESSION['u_id'])){
                echo'<form action="logincode/logout.inc.php" method ="POST">
                  <button class="btn btn-outline-success my-2 my-sm-0" name="submit">Logout</button>
                </form>';
            }else{
                echo'<form action="users/login.php">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                </form>';
            }
        ?>
      </div>
    </nav>
    <div class="jumbotron ">
      <div class="container">
        <div class="row">
           <div class="col-md-6 px-0"> 
          <div class="col-sm-6">
            <h1 class="display-4 font-italic">AC/DC: Let There Be Rock</h1>
            <p class="lead my-3">Earlier this year, AC/DC’s “Live at River Plate” DVD captured the fiftysomething Antipodean heavy-rockers, bringing the noise in Argentina last year, in one of South America’s largest stadia. </p>
            <p class="lead mb-0"><a href="/html/entertainment/movies.php?p=41" class="text-white font-weight-bold">Visit page</a></p>
            <br />
          </div>
           </div> 
        </div>
      </div>
    </div>
  </div>

  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Popular Articles
          </h3>
        
        <cms:editable name='post1' type='richtext'>
        <div class="blog-post">

        </div>
        </cms:editable>
         <!--/.blog-post -->

        <cms:editable name='post2' type='richtext'>
        <div class="blog-post">
 
        </div>
        </cms:editable>
         <!--/.blog-post -->

      </div>
       <!--/.blog-main -->

      <aside class="col-md-4 blog-sidebar">

        <div class="p-3">
          <h4 class="font-italic">Advertisement</h4>
          <?php
            if(isset($_SESSION['u_id'])){
                echo "You are Logded in";
            }
          ?>
          <ol class="list-unstyled mb-0">
            <!--<li><a href="#">March 2014</a></li>-->
            <!--<li><a href="#">February 2014</a></li>-->
            <!--<li><a href="#">January 2014</a></li>-->
            <!--<li><a href="#">December 2013</a></li>-->
            <!--<li><a href="#">November 2013</a></li>-->
            <!--<li><a href="#">October 2013</a></li>-->
            <!--<li><a href="#">September 2013</a></li>-->
            <!--<li><a href="#">August 2013</a></li>-->
            <!--<li><a href="#">July 2013</a></li>-->
            <!--<li><a href="#">June 2013</a></li>-->
            <!--<li><a href="#">May 2013</a></li>-->
            <!--<li><a href="#">April 2013</a></li>-->
            <a href="https://www.amazon.com/">
            <img src="/assets/amazon.png">
            </a>
            <a href="https://www.mcdonalds.com/us/en-us.html">
            <img src="/assets/mcdonalds.gif" width="300" height="280">
            </a>
            <a href="https://www.spotify.com/">
            <img src="/assets/spotify.png" width="300" height="280">
            </a>
            <a href="https://online.pizzahut.co.in/">
            <img src="/assets/pizzahut.png" width="300" height="280">
            </a>
            <!--<a href="https://www.spotify.com/">-->
            <!--<img src="/assets/spotify.png">-->
            <!--</a>-->
            <!--<a href="https://www.youtube.com/">-->
            <!--<img src="/assets/youtube.png">-->
            <!--</a>-->
          </ol>
        </div>

        <!--<div class="p-3">-->
        <!--  <h4 class="font-italic">Elsewhere</h4>-->
        <!--  <ol class="list-unstyled">-->
        <!--    <li><a href="#">GitHub</a></li>-->
        <!--    <li><a href="#">Twitter</a></li>-->
        <!--    <li><a href="#">Facebook</a></li>-->
        <!--  </ol>-->
        <!--</div>-->
      </aside>
       <!--/.blog-sidebar -->

    </div>
     <!--/.row -->

  </main>
   <!--/.container -->


 <!--Footer-->
  <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 mx-auto">
          <ul class="list-unstyled">
            <li>
              <a href="html/footer/contact.php">Contact</a>
            </li>
            <li>
              <a href="html/footer/about.php">About</a>
            </li>
            <li>
              <a href="html/footer/privacy.php">Privacy</a>
            </li>
            <li>
              <a href="html/footer/termsofuse.php">Terms of Use</a>
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

   <!--Bootstrap core JavaScript-->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--SEARCH ENGINE TEST00-->
  <script type="text/javascript">
   /* Create a configuration object */
   var ss360Config = {
      /* Your site id */
      siteId: 'pelreviews.000webhostapp.com',
      /* A CSS selector that points to your search  box */
      searchBoxSelector: '#searchBox',      
   };
</script>
<script src="https://sitesearch360.com/cdn/sitesearch360-v10.min.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>
