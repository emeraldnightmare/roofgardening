<?php
    include('../session.php');


    //$_SESSION['items] = [[id=>,qty=>],[],[]]
    //$item = ['id'=>'','qty'=>''];

    if(  isset($_POST['data']) && isset($_POST['symbol']) )
   {   
       $data = json_decode($_POST['data'],true);
       $sym = $_POST['symbol'];
       if ($sym == '+')
       {
            $index = array_search($data , $_SESSION['items']);
            // if(empty($index)){
            //     echo 'index emty';
            // }
            // print_r($index);
            // print_r($data);
            $_SESSION['items'][$index]['qty']++;
            

       } 
         elseif($sym == '-')
       {
        $index = array_search($data , $_SESSION['items']);
        $_SESSION['items'][$index]['qty']--;


       }                 
                  
       ?>
        <script> location.replace('cart.php');</script>


       <?php

          
    }
?>
    
