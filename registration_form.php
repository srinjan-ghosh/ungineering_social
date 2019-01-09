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
                </div>
                    <font size ="5">
                    <div class ="form">
                        <form method="post" action="registration_submit.php" id="registration_form">
                            <div class ="box">
                                <div class ="box1">
                                    Name
                                </div>
                                <div class ="box2">
                                    <input type="text" name="name" class ="text" id="name"/>
                                </div>
                            </div>
                            <div class ="box">
                                <div class ="box1">
                                    Email
                                </div>
                                <div class ="box2">
                                    <input type="text" name="email" class ="text" id="email"/>
                                </div> 
                            </div>
                            <div class ="box">
                                <div class="box1">
                                    Password
                                </div>
                                <div class ="box2">
                                    <input type="password" name="password" class ="text" id="fpassword" />
                                </div>
                            </div>
                            <div class ="box">
                                <div class ="box1">
                                    Password
                                </div>
                                <div class ="box2">
                                    <input type="password" name="cpassword" class ="text" id = "cfpassword" />
                                </div>
                            </div>
                            <div class ="box3">
                                <input type ="submit" name="create account" value="Create Account" class ="log" id ="submit"/>
                            </div>
                        </font>
                        </form>
                    </div>
                    <div class ="link">
                        <a href="login_form.php">Exsting User Log-In</a>
                    </div>
                </div>
            <div class ="s">
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/registration_script.js"></script> 
    </body>
</html>
