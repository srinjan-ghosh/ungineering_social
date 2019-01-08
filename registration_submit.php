<?php
    $hostname = "localhost";
    $username = "root";
    $db_password = "rupa";
    $db_name = "social_media";
    $conn = mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("connection failed : " . mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql1 = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql1);
    
    if(!$result){
         die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    
    if ($row=mysqli_fetch_array($result)) {
       
       if($row['email']==$email){
            echo "this email exist";
       }
    }
   
    else{
        $sql = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
        
        if(!mysqli_query($conn ,$sql)){
            die ("Error: ".$sql . "<br/>" .mysqli_error($conn));
        }
        ?>
         <html>
                <head>
                    <link rel="stylesheet" href="css/registration_submit_design.css"/>
                </head>
                <body style ="text-align:center;">
                    <div class = "welcome">
                        <div class="logo">
                             <!-- img here -->
                             <img src="img/Social-Media-Graphic.jpg" alt=" logo" width = "150" height ="100">
                        </div>
                        <div>
                            <h1>
                                Welcome To Social_media <?php echo $name; ?>
                            </h1>
                        </div>
                        <div class ="link">
                            <a href ="homepage.php"> click here to continue </a>
                        </div>
                    </div>
                </body> 
            </html>
        <?php
    }
    
    mysqli_close($conn);    
    
?>
