<?php
    // session_start();
    // if(!isset($_SESSION['user_id'])){
    //     //goto login page;
    // }
    $hostname = "localhost";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_id = 1;

    if($_POST['college']){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $college=$_POST['college'];
        $phone=$_POST['phone-number'];
        $sql="UPDATE users 
                SET name='$name', email='$email', password='$password', collage='$college', phone_number='$phone' 
                WHERE id='$user_id'";
        if(!mysqli_query($conn, $sql)){
            die("Error: ". $sql . "<br/>". mysqli_error($conn));
        }
    }


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
    <div class="banner">
            <div id="logo">
                <!-- img here -->
                <img src="img/Social-Media-Graphic.jpg" alt="">
            </div>
            <div id="banner-links">
                <!-- my dashboard
                logout button -->
                <p id= "dashboard"><strong>My Dashboard</strong></p>
                <button id="logout-btn">Logout</button>
            </div>
        </div>
        <div class="body">
            <div class="account-details">
                <h1 id="account-heading">My Account Details</h1>
                <form class="form" method="post" action="dashboard.php">
                    Name<input type="text" id="name" name="name" value="<?php echo $row['name']?>"/><br/><br>
                    Email<input type="email" name="email" value="<?php echo $row['email']?>"/><br/><br>
                    Password<input type="password" name="password" value="<?php echo $row['password']?>"/><br/><br>
                    College<input type="text" id="college" name="college" value="<?php echo $row['collage']?>"/><br/><br>
                    Phone Number<input type="text" id="phn-no" name="phone-number" value="<?php echo $row['phone_number']?>"/><br/><br>
                    <input type="submit" name="submit" value="Update">
                </form>
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
</html>
