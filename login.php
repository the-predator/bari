<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/loginform.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
         $("#login").click(function(){
            email = $("#email").val();
            password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "authenticate.php",
                    data: "email=" + email + "&password=" + password,
                    success: function(html){
                        if (html=='true') {
                            $("#error").html('<div class="alert-success"><strong>Authenticated</strong></div>');
                            window.location.href = "blog.php";
                        }
                        else if(html=='false') {
                            $("#error").html('<div class="alert alert-danger stock"><strong>Authentication Failure</strong></div>');
                        }
                        else if(html=='eshort') {
                            $("#error").html('<div class="alert alert-danger stock"><strong>Email is short</strong></div>');
                        }
                        else if(html=='eformat') {
                            $("#error").html('<div class="alert alert-danger stock"><strong>Email format is not correct</strong></div>');
                        }
                        else if(html=='pshort') {
                            $("#error").html('<div class="alert alert-danger stock"><strong>Password is too short</strong></div>');
                        }
                        else{
                            $("#error").html('<div class="alert alert-danger stock"><strong>Error Precessing</strong></div>');
                        }
                    },
                    beforeSend: function () {
                        $("#error").html('<div class="alert alert-success stock"><strong>Processing</strong></div>');
                    }
                });
            return false;
         });
        });
    </script>
</head>

<body>

    <div class="brand" style="letter-spacing: 100px; font-size: 100px;">BARI</div>
    <div class="address-bar">VILLAGE BARI | TEH. NICHAR | DISTT. KINNAUR | HIMACHAL PRADESH| 172115</div>

    <?php require_once "nav.php";?>

    <div class="container form">
        <div class="alert alert-danger stock"><a class="close" data-dismiss="alert" aria-label="close">&times;</a>You must be logged in to view the blog</div>
        <h2 id="heading"><strong>Login</strong></h2>
        <div id="error"></div>
         <form>
            <div class="col-25"><label for="email">Email :</label> </div><div class="col-75"><input type="email" name="email" id="email" placeholder="Email..."></div>
            <div class="col-25"><label for="password">Password :</label></div><div class="col-75">  <input type="password" name="password" id="password" placeholder="Password..."></div>
            <div class="col-25"><input type="submit" name="login" id="login" value="Login"></div>
         </form> 
         <div class="col-75"><input type="submit" name="regsiter" id="register" value="Not Registered? Click here" onclick="window.location.href='register.php'"></div>
     </div>
    </div>
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
    
    <script src="js/bootstrap.js"></script>

</body>

</html>
