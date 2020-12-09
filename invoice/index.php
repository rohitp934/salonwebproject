<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CURLZ INVOICE</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../img/logod.png">
      </div>
      <div id="company">
        <h2 class="name">CURLZ UNISEX SPA AND SALON</h2>
        <div>Hesarghatta road, Chikkasandra<br>Jalahalli West, Bengaluru, Karnataka 560057</div>
        <div>76761 76761, 7676  76762</div>
        <div><a href="mailto:divij.nagendra@gmail.com">curlzuni@gmail.com</a></div>
        </div>
      
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?php
          echo  $_SESSION["fname"]; echo  " ",$_SESSION["lname"];  
       ?>  </h2>
          <div class="address"><?php
          echo  $_SESSION["addr1"]; 
       ?>,<br>
           <?php
          echo  $_SESSION["addr2"]; 
       ?>,<br>
           <?php
          echo  $_SESSION["city"]; 
       ?>,
           <?php
          echo  $_SESSION["state"]; 
       ?>&nbsp;-&nbsp;
           <?php
          echo  $_SESSION["pincode"]; 
       ?></div>
          <div class="email"><?php
          echo  $_SESSION["email"]; 
       ?> </div>
        </div>
        <div id="invoice">
          <h1>INVOICE 3-2-1</h1>
          <div class="date">Date of Invoice: <?php echo   date("d/m/Y") ;?></div>
          <div class="date"><?php echo date("l");?></div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="total">DESCRIPTION</th>
            <th class="desc">APPOINTMENT DATE</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">GST</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
            
            
            
            <?php
            
$host="localhost";
$user="root";
$password="";
$db="salonspa";
$gtot=0;
$esttot=0;

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_GET['del']))
{
    $id=$_GET['del'];
   
    if(mysqli_query($con,"delete from booking where id= '$id' "))
    {
        echo  "<script> alert('Booking Info Deleted!!');window.location.assign('profile.php'); </script>"; 
        
    }
}

       
        $run=mysqli_query($con,"select * from booking where email= '".$_SESSION["username"]."' ");
while($row=mysqli_fetch_array($run))
{   $r0=$row[0];
    $r1=$row[2];
    $r2=$row[3];
    $r3=$row[4];
    $_SESSION["ed"] = $row[0];
  $run1=mysqli_query($con,"select fares.cost from booking,fares where '$r1'=fares.package");
 while($row1=mysqli_fetch_array($run1))
 {
     $_SESSION["fare"]=$row1['cost'];
     
 }
    $_SESSION["est"]=$_SESSION["fare"]-((18/100)*$_SESSION["fare"]);
 $gtot=$gtot+$_SESSION["fare"];
    $gst=((18/100)*$_SESSION["fare"]);
  $est=$_SESSION["est"];
  $esttot=$esttot+$est;
    echo "<tr align='center'>
        <td class='total'>$r1</td>
        <td class='desc'>$r2</td>
        <td class='unit'>$est</td>
        <td class='qty'>$gst</td>
        <td class='total'>&#8377; {$_SESSION['fare']}.00</td>
          
       
    </tr>";}
?>
            
            
            
            

        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>&#8377;<?php echo $esttot;?></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 18%</td>
            <td>inclusive</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>&#8377;<?php echo $gtot;?>.00</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
      <br><br><br>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>