<?php

$namauser = "";
$emailuser= "";

$errors = array();

$db = mysqli_connect("localhost","root","","authentication");

//Registers users

if(isset($_POST['forget_btn'])) {
$namauser = mysqli_real_escape_string($db,$_POST['namauser']);
$emailuser = mysqli_real_escape_string($db,$_POST['emailuser']);


//Form validation

if(empty($namauser)) {
    array_push($errors,"Nama is Required");
}
if(empty($emailuser)){
    array_push($errors,"emailusers is Required");
}
    
if(count($errors)==0){
    $sql = "INSERT INTO forget (namauser,emailuser) VALUES ('$namauser','$emailuser')";
    $run_product = mysqli_query($db,$sql);
     if($run_product){
        echo "<script>alert('Report has been submitted sucessfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
     }
    }
}
?>