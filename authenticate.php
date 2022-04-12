<?php
session_start();

$mysqli = new mysqli('localhost','root','ViKashish','village');
 if ($mysqli->connect_error) {
 	die('error:' .$mysqli->connect_error);
 }
 $email = mysqli_real_escape_string($mysqli, $_POST['email']);
 $password = mysqli_real_escape_string($mysqli, $_POST['password']);
 
 if(strlen($email)<=4)
 {
 	echo 'eshort';
 }
 elseif(!(filter_var($email,FILTER_VALIDATE_EMAIL)))
 {
 	echo 'eformat';
 }
 elseif(strlen($password)<4)
 {
 	echo 'pshort';
 }
 else{
 	
     $result = $mysqli->query("SELECT * FROM members WHERE email='$email'");
     $num_row = mysqli_num_rows($result);
     $row = mysqli_fetch_array($result);
     if($num_row == 1){
             if (password_verify($password, $row['password']))
             {
                $_SESSION['login'] = $row['id'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                echo 'true';
             } 
             else{
                echo 'false';
              }         
      }         
    else{
       echo 'false';
     }
 }
?>