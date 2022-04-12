<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

    <title>BARI - Abode Of Clouds & Rain</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<body>

    <div class="brand" style="letter-spacing: 100px; font-size: 100px;">BARI</div>
    <div class="address-bar">VILLAGE BARI | TEH. NICHAR | DISTT. KINNAUR | HIMACHAL PRADESH| 172115</div>
 <?php
   if(isset($_GET['logout']))
        {
            if($_GET['logout'] == 'true')
            {
 ?>   
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>You have succesfully logged out of the systerm</strong>
    </div>

   <?php 
           }
        }
  ?>
    <?php require_once "nav.php";?>

    <div class="container">

        <div class="row">
            <div class="box" style="background: rgba(255, 255, 255, 0.8);">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name">THE VILLAGE TRAVEL BLOG WEBSITE</span>
                    </h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>BY <strong>VIKAS NEGI</strong></small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box" style="background: rgba(255, 255, 255, 0.8);">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">BARI <strong>Abode of Clouds And Rain</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Welcome to the best travel blog website of village Bari. Register for free to get access to various travel blogs by the people who witnessed the immense beauty of the village by their own eyes.</p>
                    <p>A huge thanks to <a href="https://www.instagram.com/the_whitewalker/">Dr Siddhant Negi</a> for allowing me to use these beautiful photos that really made this website to come itn life </p>
                </div>
            </div>
        </div>
</div><br>
    <!-- /.container -->

    <footer style="background: rgba(255, 255, 255, 0.8);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Vikas Negi</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>
