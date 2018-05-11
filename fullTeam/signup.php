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

<body>

    <!-- Grid Start -->
    <div class="grid">
        <div class="section1">
            <img id="logoLogin" class="animated fadein" src="assets/images/logoLogin.png">
            <div id="containerReg" class="animated fadein">
                <form action="index.php" method="post" autocomplete="off">
                    <div class="top-row">
                        <input type="text" required autocomplete="off" placeholder="First Name" name='firstname' />
                        <input type="text" required autocomplete="off" placeholder="Last Name" name='lastname' />
                    </div>
                    <input type="email" required autocomplete="off" placeholder="Email" name='email' />
                    <input type="password" required autocomplete="off" placeholder="password" name='password' />
                    <button type="submit" class="button button-block" name="register" />Register</button>
                    <p id="newMember">Already have an account?<a href="index.php"><span id="underline" > Login Here </span></a>
            </div>
        </div>
    </div>
    <!-- Grid end -->



</body>

</html>