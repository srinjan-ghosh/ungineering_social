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
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="/social_media/css/homepage.css">
    </head>
    <body>   
        <div class="a">  
            <div class="a1">
                <img class="image" src="img/Social-Media-Graphic.jpg"/>
            </div>
            <div class="a2">
            <?php if(isset($_SESSION['user_id'])){ ?>
                    <a href="homepage.php"><button class="button1">Logout</button></a>
            <?php }
                  else{?>
                  <a href="registration_form.php"><button class="button1">New user</button></a>
            <?php } ?>   
            </div>
            <div class="a3">
               <?php if(isset($_SESSION['user_id'])){?>
                   <a href="dashboard.php"><button class="button2">My Dashboard</button></a>
                <?php }
                    else {?>
                      <a href="login_form.php"><button class="button2">Login</button></a>
               <?php }?>
            </div>
        </div>
        <?php if(isset($_SESSION['id'])){?>
             <div class= "d">
                <div class="d1">
                    <div class="d11">
                        <h2 class="style"> Write something here </h2 >
                    </div>
                    <div class="d12">
                        <div class="d12a">
                        </div>
                        <div class="d12b">
                           <form  class="submit_form" method="post" action="homepage_submit.php">
                           <input class ="d12d" type="text" name="status" >
                        </div>
                        <div class="d12c">
                        </div>
                    </div>
                    <div class="d13">
                           <input class="button3" type="submit" value="Submit"/>
                          </form>    
                    </div>
                </div>  
            </div>
       <?php } ?>
        <div class="b">
            <div class="c">
              <?php
                    $sql1= "SELECT * FROM status_updates ORDER BY date_time DESC";
                    $result = mysqli_query($conn, $sql1);
                    
                    while($row=mysqli_fetch_array($result)){
                        $user_id=$row['user_id'];
                            ?>
                            <p class= "c1"><strong><?php echo mysqli_fetch_array(mysqli_query($conn,"SELECT name FROM users WHERE id = $user_id" ))['name']?></strong><br><br>
                            <?php echo $row['status']?><br><br>
                            <strong><?php echo $row['date_time']?></strong></p>
                            
               <?php } ?>     
           </div>
       </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/homepage.js"></script>
   </body>
</html>
