<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $db_password = "sayantan";
    $database = "social_media";

    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    $user_id=$_SESSION['id'];
    $status = $_POST['status'];
    $sql = "INSERT INTO status_updates (user_id, status) VALUES ( $user_id, '$status')";

    if (!mysqli_query($conn, $sql)) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }

    $response['success'] = true;
    $response['message'] = "Data Entry Successful";
    echo json_encode($response);
    mysqli_close($conn);
?>

