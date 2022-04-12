<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/registerform.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
         $("#register").click(function(){
            fname = $("#fname").val();
            lname = $("#lname").val();
            email = $("#email").val();
            password = $("#password").val();
            cpassword = $("#cpassword").val();
               
                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password + "&cpassword=" + cpassword,
                    success: function(html){
                        if (html=='true') {
                            $("#alert").html('<div class="alert alert-success stock"><strong>Account Processed</strong></div>');
                            window.location.href = "index.php";
                        }
                        else if(html=='false') {
                            $("#alert").html('<div class="alert alert-danger stock"><strong>Accounts Exists</strong></div>');
                        }
                        else if(html=='fname') {
                            $("#alert").html('<div class="alert alert-danger stock"><strong>Name is short</strong></div>');
                        }
                        else if(html=='lname') {
                            $("#alert").html('<div class="alert-danger stock"><strong>Last Name required</strong></div>');
                        }
                        else if(html=='eshort') {
                            $("#alert").html('<div class="alert alert-danger stock"><strong>Email is short</strong></div>');
                        }
                        else if(html=='eformat') {
                            $("#alert").html('<div class="alert alert-danger stock"><strong>Email format is not correct</strong></div>');
                        }
                        else if(html=='pshort') {
                            $("#alert").html('<div class="alert alert-danger stock"><strong>Password is too short</strong></div>');
                        }
                        else if(html=='mismatch') {
                            $("#alert").html('<div class="alert alert-danger stock"><strong>Passwords do not match try again</strong></div>');
                        }
                        else{
                            $("#alert").html('<div class="alert alert-danger stock"><strong>Error Precessing</strong></div>');
                        }
                    },
                    beforeSend: function () {
                        $("#alert").html('<div class="alert alert-success stock"><strong>Processing</strong></div>');
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
        <h2 id="heading"><strong>Registration Form</strong></h2>
        <div id="alert"></div>
         <form>
            <div class="col-25"><label for="fname">Firstname :</label>  </div><div class="col-75"><input type="text" name="fname" id="fname" placeholder="First Name..."></div>
            <div class="col-25"><label for="lname">Lastname :</label> </div><div class="col-75"> <input type="text" name="lname" id="lname" placeholder="Last Name..."></div>
            <div class="col-25"><label for="email">Email :</label> </div><div class="col-75"><input type="email" name="email" id="email" placeholder="Email..."></div>
            <div class="col-25"><label for="password">Password :</label></div><div class="col-75">  <input type="password" name="password" id="password" placeholder="Password..."></div>
            <div class="col-25"> <label for="cpassword">Confirm Password :</label></div><div class="col-75"><input type="text" name="cpassword" id="cpassword" placeholder="Re enter the Password..." ></div>
           <div class="submit"><input type="submit" name="register" id="register" value="Register"></div>
         </form> 
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
