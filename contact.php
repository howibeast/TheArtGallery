
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>THE Art Gallery | Contact Us</title>

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
                        <li class="active"><a href="contact.php">Contact</a></li>
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
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 0</a></li>     
                    </ul>
                </div>
            </div>
            </nav>
        </div>
    </div>

     <!-- main section 
    ====================================================-->
    <section class="form pimg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="well">
                        <div class="form-group">
                            <label for="header"><h3>Contact Us <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></h3></label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="message" class="col-form-label">Message</label>
                                <textarea class="form-control" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                    </form>
                </div>
            </div>
        </div>
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
