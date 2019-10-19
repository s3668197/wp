<?php

require_once("tools.php");

$receivedname = $_SESSION["cust"]["name"];
$receivedemail = $_SESSION["cust"]["email"];
$receivedmobile = $_SESSION["cust"]["mobile"];

$staQuantity = $_SESSION["seats"]["STA"];
$stpQuantity = $_SESSION["seats"]["STP"];
$stcQuantity = $_SESSION["seats"]["STC"];
$fcaQuantity = $_SESSION["seats"]["FCA"];
$fcpQuantity = $_SESSION["seats"]["FCP"];
$fccQuantity = $_SESSION["seats"]["FCC"];

$totalForStandardAdult = number_format((float)$staQuantity*14.00, 2, '.', '');
$totalForStandardConcession = number_format((float)$stpQuantity*12.50, 2, '.', '');
$totalForStandardChild = number_format((float)$stcQuantity*11.00, 2, '.', '');
$totalForFirstClassAdult = number_format((float)$fcaQuantity*24.00, 2, '.', '');
$totalForFirstClassConcession = number_format((float)$fcpQuantity*22.50, 2, '.', '');
$totalForFirstClassChild = number_format((float)$fccQuantity*21.00, 2, '.', '');
$subtotal = number_format((float)$totalForStandardAdult + $totalForStandardConcession + $totalForStandardChild + $totalForFirstClassAdult + $totalForFirstClassConcession + $totalForFirstClassChild, 2, '.', '');

$GST = number_format((float)$subtotal/11, 2, '.', '');
$TOTALPRICE = number_format((float)$subtotal+$GST, 2, '.', '');
?>

<html>
<body>
    
<h1>RECEIPT</h1><br>
    
<p>Lunardo</p>
<p>123 Batman Street</p>
<p>Melbourne,Victoria,3000</p>
<p>Contact: 0412 345 678</p> 
<p>Email: lunardocinemas@hotmail.com</p><br><br>


   
<h2>CUSTOMER DETAILS</h2><br>   
    
<p>Name: <?php echo $receivedname; ?> </p>
<p>Email: <?php echo $receivedemail; ?> </p>  
<p>Mobile: <?php echo $receivedmobile; ?> </p><br><br><br>
    
    
<style>
    table, th, td {
        border: 1px solid black;
    }    
       
</style>

<table style="width:90%">
  <tr>
    <th>Seat</th>
    <th>Quantity</th> 
    <th>Unit Price</th>
    <th>Total Price</th>
  </tr>
  <tr>
    <td>Standard Adult</td>
    <td><?php echo $staQuantity; ?></td>
    <td>$14.00</td>
    <td>$<?php echo $totalForStandardAdult; ?></td>
  </tr>
  <tr>
    <td>Standard Concession</td>
    <td><?php echo $stpQuantity; ?></td>
    <td>$12.50</td>
    <td>$<?php echo $totalForStandardConcession; ?></td>
  </tr>
  <tr>
    <td>Standard Child</td>
    <td><?php echo $stcQuantity; ?></td>
    <td>$11.00</td>
    <td>$<?php echo $totalForStandardChild; ?></td>
  </tr>
  <tr>
    <td>First Class Adult</td>
    <td><?php echo $fcaQuantity; ?></td>
    <td>$24.00</td>
    <td>$<?php echo $totalForFirstClassAdult; ?></td>
  </tr>
  <tr>
    <td>First Class Concession</td>
    <td><?php echo $fcpQuantity; ?></td>
    <td>$22.50</td>
    <td>$<?php echo $totalForFirstClassConcession; ?></td>
  </tr>
   <tr>
    <td>First Class Child</td>
    <td><?php echo $fccQuantity; ?></td>
    <td>$21.00</td>
    <td>$<?php echo $totalForFirstClassChild; ?></td>
  </tr>
    <tr>
    <td></td>
    <td></td>
    <td>SUBTOTAL:</td>
    <td>$<?php echo $subtotal; ?></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>GST:</td>
    <td>$<?php echo $GST; ?></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>TOTAL:</td>
    <td>$<?php echo $TOTALPRICE; ?></td>
    </tr>
  
</table>



</body>
</html>






