<?php include('connect_db.php') ?>

<?php

session_start();

$email = "";
$password="";
$errors = array();

$db=$con or die("Connection to database failed")

if (isset($_POST['login-user'])) {
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if(empty($email)){
       array_push($errors, "Email is Required") 
    }

    elseif(empty($password)){
        array_push($errors, "Password is Required")
    }

    elseif(empty($email && $password)){
        array_push($errors, "Email and Password Required")
    }

    if(count($errors) == 0){
        $sql= "SELECT * FROM client WHERE email='$email' AND password ='$password'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($results);

        if(mysqli_num_rows($results)==1){
            $_SESSION['email']=$email;
            $_SESSION['email']= "You are logged in";
            echo"<script>alert('You have successfully logged in'); </script>";
            echo"<script> location='home_winter.php';</script>";
        }
    }
}

?>