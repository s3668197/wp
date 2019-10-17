<?php
  session_start();

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}

// Put your PHP functions and modules here

$name = $email = $mobile = $card = $expiry = "";
$nameErr = $emailErr = $mobileErr = $creditCardErr = $expiryErr = $standardAdultErr = $standardConcessionErr = $standardChildErr = $firstClassAdultErr = $firstClassConcessionErr = $firstClassChildErr = "";
    
 $errorCounter = 0;   
$standardAdult = $standardConcession = $standardChild = $firstClassAdult = $firstClassConcession = $firstClassChild = "";

if (!empty($_POST)) {
       
    
    
    $name = $_POST["cust"]["name"];
   if (preg_match("/^[a-zA-Z \-.']{1,100}$/",$name)) {
    $nameErr = "";  
   } else {
       $nameErr =' <span style="color:red">Please enter a name</span>';
       $errorCounter++;
   }  
    
    $email = $_POST["cust"]["email"];
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "";
       $email = "";
       
   }  else {
       $email = $_POST["cust"]["email"];
       $emailErr =' <span style="color:red">Please enter a valid email</span>';
       $errorCounter++;
       
   }
    
    $mobile = $_POST["cust"]["mobile"];
   if (preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/",$mobile)) {
     $mobileErr = "";
     $mobile = "";
         
   } else {
       $mobile = $_POST["cust"]["mobile"];
       $mobileErr =' <span style="color:red">Please enter a valid mobile</span>';
       $errorCounter++;
   } 
    
    $card = $_POST["cust"]["card"];
   if (preg_match("/^[0-9]{14,19}$/",$card)) {
     $creditCardErr = "";
   } else {
       $creditCardErr =' <span style="color:red">Please enter a valid credit card</span>';
       $errorCounter++;
   }
    
    
    $standardAdult = $_POST["seats"]["STA"];
    if (empty($_POST["seats"]["STA"])) {
        $standardAdultErr =' <span style="color:red">Please enter a valid number</span>';
        $errorCounter++;
    } else {
        $standardAdultErr = "";
    }
    
    $standardConcession = $_POST["seats"]["STP"];
    if (empty($_POST["seats"]["STP"])) {
        $standardConcessionErr =' <span style="color:red">Please enter a valid number</span>';
        $errorCounter++;
    } else {
        $standardConcessionErr = "";
    }
    
    $standardChild = $_POST["seats"]["STC"];
    if (empty($_POST["seats"]["STC"])) {
        $standardChildErr =' <span style="color:red">Please enter a valid number</span>';
        $errorCounter++;
    } else {
        $standardChildErr = "";
    }
    
    $firstClassAdult = $_POST["seats"]["FCA"];
    if (empty($_POST["seats"]["FCA"])) {
        $firstClassAdultErr =' <span style="color:red">Please enter a valid number</span>';
        $errorCounter++;
    } else {
        $firstClassAdultErr = "";
    }
    
    $firstClassConcession = $_POST["seats"]["FCP"];
    if (empty($_POST["seats"]["FCP"])) {
        $firstClassConcessionErr =' <span style="color:red">Please enter a valid number</span>';
        $errorCounter++;
    } else {
        $firstClassConcessionErr = "";
    }
    
    $firstClassChild = $_POST["seats"]["FCC"];
    if (empty($_POST["seats"]["FCC"])) {
        $firstClassChildErr =' <span style="color:red">Please enter a valid number</span>';
        $errorCounter++;
    } else {
        $firstClassChildErr = "";
    }
    
    
    
}
    

?>