<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>FullTeam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/animate.min.css">
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

<body>
    <!-- Grid Start -->
    <div class="grid">
        <div class="section1">
            <img id="logoLogin" class="animated fadein" src="assets/images/logoLogin.png">

            <div id="container" class="animated fadein">
                <form action="index.php" method="post" autocomplete="off">
                    <input type="text" name="email" placeholder="USERNAME" required>
                    <input type="password" name="password" placeholder="PASSWORD" required>
                    <button class="button button-block" name="login" />Log In</button>
                </form>
                <p id="newMember">Not a memeber? Register <a href="signup.php"><span id="underline" >Here</span></a>
            </div>
        </div>
    </div>
    <!-- Grid end -->
    
  



</body>

</html>




