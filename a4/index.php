<?php

require_once("tools.php");
 
    
    if (count($_POST) > 0) {
    if ($errorCounter == 0 && $ticketCounter > 0) {
        $_SESSION = $_POST;
        
       $now = date('d/m h:i');
        $total = "total";
            $cells = array_merge(
        [$now],
        $_SESSION['cust'],
        $_SESSION['seats'],
         [$total]
         );
        
        $fp = fopen("bookings.txt", "a");
        flock($fp, LOCK_EX);
        fputcsv($fp, $cells, "\t");
        flock($fp, LOCK_UN);
        fclose($fp);
        
        header('Location: https://titan.csit.rmit.edu.au/~s3707846/wp/a4/receipt.php');
        
        die();
        
    }
    }
   
?>


<script>  
      var today = new Date();
      function setMinDate() {
          document.getElementById('exp').min = today.getFullYear()+'-'+today.getMonth()+1;
      }
     </script>


<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='wireframe.js'></script>
      
  </head>

  <body onload="setMinDate()">

    <header>
      <div><img src='https://titan.csit.rmit.edu.au/~s3707846/media/logo.png' alt='cinema logo' class='center' width='200' height='200'/></div>
      <div> <h1>Lunardo</h1></div>    
    </header>

    <div id="navbar">
      
     <ul>
  
  <li><a href="#aboutus">About us</a></li>
  <li><a href="#prices">Prices</a></li>
  <li><a href="#nowshowing">Now Showing</a></li>
  <li><a href="#synopsis">Synopsis</a></li>
  <li><a href="#booking">Bookings</a></li>
</ul>   
           
      </div>

    <main>
     
    <section class="section" id="aboutus">
        
        <h1> ABOUT US </h1><br>
        
        
        
        <p> Lunardo is set for reopening after 2 years of extensive improvements and renovations. Lunardo is now featuring 10 traditional cinemas, Lunardo additionally have 5 completely luxury Gold Class theatres, so you can now experience the ultimate in film extravagance. Each Lunardo Gold Class cinema's features luxury reclining seats and state of the art technology and cutting edge film innovation, including super wide screens and advanced digital sound, conveying a dazzling true to life experience featuring 3D Dolby Vision projection and Dolby Atmos sound. Additionally, Lunardo Gold Class cinemas is proud to provide a full-administration bar, parlor and gourmet food with personal waiter service during each session. </p><br><br><br>
         

        <div class="aboutmecontainer">
  <h1>Standard Seats</h1>
  <div><img src='https://titan.csit.rmit.edu.au/~s3707846/media/standard-seat.png' alt='standardseat'/></div>
  <h1>Reclinable Seats</h1>  
  <div><img src='https://titan.csit.rmit.edu.au/~s3707846/media/recliner-seat.png' alt='reclinerseat'/></div>  
</div>
      
       
        </section>    
        
     <section class="section" id='prices'>
         
         <h1> PRICES </h1><br>
        
       <table style="width:60%" id='table'>
  <tr>
    <th>Seat Type</th>
    <th>Seat Code</th> 
    <th>All day Monday and Wednesday AND 12pm on Weekdays</th>
     <th>All other times</th> 
    
  </tr>
  <tr>
    <td>Standard Adult</td>
    <td>STA</td>
    <td>14.00</td>
    <td>19.80</td>
  </tr>
  <tr>
    <td>Standard Concession</td>
    <td>STP</td>
    <td>12.50</td>
    <td>17.50</td>
  </tr>
  <tr>
    <td>Standard Child</td>
    <td>STC</td>
    <td>11.00</td>
    <td>15.30</td>
  </tr>
   <tr>
    <td>First Class Adult</td>
    <td>FCA</td>
    <td>24.00</td>
    <td>30.00</td>
     <tr>
    <td>First Class Concession</td>
    <td>FCP</td>
    <td>22.50</td>
    <td>27.00</td>
  </tr>
   <tr>
    <td>First Class Child</td>
    <td>FCC</td>
    <td>21.00</td>
    <td>24.00</td>
  </tr>
         </table>
        </section>
         
         
    <section class="section" id="nowshowing">

      <h1> NOW SHOWING </h1><br><br><br>  
        
      <div class="flex-container">
  <div><img src='https://titan.csit.rmit.edu.au/~s3707846/media/avengers-endgame.png' alt='endgame poster'/>
            <p>Avengers: Endgame</p>
            <p>Rating: M</p>   
            <p>Monday-Tuesday: -</p> 
            <p>Wednesday-Friday: 9pm</p>
            <p>Saturday-Sunday: 6pm</p>
            <a href="#synopsis"><button onclick="avgbtn()" id="myButton">VIEW MOVIE</button></a>
    </div>
  <div><img src='https://titan.csit.rmit.edu.au/~s3707846/media/topend-wedding.png' alt='topend poster'/>
              <p>Top End Wedding</p>
              <p>Rating: M</p>  
              <p>Monday-Tuesday: 6pm</p>
              <p>Wednesday-Friday: -</p>
              <p>Saturday-Sunday: 3pm</p>  
              <a href="#synopsis"><button onclick="topweddingbtn()" id="myButton">VIEW MOVIE</button></a>
</div>
  <div> <img src='https://titan.csit.rmit.edu.au/~s3707846/media/dumbo.png' alt='dumbo poster'/>
            <p>Dumbo</p>
            <p>Rating: PG</p>   
            <p>Monday-Tuesday: 12pm</p>
            <p>Wednesday-Friday: 6pm</p>
            <p>Saturday-Sunday: 12pm</p>
            <a href="#synopsis"><button onclick="dumbobtn()" id="myButton">VIEW
                                        MOVIE</button></a>
</div>  
  <div><img src='https://titan.csit.rmit.edu.au/~s3707846/media/thehappyprince.png' alt='happyprince poster'/>
            <p>The Happy Prince</p>
            <p>Rating: R</p>
            <p>Monday-Tuesday: -</p>
            <p>Wednesday-Friday: 12pm</p>
            <p>Saturday-Sunday: 9pm</p>
            <a href="#synopsis"><button onclick="happyprincebtn()" id="myButton">VIEW MOVIE</button></a>
</div>  
        </div>   
     </section> 
        
    <section class="section" id="synopsis">
            <div>
                <h1 id="heading1"> DUMBO </h1> <br>
                <h1 class="heading1"> Plot Description </h1>
                <article id="txt">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Circus owner Max Medici (Danny DeVito) enlists former
                    star Holt Farrier (Colin Farrell) and his
                    children Milly (Nico Parker) and Joe (Finley Hobbins) to care for a newborn elephant whose oversized
                    ears make him a laughingstock in an already struggling circus. But when they discover that Dumbo can
                    fly, the circus makes an incredible comeback, attracting persuasive entrepreneur V.A. Vandevere
                    (Michael Keaton), who recruits the peculiar pachyderm for his newest, larger-than-life entertainment
                    venture, Dreamland. Dumbo soars to new heights alongside a charming and spectacular aerial artist,
                    Colette Marchant (Eva Green), until Holt learns that beneath its shiny veneer, Dreamland is full of
                    dark secrets.
                </article>
                <article class="t1">
                    You can check out the available time for this movie below. <br> Choose the time to book a ticket.
                </article>
            </div>
            <div style="background-color: black">
                <video id="moviePanelANM" src='https://titan.csit.rmit.edu.au/~s3668197/media/dumbo.mp4' controls width="100%" height="300px">Dumbo
                    Trailer</video>
            </div>
            <a href="#booking"><button id="b1" onclick="book1()">
                    MONDAY - 12PM (T12)
                </button></a>
            <a href="#booking"><button id="b2">
                    Tuesday - 12PM (T12)
                </button></a>
            <a href="#booking"><button id="b3">
                    WEDNESDAY - 6PM (T18)
                </button></a>
            <a href="#booking"><button id="b4">
                    THURSDAY - 6PM (T18)
                </button></a>
            <a href="#booking"><button id="b5">
                    FRIDAY - 6PM (T18)
                </button></a>
            <a href="#booking"><button id="b6">
                    0 : 00
                </button></a>
            <a href="#booking"><button id="b7">
                    0 : 00
                </button></a>
        </section>

   
   <section class="section" id="booking">

   <form action="https://titan.csit.rmit.edu.au/~s3707846/wp/a4/index.php" method="post" onsubmit="return checkingFunction();" autocomplete="off" novalidate>  
   
       
   <p>Movie Title - Day - Time</p><br><br> 
   
       
   Standard<br><br>
       
   <label>Adult</label>
   <select name="seats[STA]" id='seats-STA'>
       
  <option value="">Please Select</option>     
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
    
  </select><span><?php echo $standardAdultErr; ?> </span><br><br> 
   
   <label>Concession</label>
    <select name="seats[STP]" id='seats-STP'>   
       
    <option value="">Please Select</option>     
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option><br>   
       
  </select><span><?php echo $standardConcessionErr; ?> </span><br><br>     
        
    <label>Child</label>
    <select name="seats[STC]" id='seats-STC'>   
       
    <option value="">Please Select</option>     
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option><br>   
       
    </select><span><?php echo $standardChildErr; ?> </span><br><br><br>   
       
       
     First class<br><br>  
       
  <label>Adult</label>
   <select name="seats[FCA]" id='seats-FCA'>
       
  <option value="">Please Select</option>     
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
       
  </select><span><?php echo $firstClassAdultErr; ?> </span><br><br>     
       
   <label>Concession</label>
    <select name="seats[FCP]" id='seats-FCP'>   
       
    <option value="">Please Select</option>     
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option><br>   
       
    </select><span><?php echo $firstClassConcessionErr; ?> </span><br><br>     
       
    <label>Child</label>
    <select name="seats[FCC]" id='seats-FCC'>   
       
    <option value="">Please Select</option>     
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option><br>   
       
    </select><span><?php echo $firstClassChildErr; ?> </span><br><br><br>
             
       
   Personal details<br><br>    
       
    Name:<br> 
    <input type="text" name="cust[name]" pattern="^[a-zA-Z \-.']{1,100}$" value="<?php echo $name; ?>">
       <span><?php echo $nameErr; ?> </span>
       <br><br>
       
    Email:<br>
    <input type="text" name="cust[email]" value="<?php echo $email; ?>">                                         
          
       <span><?php echo $emailErr; ?> </span>
    <br><br>
       
    Mobile:<br>
    <input type="text" name="cust[mobile]" pattern="^(\(04\)|04|\+614)( ?\d){8}$" value="<?php echo $mobile; ?>">
 
       <span><?php echo $mobileErr; ?> </span>
       <br><br>  
    
    Credit Card:<br>
    <input type="text" name="cust[card]" pattern="^[0-9]{14,19}$">
       <span><?php echo $creditCardErr; ?> </span>
       <br><br> 
       
    Expiry:<br>
    <input type="month" id="exp" name="cust[expiry]" value="<?= $expiry ?>">
       
       <br><br> 

    <input type="submit" name="order" value="Order"><br><br>
           
   </form> 
       
      <?php preShow($_POST); ?>
      <?php preShow($_SESSION); ?>
       
   
        
   </section>
                
    </main>
      
      
               
<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
      </script>
      
  <script>    
      
 //function checkingFunction() {
     
     //var box = document.getElementById("exp");
     //if (box.value < today.getFullYear()+'-'+today.getMonth()+1) {
         //alert("Please enter a valid expiry date");
         //return false;
     //}
     
 //}
     
</script>   
      
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Aldin Dervisevic s3707846, Andy Heng s3668197 and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
<?php printMyCode(); ?>
  </body>
</html>