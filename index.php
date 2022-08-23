<?php
$sessionID=$_POST['sessionid'];
$severid =$_POST['serverid'];
 $phoneNumber=$_POST['phonenumebr'];
 $text=$_POST['text'];

 if ($text ==""){
    //  first request 

    $response ="CON what would you like to check \n";
     $response .= "1. Account number \n";
     $response .="2. Phone number \n";
 }elseif($text =='1'){
   $response ="CON choose account Information";
   $response .= "1. Account number \n";
   $response .="2. Account balance \n";
 }
 elseif($text =='2'){
    $response ="End your phone number is ".$phoneNumber;
  }
  elseif($text =="1*1"){
    $accountnumber= "ACC1001";
    $response ="End your account number is ".$accountnumber;
  }
  elseif($text =='1*2'){
    $balance= "K400";
    $response ="End your Balance is ".$balance;
  }

  $header('content-type;text/plain');
  echo $response;
  ?>