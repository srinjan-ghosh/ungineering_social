<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $db_password = "";
    $database = "social_media";
    
    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    
    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $flag = 0;
    while ($row=mysqli_fetch_array($result)) {
        if($row['email']===$email&&$row['password']===$password){
            // echo "Hi" ." ". $row['name'] . " " ."Welcome in social_media Website";
            $_SESSION['id'] = $row['id'];
            $flag = 1;
            break;
        }
        elseif($row['email']===$email){
            //$response['success'] = false;
            //$response['message'] = "Password does't match";
            $flag = 3;
            break;
        }        
    }
   // echo $password;
    //if($email==""&&$password==""){
       // $response['success']=false;
        //$response['message']="field must be field";
       // $flag=3;
   // }
    //if($email==""){
       // $response['success']=false;
       // $response['message']="email field must be field";
        //$flag=3;
    //}
    //if($password==""){
       // $response['success']=false;
       // $response['message']="password field must be field";
        //$flag=3;
    //}
    if($flag===3){
        $response['success'] = false;
        $response['message']= "password does't match";
    }
    elseif($flag===0){
        $response['success'] = false;
        $response['message'] = "Login failed";
    } else {
        $response['success'] = true;
        $response['message'] = "login successfully";
    }

    echo json_encode($response);
    
    mysqli_close($conn);    	
?> 
    
