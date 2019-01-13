<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function index(){
        $this->load->view('login');
    }
    
    public function login_submit(){
        session_start();
        /* $hostname = "localhost";
          $username = "root";
          $db_password = "rupa";
          $database = "social_media"; */

        $response = array();
        /* $conn = mysqli_connect($hostname, $username, $db_password, $database);
          if (!$conn) {
          $response['success'] = false;
          $response['message'] = "Connection failed: " . mysqli_connect_error();
          echo json_encode($response);
          exit();
          } */

        // $sql = "SELECT * FROM users";

        /* $result = mysqli_query($conn, $sql);
          if (!$result) {
          $response['success'] = false;
          $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
          echo json_encode($response);
          exit();
          } */

        $email = $_POST['email'];
        $password = $_POST['password'];
        //echo $email;

        $flag = 0;
        /* while ($row = mysqli_fetch_array($result)) {
          if ($row['email'] === $email && $row['password'] === $password) {
          $_SESSION['id'] = $row['id'];
          $flag = 1;
          break;
          } elseif ($row['email'] === $email) {
          $flag = 3;
          break;
          }
          } */
        $this->load->model('user');
        $r = $this->user->get_data();
        foreach ($r as $row) {
            if ($row->email == $email && $row->password == $password) {
                $_SESSION['id'] = $row->id;
                $flag = 1;
                break;
            } elseif ($row->email == $email) {
                $flag = 3;
                break;
            }
        }
        if ($flag === 3) {
            $response['success'] = false;
            $response['message'] = "password does't match";
        } elseif ($flag === 0) {
            $response['success'] = false;
            $response['message'] = "Login failed";
        } else {
            $response['success'] = true;
            $response['message'] = "login successfully";
        }

        echo json_encode($response);

        //mysqli_close($conn);    
    }

    public function registration() {
        $this->load->view('registration');
    }

    public function registration_submit() {
        /* $hostname = "localhost";
          $username = "root";
          $db_password = "rupa";
          $database = "social_media" */;

        $response = array();
        /* $conn = mysqli_connect($hostname, $username, $db_password, $database);
          if (!$conn) {
          $response['success'] = false;
          $response['message'] = "Connection failed: " . mysqli_connect_error();
          echo json_encode($response);
          exit();
          } */

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->load->model('user');
        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password
        );
         $this->user->insert_data($data);
        /* $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
          if (!mysqli_query($conn, $sql)) {
          $response['success'] = false;
          $response['message'] = "this email exist ";
          echo json_encode($response);
          exit();
          } */

        $response['success'] = true;
        $response['message'] = "Registration successful";
        echo json_encode($response);
        // mysqli_close($conn);
    }

    public function logout() {
        $this->load->view('logout');
    }

}
