<?php
//model 1
//    $age=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

//model 2
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";
$age['Meimei']="28";

   header("Content-Type: application/json");
   echo json_encode($age);
