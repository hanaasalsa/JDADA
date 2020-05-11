<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    </meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <style>
 *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    overflow-y: hidden;
}

body{
    font-family: Playfair Display;
    background-color: #193660;
}

nav{
    background: #ffffff;
    height: 65px;
    width: 100%;
}

label.logo{
    color: #193660;
    font-size: 24px;
    font-weight: bold;
    line-height: 65px;
    padding: 0 100px;
}

nav ul{
    float: right;
    margin-right: 20px;
}

nav ul li{
    display: inline-block;
    line-height: 65px;
    margin: 0 5px;
}

nav ul li a{
    color: #193660;
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 7px 13px;
    border-radius: 3px;
}

a.active, a:hover{
    background: #C4C4C4;
    transition: .5s;
}

.lingkaran{
    position: absolute;
    width: 916px;
    height: 916px;
    left: -150px;
    top: 180px;

    background: #0A2142; 
    border-radius: 100%; 
}

.lingkaran b{
    position: absolute;
    width: 351px;
    height: 368px;

    font-family: Playfair Display;
    font-style: normal;
    font-weight: bold;
    font-size: 90px;
    line-height: 150px;
    left: 360px;
    top: 50px;

    color: #FFFFFF;
}

.buy b{
    top: 200px;
    right: 95px;
    position: absolute;
    width: 412px;
    height: 249px;

    font-family: Playfair Display;
    font-style: normal;
    font-weight: bold;  
    font-size: 30px;
    line-height: 40px;

    color: #FFFFFF;
}



.boxlogin{
    position: absolute;
    right: 190px;
    top: 420px;

    background: #193660;
    border-radius: 3px;

    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 30px;
}

.boxlogin a{
    text-align: center;
    color: #ffffff;
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 7px 13px;
    border-radius: 3px;
}

.boxlogin a.active, a:hover{
    color: #0A2142;
}

    </style>
</head>
</head>
<body>
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="sell.html">Sell</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="customer/my_account.php">Profile</a></li>
        </ul>
    </nav>

    <div class="lingkaran">
        <b>JD -ADA</b>
    </div>

    <div class="buy">
        <b>
            BUY things from other. </br> SELL your unused things. </br>Save the world, and </br>Get your own profit.
        </b>
    </div>

    <div class=boxlogin>
        <a class="active" href="registerlogin.html">Log In</a>
    </div>
</body>
</html>