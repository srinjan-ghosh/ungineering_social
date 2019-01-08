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
        header("Location:dashboard.php");
        exit;
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
                <a href="dashboard_logout.php"><button id="logout-btn">Logout</button></a>
            </div>
        </div>
        <div class="body">
            <div class="account-details">
                <h1 id="account-heading">My Account Details</h1>
                <form class="form" method="post" action="dashboard.php">
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
            </div>
            <div class="post">
                <h1 id="post-heading">My Post</h1>
                <p id="post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia, quam non ornare varius, augue neque molestie dui, congue blandit lorem magna eu sapien. Pellentesque nisl massa, tempor vitae magna eu, blandit tristique libero. Vestibulum dolor neque, aliquam eget cursus vitae, vestibulum sed nisi. Phasellus aliquam condimentum justo et ultricies. Mauris semper, quam nec gravida rutrum, nunc tellus malesuada mauris, porttitor egestas dolor augue sodales ante. Sed maximus neque non laoreet ornare. Donec rutrum et elit sodales convallis.</p>
            </div>
        </div>
        <div class="footer">
        </div>
    </body>
</html>
