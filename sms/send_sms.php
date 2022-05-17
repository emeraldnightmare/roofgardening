<?php

function sendsms($phone, $msg)
{

    $apikey = 'AAAAvF8kSTs:APA91bEEalTm7BDOlz6Px5fNW-yA3WGzLWT5QjZY4Jt430XEyLmg8MI6KPm7DrbBBbZrKjx-LCZYzYGdcq_NcAb5mn9tAxgt73jFh2prhTCLZOIC1JUXF-UxGqW8ii1x1hNWqxXPfyte	';
    $fcmUrl = 'https://fcm.googleapis.com/fcm/send';

// $msg = urlencode($msg);
    $extraNotificationData = array(
        'phone'=>$phone,
        'msg'=> $msg,
        'action'=>''
        );

    $fcmNotification = [
        'to'        => 'fF-zw28ecig:APA91bH37fqXNfOhRfOv-rCTREn9t6ufR8TPqy8j9Dh92tP-vm-_fd595f4N9Zj40nfOKMQ6TenExXa3_2Hvf4v0D07AMK9Tq_cfS6fJr2Ox-YHZ-WVR-ym1A6ZGXkN9vGx2A0eaHI5s', //single token
        'data' => $extraNotificationData,
    ];

    $headers = [
        'Authorization: key=' . $apikey,
        'Content-Type: application/json',
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $fcmUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
    $result = curl_exec($ch);
    curl_close($ch);

     $res =  json_decode($result);
     
     if($res->success == 1){

//           DEFINE('HOST', 'localhost');
// DEFINE('USER', 'u182278162_akkk');
// DEFINE('PASSWORD', '@Anu2240013');
// DEFINE('DB', 'u182278162_brok_21');

// $con = mysqli_connect(HOST, USER, PASSWORD, DB) or die('unable to connect DB');

//          $qery =  "INSERT INTO `sent_sms` (`date_time`, `our_id`, `m_to`, `content`,`success`,`contract_id`) VALUES (CURRENT_TIMESTAMP, NULL,$phone,'$msg',1,$contract_id)";
//           if(!mysqli_query($con, $qery)){
//               echo 'Error: '.$qery;
//           }
             return true;
     }else{
         return false;
     }
   
}













// function makecall($phone)
// {
//     $apikey = 'AAAAszNLglY:APA91bEQO3CMaKkCWpcapK3NGFulZBuGsKJd8JoHpmsO2M6Agw3PmPNFcINgKQAw6cmKAi2phfwqOcO7w2BI_pmHefvfIa6nCR5hrEs9nBr0QKzaKPO6fpCkSo7oTIHrqym9qkdi_5nS';

//     // $apikey = 'AAAAszNLglY:APA91bEQO3CMaKkCWpcapK3NGFulZBuGsKJd8JoHpmsO2M6Agw3PmPNFcINgKQAw6cmKAi2phfwqOcO7w2BI_pmHefvfIa6nCR5hrEs9nBr0QKzaKPO6fpCkSo7oTIHrqym9qkdi_5nS';
//     $fcmUrl = 'https://fcm.googleapis.com/fcm/send';

// // $msg = urlencode($msg);
//     $extraNotificationData = array(
//         'phone'=>$phone,
//         'msg'=> '',
//         'action'=>'calll'
//         );

//     $fcmNotification = [
//         'to'        => 'dlFadxiR4mI:APA91bHaxCD4BVo1WnxCqzKgDH2AVdsKh63iybP7B9n96a863poPiO5WzJLJ7fVBG78pjwhkXOAhmEpCmjXPgNPaYeBTh1VYvh1YkQ4HHOYK8hKCny3fZrEZxSVq2v_QakyYWiNRYlq1', //single token
//         'data' => $extraNotificationData,
//     ];

//     $headers = [
//         'Authorization: key=' . $apikey,
//         'Content-Type: application/json',
//     ];

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $fcmUrl);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
//     $result = curl_exec($ch);
//     curl_close($ch);

//      $res =  json_decode($result);
     
//      if($res->success == 1){
//              return true;
//      }else{
//          return false;
//      }
   
// }




// sendsms







// function sendwa($phone, $msg)
// {
//     $string = substr(strval($phone),-10);
// $string = '91' . $string;
// $phone = floatval($string);

//     $apikey = 'AAAApOiACWk:APA91bF95KuEejss2m0Ik0HCteh3du35pEcK3fhvQP4MMM_HLGkfzy24e9XQtUvzh3NbTEqhSeC5rEcAIsLmRl-m_CbUsQ-9smFoc-KjoRDZvKHdkZzmafOy0OHYa70bvtwhmDMTXaFP';
//     $fcmUrl = 'https://fcm.googleapis.com/fcm/send';

// // $msg = urlencode($msg);
//     $extraNotificationData = array(
//         'phone'=>$phone,
//         'msg'=> $msg,
//         'action'=>''
//         );

//     $fcmNotification = [
//         'to'        => 'fxaYf45G-9E:APA91bGNNKOfl6uOjnsYX-6-D5x8eCMMWwIo2Ug0TOUJtqxaJedSonjnpdWdfNpsahcidrtPYITuQUsJ6YU8t5_vqwp8z07W3skEHdrZ9Oe63NSDcW8fbAZsfLS9OzXcsUYVhOp80GLB', //single token
//         'data' => $extraNotificationData,
//     ];

//     $headers = [
//         'Authorization: key=' . $apikey,
//         'Content-Type: application/json',
//     ];

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $fcmUrl);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
//     $result = curl_exec($ch);
//     curl_close($ch);

//      $res =  json_decode($result);
     
//      if($res->success == 1){
//              return true;
//      }else{
//          return false;
//      }
// }
?>