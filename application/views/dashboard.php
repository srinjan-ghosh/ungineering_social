<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="../../static/css/dashboard.css"/>
    </head>
    <body>
    <div class="header">
            <div id="logo">
                <!-- img here -->
                <a href="/social_media/index.php/home/"><img src="../../static/img/Social-Media-Graphic.jpg" alt=""></a>
            </div>
            <div id="header-links">
                <!-- my dashboard
                logout button -->
                <p id= "dashboard"><strong>My Dashboard</strong></p>
                <a href="/social_media/index.php/login/logout"><button id="logout-btn">Logout</button></a>
            </div>
        </div>
        <div class="body">
            <div class="account-details">
                <p id="form-tag"></p><h1 id="account-heading">My Account Details</h1>
                <form id= "update-form" class="form" method="post" action="/social_media/index.php/home/dashboard_submit">
                    <div id="form-field">
                        <p id="form-tag">Name</p><input type="text" id="name-field" name="name" value="<?php echo $user_data['name']?>"/>
                    </div>
                    <div id="form-field"> 
                        <p id="form-tag">Email</p><input type="email" name="email" value="<?php echo $user_data['email']?>"/>
                    </div>
                    <div id="form-field"> 
                        <p id="form-tag">Password</p><input type="password" name="password" value="<?php echo $user_data['password']?>"/>
                    </div>
                    <div id="form-field"> 
                        <p id="form-tag">College</p><input type="text" id="college" name="college" value="<?php echo $user_data['collage']?>"/>
                    </div>
                    <div id="form-field">
                        <p id="form-tag">Phone Number</p><input type="text" id="phn-no" name="phone-number" value="<?php echo $user_data['phone_number']?>"/>
                    </div>
                    <div>
                        <p id="form-tag"></p><input type="submit" name="submit" value="Update">
                    </div>
                </form>
                <p id="error"></p>
            </div>
            <div class="post">
                <h1 id="post-heading">My Post</h1>
                <?php
                    foreach($statuses as $status){
                        ?>
                        <p id="post-desc"><?php echo $status['date_time']?><br><br><?php echo $status['status']?></p>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="footer">
        </div>
    </body>
    <script src="../../static/js/jquery-3.3.1.min.js"></script>
    <script src="../../static/js/dashboard.js"></script>
</html>
