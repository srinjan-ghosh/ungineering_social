<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

    public function index() {
        $this->load->view('homepage');
    }

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['id'])) {
            header("Location:/social_media/index.php/home/");
            exit;
        }
        $this->load->model('user');
        $this->load->model('status_update');
        $data['user_data'] = $this->user->get_data_of_users($_SESSION['id']);
        $data['statuses'] = $this->status_update->get_statuses($data['user_data']['id']);
        $this->load->view('dashboard', $data);
    }

    public function status_submit() {
        $hostname = "localhost";
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

    public function dashboard_submit() {
        session_start();
        $user_id = $_SESSION['id'];
        
        if (!$this->load->model('user')) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }

        if ($_POST['college'] || $_POST['phone-number']) {
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['collage'] = $_POST['college'];
            $data['phone_number'] = $_POST['phone-number'];
            $result= $this->user->update_data_of_user($user_id,$data);
            if ($result!=1) {
                $response['success'] = false;
                $response['message'] = "Error in Updating Data";
                echo json_encode($response);
                exit();
            }else{
                $response['success'] = true;
                $response['name'] = $_POST['name'];
                $response['email'] = $_POST['email'];
                $response['password'] = $_POST['password'];
                $response['college'] = $_POST['college'];
                $response['phone_number'] = $_POST['phone-number'];

                echo json_encode($response);
            }
        }
    }
}
