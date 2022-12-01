<?php
    session_start();
    if (isset($_SESSION['unique_id']) && isset($_SESSION['role'])) {
        $role = $_SESSION['role'];
        header('Location: ' . BASEURL . '/dashboard/'.$role);
    }
    class Signin extends Controller{
        public function __construct(){
            // echo "this is the signin controller";
        }

        public function dealer($error = null){
            $data = [];
            if($error != null){
                switch($error){
                    case '1':
                        $data['error'] = 'fill all the fields';
                        break;
                    case '2':
                        $data['error'] = 'too many login attempts, recommend reset your password';
                        break;
                    case '3':
                        $data['error'] = 'password missmatch';
                        break;
                    case '4':
                        $data['error'] = 'invalid email';
                        break;
                }
                
            }
            $this->view('signin/dealer', $data);
        }

        public function dealersignin(){
            session_start();
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(isEmpty(array($email, $password))){
                echo "fill all fields";
                $error = "1";
                header("Location: ./dealer/$error");
                return;
            }
            
            $result = $this->model('Dealer')->getDealer($email);
            
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row['cur_pwd'])){
                    if(isset($_SESSION['login_attempt'])){
                        $_SESSION['login_attempt'] = 0;
                    }
                    $dealer_id = $row['dealer_id'];
                    $_SESSION['unique_id'] = "$dealer_id";
                    $_SESSION['role'] = 'dealer';
                    header('Location: '.BASEURL.'/dashboard/dealer');
                }else{
                    if(!isset($_SESSION['login_attempt'])){
                        $_SESSION['login_attempt'] = 0;
                    }
                    $_SESSION['login_attempt'] += 1;
                    if($_SESSION['login_attempt'] > 5){
                        $error = "2";
                    }else{
                        $error = "3";
                    }
                    header("Location: ./dealer/$error");
                }
            }else{
                $error = "4";
                header("Location: ./dealer/$error");
            }

        }
    }
?>