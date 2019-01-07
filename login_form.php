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
                    <form method ="post" action = "login_submit_try.php">
                    <font size ="5"> Email   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="email" class ="text" id="femail"/></br></br> 
                    Password &nbsp &nbsp &nbsp &nbsp<input type="password" name="password" class ="text" id="fpassword"/><br/><br/>
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type ="submit" name="log-in" value="log-in" class ="log" id ="submit"/></font></br></br></br>
                    </form>
                    <div class ="link">
                    <a href="registration_form.php">New User Create Account</a>
                    </div>
                </div>
            </div>
            <div class ="s">
            </div>
        </div>
        <script type="text/javascript" src="js/login_script.js"></script> 
    </body>
</html>
