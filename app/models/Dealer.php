<?php

class Dealer extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getDealer($email){
        $result = $this->read('dealer', "email = '$email'");
        return $result;
    }

    public function setCapacity($dealer_id, $company_id, $product, $qty){
        $result = $this->insert('dealer_capacity',['dealer_id'=> $dealer_id,'company_id'=> $company_id,'product_id'=>$product,'capacity'=>$qty]);
        return $result;
    }

    public function getcurrentstock($dealer_id){
        // direct query since joins used
        $result = $this->Query("SELECT dealer_keep.quantity as quantity, product.name as name
        FROM dealer_keep INNER JOIN product 
        ON dealer_keep.product_id = product.product_id 
        WHERE dealer_id = '$dealer_id'");
        return $result;
    }
    
    public function getpendigorders($dealer_id){
        $orders = array();
        // $result = $this->read('reservation', "dealer_id = $dealer_id AND order_state = 'pending'");
        $sql = "SELECT r.order_id as order_id,r.customer_id as customer_id, CONCAT(c.first_name,' ',c.last_name) as customer_name 
                FROM reservation r
                INNER JOIN
                customer c
                ON r.customer_id = c.customer_id
                WHERE r.dealer_id = $dealer_id
                AND r.order_state = 'pending'";
        $result = $this->Query($sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $products = array();
                $order_id = $row['order_id'];
                // $result2 = $this->read('reservation_include',"order_id = $order_id");
                $sql = "SELECT r.quantity as qty,p.name as product_name
                        FROM reservation_include r
                        INNER JOIN
                        product p
                        ON r.product_id = p.product_id
                        WHERE r.order_id = $order_id";
                $result2 = $this->Query($sql);
                if(mysqli_num_rows($result2) > 0){
                    while($row2 = mysqli_fetch_assoc($result2)){
                        array_push($products, $row2);
                    }
                }
                array_push($orders, ['row' => $row, 'products' => $products]);
            }
        }

        return $orders;
    }
}