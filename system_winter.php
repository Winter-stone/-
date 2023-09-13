<!-- <?php include 'connect_db.php';

session_start();

if(!isset($_SESSION['email'])){
    $_SESSION['msg'] = "You have to log in first";
    header('location:login.php');

}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header('location:login.php');
}
?> -->