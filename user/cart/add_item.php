<?php
    include('../session.php');


    //$_SESSION['items] = [[id=>,qty=>],[],[]]
    //$item = ['id'=>'','qty'=>''];

    if(  isset($_POST['id'])  &&  isset($_POST['qty']) &&  isset($_POST['type'])  )  
    {
        $id = $_POST['id'];
        $qty = $_POST['qty'];
        $type = $_POST['type'];
        if(is_numeric($qty)  && is_numeric($id))
         {
             if(isset($_SESSION['items']))
             {
                    

                        foreach($_SESSION['items'] as $element){


                            if($element['id'] == $id && $element['type'] == $type){
               
                             $key = array_search($element, $_SESSION['items']); 
                             break;                             
                             
                            }                           
               
                        }
               

                        
                    if(isset($key)){

                        $_SESSION['items'][$key]['qty'] =   $_SESSION['items'][$key]['qty'] + 1;
                        echo " <script> location.replace('../equip.php');</script>";
                    }else{
                        $_SESSION['items'][]= ['id'=>$id,'qty'=>$qty,'type'=>$type];
                        echo " <script> location.replace('../equip.php');</script>";
                    }
                             
                 
                
                }
            else
                {
                   $_SESSION['items'] = array();
                  $_SESSION['items'][]= ['id'=>$id,'qty'=>$qty,'type'=>$type];
                  echo " <script> location.replace('../equip.php');</script>";


                 }

          }
    }
?>
    
