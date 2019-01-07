<html>
    <head>
        <link rel="stylesheet" href="css/registration_design.css"/>
    </head>
    <body bgcolor="black">
        <div class ="main">
            <div class ="l1">
                <div class ="l11">
                     <img src="img/Social-Media-Graphic.jpg" alt=" logo" width = "250" height ="150"> 
                </div>
                <div class ="l12">
                    <h1>New User Create Account</h1>
                     <a href="login_form.php">Exsting User Log-In</a>
                </div>
            </div>
            <div class ="l2">
                <div class ="l21" style ="text-align :left;">
                    <h1>Create Account</h1><br/>
                    <font size ="5">
                    <form method="post" action="registration_submit.php">
                    Name    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="name" class ="text" id="name"/></br></br>
                    Email   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="email" class ="text" id="email"/></br></br> 
                    Password &nbsp &nbsp &nbsp &nbsp<input type="password" name="password" class ="text" id="fpassword" /><br/><br/>
                    Password &nbsp &nbsp &nbsp &nbsp<input type="password" name="cpassword" class ="text" id = "cfpassword" /><br/><br/>
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type ="submit" name="create account" value="Create Account" class ="log" id ="submit"/></font></br></br></br>
                    </form>
                    <div class ="link">
                    <a href="login_form.php">Exsting User Log-In</a>
                    </div>
                </div>
            </div>
            <div class ="s">
            </div>
        </div>
        <script type="text/javascript" src="js/registration_script.js"></script> 
    </body>
</html>
