<?php 
include ('editpasswordserver.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="css/shopbootstrap-337.min.css">
    <link rel="stylesheet" type="text/css" href="editprofil.css">
</head>
<body>
    <div class="header">
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sell</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Profile</a></li>
        }
        </ul>
    </nav>
    </div>

    <div class="formbox">
        <h1>Edit Profile</h1>
            <div class="input-fields">
                <form method = "post" action ="editpassword.php" enctype="multipart/form-data">
                <div class="items">
                    <div class="items">
                    <label for="loc" class="text-left">Username</label>
                    <input name = "username" id="loc" type="text" class="lokasi">
                </div>
                    <label for="name" class="text-left">Password</label>
                    <input name = "password" id="name" type="text" class="namabarang">
                </div>
                <div class="col text-center">
                    <button  name="editpass_btn" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
    </div>
</body>
</html>