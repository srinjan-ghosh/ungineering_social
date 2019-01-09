<html>
    <head>
        <link rel="stylesheet" href="css/login.css"/>
    </head>
    <body bgcolor="black">
        <div class ="main">
            <div class ="l1">
                <div class ="l11">
                    <img src="img/Social-Media-Graphic.jpg" alt=" logo" width = "250" height ="150">
                </div>
                <div class ="l12">
                    <h1>Existing User Log-In</h1>
                     <a href="registration_form.php">New User Create Account</a>
                </div>
            </div>
            <div class ="l2">
                <div class ="l21" style ="text-align :left;">
                    <h1>Log-In</h1><br/>
                </div>
                <div class="form">
                    <form method ="post" action = "login_submit.php" id="login_form" >
                        <font size ="5">
                            <div class ="box">
                                <div class ="box1"> 
                                    Email
                                </div>
                                <div class ="box2"> 
                                    <input type="text" name="email" class ="text" id="femail"/>
                                </div>
                            </div>
                            <div class ="box">
                                <div class="box1"> 
                                    Password
                                </div>
                                <div class="box2">
                                    <input type="password" name="password" class ="text" id="fpassword"/>
                                </div>
                            </div>
                            <div class ="box3">
                                <input type ="submit" name="log-in" value="log-in" class ="log" id ="submit"/>
                            </div>
                        </font>
                    </form>
                    <div class ="link">
                        <a href="registration_form.php">New User Create Account</a>
                    </div>
                </div>
            </div>
            <div class ="s">
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/login_script.js"></script> 
    </body>
</html>
