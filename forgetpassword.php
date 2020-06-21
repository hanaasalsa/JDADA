<?php 
include('forgetpasswordserver.php');
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"authentication");
?>

<!DOCTYPE html>
<html>
<head>
    <style>
    body{
       overflow: hidden; 
    }
    </style>
    <title>Forget Password</title>
    <link rel="stylesheet" type="text/css" href="forgetpassword.css">
</head>
<body>
    <nav style="overflow: hidden">
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Sell</a></li>
            <li><a href="shopdisplayonly.php">Shop</a></li>
            <li><a href="index.php">Profile</a></li>
        </ul>
    </nav>

    <div class="align">
        <div class="card">
            <div class="head">
                <div>
                </div>
                <a id="login" href="#login" action="forgetpassword.php" method="post" >Reset Your Password</a>
                <div></div>
            </div>
            <div class="tabs" action="forgetpassword.php" method="post">
                <form action="forgetpassword.php" method="post">
					<div class="inputs">
						<div class="input">
							<input placeholder="Username" type="text" name="namauser" required>
							<img src="img/user.svg">
						</div>
						<div class="input">
							<input placeholder="Email" type="email" name="emailuser" class="textInput" required>
							<img src="img/mail.svg">
						</div>
					</div>
					<button type="submit" name="forget_btn" value="Submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>