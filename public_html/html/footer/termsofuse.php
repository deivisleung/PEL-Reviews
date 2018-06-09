<?php 
session_start();
require_once( '../../couch/cms.php' ); ?>
<cms:template title='termsofuse' hidden='1'>
    <cms:editable name='termsofuse_content' type='richtext'/>
    
    <cms:editable name='blog_image'
        crop ='1'
        width = '610'
        height = '150'
        type = 'image'
    />
</cms:template>
<!doctype html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="icon" href="../../assets/logo.png">

   <title>Terms of Use</title>

   <!-- Bootstrap core CSS -->
   <link href="../../css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
   <link href="../../343CSS/article.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
   <div class="container">
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <a class="blog-header-logo" href="../../index.php"><img src="../../assets/logo.png" alt="logo" class = "img-responsive"/></a>
       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
             <div class="dropdown-menu" aria-labelledby="dropdown01">
               <a class="dropdown-item" href="../products/electronics.php">Electronics</a>
               <a class="dropdown-item" href="../products/books.php">Books</a>
               <a class="dropdown-item" href="../products/furniture.php">Furniture</a>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entertainment</a>
             <div class="dropdown-menu" aria-labelledby="dropdown01">
               <a class="dropdown-item" href="../entertainment/movies.php">Movies</a>
               <a class="dropdown-item" href="../entertainment/videogames.php">Videos Games</a>
               <a class="dropdown-item" href="../entertainment/tvshows.php">Tv Shows</a>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</a>
             <div class="dropdown-menu" aria-labelledby="dropdown01">
               <a class="dropdown-item" href="../location/unitedstates.php">United States</a>
               <a class="dropdown-item" href="../location/mexico.php">Mexico</a>
               <a class="dropdown-item" href="../location/canada.php">Canada</a>
             </div>
           </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" id="searchBox" type="text" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>          
            <form action="../../users/login.php">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
       </div>
     </nav>
    </div>


   <main role="main" class="container">
     <div class="row">
       <div class="col-md-8 blog-main">
         <div class="blog-post">
           <h2 class="blog-post-title">Terms of Use</h2>
           <p class="blog-post-meta">Last edited: <span id="datetime"></span>
             <script>
               var dt = new Date();
               document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
             </script>
           </p>
           <hr>

           <h2><font size = "2">You are free to:
            <p></p>Read and Print our articles and other media free of charge.
            <p></p>Share and Reuse our articles and other media under free and open licenses.
            <p></p>Contribute To and Edit our various sites or Projects.</font>
            </h2>
           <!--<hr>-->
           <!--<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>-->
           <!--<h3></h3>-->
           <!--<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
           <!--<pre><code>Example code block</code></pre>-->
           <!--<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>-->

           <!--<h2>Reviews</h2>-->
           <!--<hr>-->
           <!--<div>-->
           <!--  <p style="float: left;"><img src="../../assets/eva.jpg" alt="Avatar" class="avatar"></p>-->
           <!--  <h3>Username</h3>-->
           <!--  <span class="fa fa-star checked"></span>-->
           <!--  <span class="fa fa-star checked"></span>-->
           <!--  <span class="fa fa-star checked"></span>-->
           <!--  <span class="fa fa-star"></span>-->
           <!--  <span class="fa fa-star"></span>-->
           <!--</div>-->
           <!--<br>-->
           <div class="container">

           <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
         </div>
           <!--<br>-->
           <!--<nav class="blog-pagination">-->
           <!--  <a class="btn btn-outline-primary" href="#">Add Review</a>-->
           <!--</nav>-->
         </div><!-- /.blog-post -->


         <!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
         <!--  <ol class="carousel-indicators">-->
         <!--    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
         <!--    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
         <!--    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
         <!--  </ol>-->
         <!--  <div class="carousel-inner">-->
         <!--    <div class="carousel-item active">-->
         <!--      <img class="d-block w-100" src="../../assets/acdc.jpg" alt="First slide">-->
         <!--    </div>-->
         <!--    <div class="carousel-item">-->
         <!--      <img class="d-block w-100" src="../../assets/acdc_black.jpg" alt="Second slide">-->
         <!--    </div>-->
         <!--    <div class="carousel-item">-->
         <!--      <img class="d-block w-100" src="../../assets/acdc_canon.png" alt="Third slide">-->
         <!--    </div>-->
         <!--  </div>-->
         <!--  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
         <!--    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
         <!--    <span class="sr-only">Previous</span>-->
         <!--  </a>-->
         <!--  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
         <!--    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
         <!--    <span class="sr-only">Next</span>-->
         <!--  </a>-->
         <!--</div>-->
         <!-- <div class="blog-post">
           <h2 class="blog-post-title">New feature</h2>
           <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

           <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
           <ul>
             <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
             <li>Donec id elit non mi porta gravida at eget metus.</li>
             <li>Nulla vitae elit libero, a pharetra augue.</li>
           </ul>
           <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
           <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
         </div> -->

         <!-- <nav class="blog-pagination">
           <a class="btn btn-outline-primary" href="#">Older</a>
           <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
         </nav> -->

       </div>

       <aside class="col-md-4 blog-sidebar">
         <div class="p-3">
             <h4 class="font-italic">Advertisement</h4>
           <ol class="list-unstyled mb-0">
            <a href="https://www.amazon.com/">
            <img src="/assets/amazon.png">
            </a>
            <a href="https://online.pizzahut.co.in/">
            <img src="/assets/pizzahut.png">
            </a>
            <a href="https://www.mcdonalds.com/">
            <img src="/assets/mcdonalds.gif" width="300" height="280">
            </a>
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
       </aside><!-- /.blog-sidebar -->

     </div><!-- /.row -->

   </main><!-- /.container -->

  <!--Footer-->
  <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 mx-auto">
          <ul class="list-unstyled">
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li>
              <a href="about.php">About</a>
            </li>
            <li>
              <a href="privacy.php">Privacy</a>
            </li>
            <li>
              <a href="termsofuse.php">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-copyright py-3 text-center">
      © 2018 Copyright:
      <a href="../../index.php"> PELReviews.com </a>
    </div>
  </footer>

   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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