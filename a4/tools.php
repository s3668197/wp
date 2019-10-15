<?php
if ( empty( $_SESSION['cust'] || $_SESSION['movie'] || $_SESSION['seats'] )
header('Location: index.php');
?>  

<?php
$now = date('d/m h:i');
$total = // calculate the total serverside and format it to 2 decimal places
$cells = array_merge( 
  [ $now ], 
  $_SESSION['cust'],
  $_SESSION['movie'],
  $_SESSION['seats'],
  (array) $total 
);
?>
