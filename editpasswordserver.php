<?php


$username = "";
$password = "";


$db = mysqli_connect("localhost","root","","authentication");
 

if(isset($_POST['editpass_btn'])) {
$username = $_POST['username'];
$password = $_POST['password'];


    $update_profile ="UPDATE users SET password='$password' WHERE username='$username'";
    
    $run_profile = mysqli_query($db,$update_profile);
    if($run_profile){
        echo "<script>alert('Silahkan Login Untuk Melanjutkan')</script>";
        echo "<script>window.open('index.php','_self')</script>";
     }
    }
?>

    