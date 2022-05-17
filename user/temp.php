<?php
    include('session.php');
    echo '<pre>';
print_r($_SESSION);
echo '</pre>';
$id = 2;
 $type = 'eq';


   foreach($_SESSION['items'] as $element){


    if($element['id'] == $id && $element['type'] == $type){

     $key = array_search($element, $_SESSION['items']); 
     break;                             
     
    }                           

}



if(isset($key)){
unset($_SESSION['items'][$key]);
echo 'key fonud';
}          else{
    echo 'key not';
}
?>