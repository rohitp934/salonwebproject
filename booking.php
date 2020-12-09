<!DOCTYPE html>
<?php
//error_reporting(0);
//login part
  session_start();
$host="localhost";
$user="root";
$password="";
$db="salonspa";


$con=mysqli_connect($host,$user,$password,$db);





if(isset($_GET['submit']))
{   
   $email=$_SESSION["email"];
   $package=$_GET['ac'];
  
   $dotravel=$_GET['dotravel'];
   $mode=$_GET['sel'];
   

     $query="INSERT INTO booking(email,package,dotravel,mode) VALUES('$email', '$package','$dotravel', '$mode');";
    
    $data=mysqli_query($con,$query);
     
    if($data)
    {
     echo "<script> alert('Regestration Successful'); window.location.assign('salon.html'); </script>"; 
        exit();
    }
      
    
   else
    {
      echo "<script>
alert('Booking failed');
  
</script>";
    }
  }
?>

<html>

<head>
   
 
    
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="booking.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Curlz</title>
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="pink darken-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="main.php">HOME</a>
            </li>
            <li>
              <a href="main.php">SEARCH</a>
            </li>
            <li>
              <a href="main.php">POPULAR PACKAGES</a>
            </li>
            <li>
              <a href="main.php">GALLERY</a>
            </li>
            <li>
              <a href="main.php">CONTACT</a>
            </li>
             <li>
                <a class="btn pink darken-4 z-depth-3 " href="logout.php">logout</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="main.php">HOME</a>
    </li>
    <li>
      <a href="main.php">SEARCH</a>
    </li>
    <li>
      <a href="main.php">POPULAR PACKGES</a>
    </li>
    <li>
      <a href="mainphpl">GALLERY</a>
    </li>
    <li>
      <a href="main.php">CONTACT</a>
    </li>
    <li>
     <a href="logout.php">LOGOUT</a>
    </li>   
  </ul>

    
    <!-- BOOKING FORM -->
    
   
   <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m4 l2">
          <img src="img/salon.jpg" height="700px" width="300px"/></div>
        <div class="col s12 m4 l8">
          <div class="card-panel pink lighten-5 ">
              <center><h5>SALON BOOKING</h5></center>
            
           <form action="#" method="GET">    
            <div class="input-field">
             <input type="text" id="autocomplete-input" class="autocomplete" name="ac" requipink>
               <label for="autocomplete-input">Package name:</label>
            </div><br>
            <div class="input-field">
               <label >Email</label> <input type="text" id="disabled" name="email"  value="<?php echo $_SESSION["email"]; ?> " disabled class="validate">
            </div>           
            <div class="input-field">       
               <label>Date </label><br><br> <input type="date" name="dotravel" required>
            </div>   
            <div>
            <p> <label>
                 <input class="with-gap text-red" type="radio"  name="sel" value="HOME SERVICE" >
                 <span>HOME SERVICE</span>
                </label>
            </p>
            <p> <label>
                 <input class="with-gap" type="radio"  name="sel" value="NEARBY CENTRE" >
                 <span>NEARBY CENTRE</span>
                </label>
            </p>  
           </div> 
             <center> <input type="submit" value="Submit" class="btn pink" name="submit"></center>
          </form>
        </div>
        </div>
          
      </div>
    </div>
  </section>
     
  <!-- Footer -->
    
  <footer class="section pink darken-2 white-text center">
      <p class="flow-text"><H4>CURLZ &copy; 2019    </H4></p>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    // Autocomplete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
      data: {
        "COLOR FLAUNT": null,
        "BASIC TOUCH": null,
        "STYLE LOCKS": null,
        "NIRVANA": null,       
      }
    });
    const aac =instance.selectOption(ac);
    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});


  </script>

    </body>
</html>