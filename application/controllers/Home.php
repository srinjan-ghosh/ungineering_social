<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    
    public function index(){
        $this->load->view('homepage');
    }
    
    public function dashboard(){
        $this->load->view('dashboard');
    }
    
    public function status_submit(){
        session_start();
        /*$hostname = "localhost";
        $username = "root";
        $db_password = "123456";
        $database = "social_media";*/

        $response = array();
       /* $conn = mysqli_connect($hostname, $username, $db_password, $database);
        if (!$conn) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }*/
        $user_id = $_SESSION['id'];
        $status = $_POST['status'];
        
       // $sql = "INSERT INTO status_updates (user_id, status) VALUES ( $user_id, '$status')";

        /*if (!mysqli_query($conn, $sql)) {
            $response['success'] = false;
            $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo json_encode($response);
            exit();
        }*/
        $this->load->model('status_update');
        $data = array(
            'user_id' => $user_id,
            'status' => $status
        );
         $this->status_update->insert_data($data);

        $response['success'] = true;
        $response['message'] = "Data Entry Successful";
        echo json_encode($response);
        //mysqli_close($conn);
    }
    
    public function dashboard_submit(){
        session_start();
        $hostname = "localhost";
        $username = "root";
        $db_password = "123456";
        $database = "social_media";

        $user_id = $_SESSION['id'];

        $conn = mysqli_connect($hostname, $username, $db_password, $database);
        if (!$conn) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }

        if ($_POST['college'] || $_POST['phone-number']) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $college = $_POST['college'];
            $phone = $_POST['phone-number'];
            $sql = "UPDATE users 
                SET name='$name', email='$email', password='$password', collage='$college', phone_number='$phone' 
                WHERE id='$user_id'";
            if (!mysqli_query($conn, $sql)) {
                $response['success'] = false;
                $response['message'] = "Error " . $sql . "<br>" . mysqli_error($conn);
                echo json_encode($response);
                exit();
            }
            $response['success'] = true;
            $response['name'] = $_POST['name'];
            $response['email'] = $_POST['email'];
            $response['password'] = $_POST['password'];
            $response['college'] = $_POST['college'];
            $response['phone_number'] = $_POST['phone-number'];

            echo json_encode($response);
            mysqli_close($conn);
        }
    }
}

