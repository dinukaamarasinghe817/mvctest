<?php
    class Signout extends Controller{
        public function __construct(){
            
        }

        public function index(){
            session_start();
            if(isset($_SESSION['unique_id'])){
                unset($_SESSION['unique_id']);
            }
            if(isset($_SESSION['role'])){
                unset($_SESSION['role']);
            }
            header("Location: ../home");
            return;
        }
    }
?>