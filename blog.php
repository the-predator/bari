<?php
session_start();
 if(isset($_SESSION['login']))
      {
     $fname = $_SESSION['fname'];
     $lname = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - Village Bari</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<body>

    <div class="brand" style="letter-spacing: 100px; font-size: 100px;">BARI</div>
    <div class="address-bar">VILLAGE BARI | TEH. NICHAR | DISTT. KINNAUR | HIMACHAL PRADESH| 172115</div>

    <?php require_once "nav.php";?>

    <div class="container">

        <div class="row">
            <div class="box" style="background: rgba(255, 255, 255, 0.8);">
                <div class="col-lg-12">
                <h2 class="text-center"><stromg>Welcome:</strong>&nbsp; &nbsp;<?php echo $fname. " " .$lname ?>&nbsp;&nbsp;<a href="logout.php">Logout</a></h2>    
                <hr>
                    <h2 class="intro-text text-center"><strong>blogs</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Post Title
                        <br>
                        <small></small>
                    </h2>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Post Title
                        <br>
                        <small></small>
                    </h2>
                    <p></p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Post Title
                        <br>
                        <small></small>
                    </h2>
                    <p></p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
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

</body>
</html>
<?php
      }
else
      {
    header("location: login.php"); 
      }
?>
