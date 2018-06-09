<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Registration' hidden='1' />
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
	<div class = "container">
	    <cms:if k_logged_in >
        <!-- what is an already logged-in member doing on this page? Send back to homepage. -->
        <cms:redirect k_site_link />
    </cms:if>
    
    <!-- are there any success messages to show from previous actions? -->
    <cms:set success_msg="<cms:get_flash 'success_msg' />" />
    <cms:if success_msg >
        <div class="notice">
            <cms:if success_msg='1' >
                Your account has been created successfully and we have sent you an email.<br />
                Please click the verification link within that mail to activate your account.
            <cms:else />
                Activation was successful! You can now log in!<br />
                <a href="<cms:login_link redirect=k_site_link />">Login</a>
            </cms:if>
        </div>
    <cms:else />
 
        <!-- now the real work -->
        <cms:set action="<cms:gpc 'act' method='get'/>" />
        
        <!-- is the visitor here by clicking the account-activation link we emailed? -->
        <cms:if action='activate' >
            <h1>Activate account</h1>
        
            <cms:process_activation />
            
            <cms:if k_success >
                 <cms:set_flash name='success_msg' value='2' />
                 <cms:redirect k_page_link />          
            <cms:else />
                <cms:show k_error />
            </cms:if>
        
        <cms:else />
        
            <!-- show the registration form -->
            <!--<style>
                form{ width:200px; }
            </style>-->
            <!--<hr>-->
            <br>
            <h1>Create an account</h1>

            <cms:form 
                masterpage=k_user_template 
                mode='create'
                enctype='multipart/form-data'
                method='post'
                anchor='0'
                >

                <cms:if k_success >        

                    <cms:check_spam email=frm_extended_user_email />            

                    <cms:db_persist_form 
                        _invalidate_cache='0'
                        k_page_name = "<cms:random_name />"
                        k_publish_date = '0000-00-00 00:00:00'
                    />                    

                    <cms:if k_success >
                        
                        <cms:send_mail from="<cms:php>echo K_EMAIL_FROM;</cms:php>" to=frm_extended_user_email subject='New Account Confirmation' debug='1'>
                            Please click the following link to activate your account:
                            <cms:activation_link   frm_extended_user_email   />

                            Thanks,
                            PEL Reviews
                        </cms:send_mail>                        
                                                
                        <cms:set_flash name='success_msg' value='1' />
                        <cms:redirect k_page_link />
                    </cms:if> 
                </cms:if>

                <cms:if k_error >
                    <font color='red'><cms:each k_error ><cms:show item /><br /></cms:each></font>
                </cms:if>        

                DisplayName:<br />
                <cms:input name='k_page_title' type='bound' /><br />
                
                Email Address:<br />
                <cms:input name='extended_user_email' type='bound' /><br />
                    
                Password:<br />
                <cms:input name='extended_user_password' type='bound' /><br />
                
                Repeat Password:<br />
                <cms:input name='extended_user_password_repeat' type='bound' /><br />       
               
                <input type="submit" name="submit" value="Create account"/>       

            </cms:form>
            
        </cms:if>
    </cms:if>    

    </div>
</body>
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