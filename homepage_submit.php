<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $db_password = "sayantan";
    $database = "ungineering";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);
    if (!$result) {// $result is the pointer to the associative array representing of the 1st row 
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $flag=0;
    while ($row=mysqli_fetch_array($result)) {//also points to the next array after fetching last one 
        if( $row['email'] == $email && $row['password'] == $password){
            $flag=1;
            echo 'Hi'.$row['name'];
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
            //setcookie ("id",$row['id'],3600,"/");
            //setcookie ("name",$row['name'],3600,"/"); 
            ?>
                <a href="dashboard.php" >Click Here To Continue </a>
                 
                    
                <!--<a href="dashboard.php? name=<?php echo $row['name']?>" >Click Here To Continue </a>
                <form action="dashboard.php" method="get">
                    <input type="hidden" value="<?php echo $row['name']?>" name="name"/>
                    <input type="submit" value="Click Here">
                </form>-->                                  <?php
        }
    }
    
    if($flag==0){
        echo "Login unsuccessful";
    }
    mysqli_close($conn);
?>

