<?php
    session_start();
    if (!isset($_SESSION['unique_id']) || !isset($_SESSION['role'])) {
        header('Location: ' . BASEURL . '/home');
    }
    class Dashboard extends Controller{
        public function __construct(){
            
        }

        public function dealer($error = null){
            $dealer_id = $_SESSION['unique_id'];
            // get the current stock
            $data['stock'] = $this->model('Dealer')->getcurrentstock($dealer_id);
            
            // get new pending orders
            $result1 = $this->model('Dealer')->getpendigorders($dealer_id);
            $data['pending'] = $result1; // multi dimensional array
            // result1 [
            //     [0] = [
            //         'row' => $row,
            //         'products' => [
            //                             [0] = product1,
            //                             [1] = product2,
            //                             [2] = product3,
            //                         ]
            //         ],
            //     [1] = [
            //         'row' => $row,
            //         'products' => [
            //                             [0] = product1,
            //                             [1] = product2,
            //                             [2] = product3,
            //                         ]
            //             ]
            // ]
            $this->view('dashboard/dealer', $data);
        }
    }
?>