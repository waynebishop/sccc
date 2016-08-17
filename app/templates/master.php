<!DOCTYPE html>
<html lang="en">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $title ?> </title>
    <meta name="description" content="<?= $desc ?>">

  	<!-- Latest compiled and minified CSS 20-Jul-2016-->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  	<link rel="stylesheet" href="css/styles.css">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  </head>
  <body>

  	<!-- Header background image -->

    <div class="container">
          <div class="jumbotron">
          <h1>Spin City Cricket Club</h1>
           <p>The spirit of cricket in the Capital <i class="fa fa-flag" aria-hidden="true"></i></p>
          </div>
    </div>

    <div class="container">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          
          <ul class="nav navbar-nav">
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=home">Seniors</a></li>
            <li><a href="index.php?page=home">Juniors</a></li>
            <li><a href="index.php?page=home">Sponsors</a></li>
            <li><a href="index.php?page=home">Contact</a></li>
            <li><a href="index.php?page=home">News</a></li>
          </ul>

          <ul class="nav nav-pills navbar-right">

            <li role="presentation"><a href="index.php?page=blogHome"><i class="fa fa-bullhorn" aria-hidden="true"></i> Blog</a></li>


            <!-- Display if NOT logged in : Login and Sign Up -->
            <?php if( !isset($_SESSION['id']) ): ?>

              <li role="presentation"><a href="index.php?page=blogLogin"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>

              <li role="presentation"><a href="index.php?page=blogRegister"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign up</a></li>            
                        
            <?php endif ?> 

            <!-- Display if IS logged in : Log Out and My Account -->
            <?php if( isset($_SESSION['id']) ): ?>

              <li role="presentation"><a href="index.php?page=blogLogout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>

              <li role="presentation"><a href="index.php?page=blogMyAccount"><i class="fa fa-user" aria-hidden="true"></i> My Account</a></li>
                        
            <?php endif ?>   
           
          </ul>

        </div>
      </nav>
    </div>

    
    <!-- Content goes here -->

    <?php echo $this->section('content') ?>

    
    <!-- Footer -->
    <div class="container">

      <footer>

          <nav class="navbar navbar-inverse">
            <div class="container-fluid">

              <ul class="nav navbar-nav">
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=home">Seniors</a></li>
                <li><a href="index.php?page=home">Juniors</a></li>
                <li><a href="index.php?page=home">Sponsors</a></li>
                <li><a href="index.php?page=home">Contact</a></li>
                <li><a href="index.php?page=home">News</a></li>
                <li><a href="index.php?page=blogHome">Blog</a></li> 
              </ul>

              <ul class="nav navbar-nav navbar-right">     
                <li><a href="#"> Copyright &copy; BiSH Design 2016</a></li>
              </ul>  

            </div>
          </nav>

      </footer>

    </div>

    <!-- Scripts -->

    <!-- jQuery CDN from Google as at 20-Jul-2016 -->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript 20-Jul-2016-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
</html>


