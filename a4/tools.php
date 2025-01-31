<?php
  session_start();

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}


// Put your PHP functions and modules here

$name = $email = $mobile = $card = $expiry = "";
$nameErr = $emailErr = $mobileErr = $creditCardErr = $expiryErr = $standardAdultErr = $standardConcessionErr = $standardChildErr = $firstClassAdultErr = $firstClassConcessionErr = $firstClassChildErr = "";
    
 $errorCounter = 0;
 $ticketCounter = 0;
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
    if ($_POST["seats"]["STA"] < 0 or $_POST["seats"]["STA"] > 10 or empty($_POST["seats"]["STA"])) {
        $standardAdultErr = ' <span style="color:red">Blank</span>';
    } else {
        $ticketCounter++;
    }
    
    $standardConcession = $_POST["seats"]["STP"];
    if ($_POST["seats"]["STP"] < 0 or $_POST["seats"]["STP"] > 10 or empty($_POST["seats"]["STP"])) {
        $standardConcessionErr =' <span style="color:red">Blank</span>';
        
    } else {
        $ticketCounter++;
    }
    
    $standardChild = $_POST["seats"]["STC"];
    if ($_POST["seats"]["STC"] < 0 or $_POST["seats"]["STC"] > 10 or empty($_POST["seats"]["STC"])) {
        $standardChildErr =' <span style="color:red">Blank</span>';
        
    } else {
        $ticketCounter++;
    }
    
    $firstClassAdult = $_POST["seats"]["FCA"];
    if ($_POST["seats"]["FCA"] < 0 or $_POST["seats"]["FCA"] > 10 or empty($_POST["seats"]["FCA"])) {
        $firstClassAdultErr =' <span style="color:red">Blank</span>';
        
    } else {
        $ticketCounter++;
    }
    
    $firstClassConcession = $_POST["seats"]["FCP"];
    if ($_POST["seats"]["FCP"] < 0 or $_POST["seats"]["FCP"] > 10 or empty($_POST["seats"]["FCP"])) {
        $firstClassConcessionErr =' <span style="color:red">Blank</span>';
        
    } else {
        $ticketCounter++;
    }
    
    $firstClassChild = $_POST["seats"]["FCC"];
    if ($_POST["seats"]["FCC"] < 0 or $_POST["seats"]["FCC"] > 10 or empty($_POST["seats"]["FCC"])) {
        $firstClassChildErr =' <span style="color:red">Blank</span>';
        
    } else {
        $ticketCounter++;
    }
    
    
    
}
    

?>