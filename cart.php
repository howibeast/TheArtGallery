
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>THE Art Gallery | Cart</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/styles.css" rel="stylesheet">
  </head>

<!-- NAVBAR
================================================== -->
  <body>
      <div class="navbar-wrapper">
      <div class="container">
            <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">The art gallery</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                      <li><a href="index.php">Home</a></li>
                      <li class="dropdown">
                        <a href="shop.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.php">All art</a></li>
                            <li><a href="shop.php">Paintings</a></li>
                            <li><a href="shop.php">Drawings</a></li>
                            <li><a href="shop.php">Sculptures</a></li>
                            <li><a href="shop.php">Junk art</a></li>
                        </ul>
                        </li>
                      <li><a href="application.php">Artist Application</a></li>
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
                    <form action="#" class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="login.php">Sign in</a></li>
                      <li class="active"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 0</a></li>     
                  </ul>
                </div>
            </div>
            </nav>
    
        </div>
      </div> 
        <div class="jumbotron">
            <div class="pimg">

            </div>
        </div> 

     <!-- main section 
    ====================================================-->
    <section class="main-section">
        <div class="container">
            <div class="row main-row">
                <h2 class="section-head"><span class="head">Shopping Cart</span></h2>
                <div class="col-sm-6 col-md-9">
                <div class="section section-items">
                    
                </div>
                <!-- This is the navigation part -->
                <div class="navigation col-sm-6 col-md-3">

                </div>
              </div>  <!-- /container -->
            </div> <!-- main-row -->
        </div>  <!-- /container -->
    </section>
    
    <!-- FOOTER -->
    <footer id="footer">
      <div class="container">
        <p class="pull-right"><a href="#navbar">Back to top</a></p>
        <p>&copy; 2017 The Art Gallery</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
