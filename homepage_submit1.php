<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $db_password = "sayantan";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    if (isset($_SESSION['user_id'])){
        if($_POST['status']){
            $user_id=$_SESSION['user_id'];
            $email_fetch="SELECT email FROM users WHERE id='$user_id'";
            $result1 = mysqli_query($conn, $email_fetch);
            $row1=mysqli_fetch_array($result1)['email'];
            $id_fetch="SELECT id FROM users WHERE id='$user_id'";
            $result2 = mysqli_query($conn, $id_fetch);
            $row2=mysqli_fetch_array($result2)['id'];
            $status=$_POST['status'];
            $sql="INSERT INTO status_updates (user_id,email,status) VALUES ('$row2','$row1','$status')";
            mysqli_query($conn, $sql);
            if (!$result1){// $result is the pointer to the associative array representing of the 1st row 
                die(" Error: " . $sql . "<br>" . mysqli_error($conn));
            }
            header("Location:homepage_submit.php");
            exit;
    }
 } 
?>
