<?php
    class Home extends Controller{
        public function __construct(){
            
        }

        public function index($error = null){
            $this->view('home/index');
        }

        public function about($error = null){
            if($error != null){
                $this->view('home/about',['error'=>$error]);
            }else{
                $this->view('home/about');
            }
        }

        public function aboutpost(){
            $key = $_POST['name'];
            if($key != 'key'){
                header("Location: ./about/$key");
            }else{

            }
        }
    }
?>