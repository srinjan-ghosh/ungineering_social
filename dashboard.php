<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("Location:login_form.php");
        exit;
    }
    $hostname = "localhost";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_id=$_SESSION['user_id'];

    $sql = "SELECT * FROM users WHERE id='$user_id'";

    $result =  mysqli_query($conn,$sql);

    $row= mysqli_fetch_array($result);
    
?>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/dashboard.css"/>
    </head>
    <body>
    <div class="header">
            <div id="logo">
                <!-- img here -->
                <img src="img/Social-Media-Graphic.jpg" alt="">
            </div>
            <div id="header-links">
                <!-- my dashboard
                logout button -->
                <p id= "dashboard"><strong>My Dashboard</strong></p>
                <a href="logout.php"><button id="logout-btn">Logout</button></a>
            </div>
        </div>
        <div class="body">
            <div class="account-details">
                <p id="form-tag"></p><h1 id="account-heading">My Account Details</h1>
                <form id= "update-form" class="form" method="post" action="dashboard.php">
                    <div id="form-field">
                        <p id="form-tag">Name</p><input type="text" id="name-field" name="name" value="<?php echo $row['name']?>"/>
                    </div>
                    <div id="form-field"> 
                        <p id="form-tag">Email</p><input type="email" name="email" value="<?php echo $row['email']?>"/>
                    </div>
                    <div id="form-field"> 
                        <p id="form-tag">Password</p><input type="password" name="password" value="<?php echo $row['password']?>"/>
                    </div>
                    <div id="form-field"> 
                        <p id="form-tag">College</p><input type="text" id="college" name="college" value="<?php echo $row['collage']?>"/>
                    </div>
                    <div id="form-field">
                        <p id="form-tag">Phone Number</p><input type="text" id="phn-no" name="phone-number" value="<?php echo $row['phone_number']?>"/>
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
                    $sql = "SELECT date_time,status FROM status_updates WHERE user_id = '$user_id'";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <p id="post-desc"><?php echo $row['date_time']?><br><br><?php echo $row['status']?></p>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="footer">
        </div>
    </body>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/dashboard.js"></script>
</html>
