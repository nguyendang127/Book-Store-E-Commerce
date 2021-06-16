<?php 
    function total_price($cart){
        $total = 0;
        foreach($cart as $key => $value){
            $total += $value['prod_sub_price'];
        }
        return $total;
    }
?>