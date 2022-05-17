<?php
    include('../session.php');


    //$_SESSION['items] = [[id=>,qty=>],[],[]]
    //$item = ['id'=>'','qty'=>''];

    if(  isset($_POST['id'])  &&  isset($_POST['type'])  )  
    {
        $id = $_POST['id'];
        $type = $_POST['type'];
        if(is_numeric($id))
         {
            
                    
                        foreach($_SESSION['items'] as $element){


                            if($element['id'] == $id && $element['type'] == $type){
               
                             $key = array_search($element, $_SESSION['items']); 
                             break;                             
                             
                            }                           
               
                        }
               

                        
                    if(isset($key)){
                        unset($_SESSION['items'][$key]);
                        echo 'key fonud';
                    }         
                     else{
                        echo 'key not';     
                     }    
                 
                             
          

          }
    }
?>
    
