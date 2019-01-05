<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $db_password = "rupa";
    $database = "social_media";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $flag = 0;
    while ($row=mysqli_fetch_array($result)) {
        if($row['email']===$email&&$row['password']===$password){
           // echo "Hi" ." ". $row['name'] . " " ."Welcome in social_media Website";
            $_SESSION['id'] = $row['id'];
            ?>
           // <a href ="homepage.php"> click here to continue </a>
            <?php
            $flag++;
            break;
        }
        else if($row['email']===$email){
            echo "wrong password" . " ". "Enter correct password to login";
            $flag++;
        }        
    }
    if($flag===0){
        echo "not Register go to Registration_Page first ";
    }
        mysqli_close($conn);    	
?> 
    
