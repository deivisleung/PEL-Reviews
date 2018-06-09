<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Login' hidden='1' />

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!--Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="../343CSS/footerarticle.css" rel="stylesheet">
	<title>Login</title>
	<link rel="icon" href="../assets/logo.png">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <a class="blog-header-logo" href="../index.php"><img src="../assets/logo.png" alt="logo" class = "img-responsive"/></a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="../html/products/electronics.php">Electronics</a>
              <a class="dropdown-item" href="../html/products/books.php">Books</a>
              <a class="dropdown-item" href="../html/products/furniture.php">Furniture</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entertainment</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="../html/entertainment/movies.php">Movies</a>
              <a class="dropdown-item" href="../html/entertainment/videogames.php">Videos Games</a>
              <a class="dropdown-item" href="../html/entertainment/tvshows.php">Tv Shows</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="../html/location/unitedstates.php">United States</a>
              <a class="dropdown-item" href="../html/location/mexico.php">Mexico</a>
              <a class="dropdown-item" href="../html/location/canada.php">Canada</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" id = "searchBox" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
            <form action="../users/login.php">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
 
      </div>
    </nav>
</div>

<body>
	<div class = "text-center">
<!-- now the real work -->
    <cms:if k_logged_in >

        <!-- this 'login' template also handles 'logout' requests. Check if this is so -->
        <cms:set action="<cms:gpc 'act' method='get'/>" />
    
        <cms:if action='logout' >
            <cms:process_logout />
        <cms:else />  
            <!-- what is an already logged-in member doing on the login page? Send back to homepage. -->
            <cms:redirect k_site_link />
        </cms:if>
    
    <cms:else />
        
        <!-- show the login form -->
        <h1>Login</h1>
        
        <cms:form method='post' anchor='0'>
            <cms:if k_success >
                <!-- 
                    The 'process_login' tag below expects fields named 
                    'k_user_name', 'k_user_pwd' and (optionally) 'k_user_remember', 'k_cookie_test'
                    in the form
                -->
                <cms:process_login />
                
            </cms:if>
            
            <cms:if k_error >
                <h3><font color='red'><cms:show k_error /></font></h3>
            </cms:if>
            
            
            E-mail: <br/>
            <cms:input type='text' name='k_user_name' /> <br/>
            
            Password: <br />
            <cms:input type='password' name='k_user_pwd' /> <br/>
            
            <!-- if 'remember me' function is not required, the following checkbox can be omitted -->
            <cms:input type='checkbox' name='k_user_remember' opt_values='Remember me=1' /> <br/>
            
            <input type="hidden" name="k_cookie_test" value="1" />
            
            <input type="submit" value="Login" name="submit"/>
        </cms:form>
        
        <!-- optionally display links for 'Create account' and 'Lost password' -->
        <br />
        <cms:if k_user_registration_template >
            Not signed up yet? <a href="register.php" />Create an account here.</a> <br>
        </cms:if>
        <cms:if k_user_lost_password_template >
        </cms:if>
    </cms:if>
</body>
</div>

     <!--Footer-->

  <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 mx-auto">
          <ul class="list-unstyled">
            <li>
              <a href="../html/footer/contact.php">Contact</a>
            </li>
            <li>
              <a href="../html/footer/about.php">About</a>
            </li>
            <li>
              <a href="../html/footer/privacy.php">Privacy</a>
            </li>
            <li>
              <a href="../html/footer/termsofuse.php">Terms of Use</a>
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