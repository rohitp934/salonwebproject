<!DOCTYPE html>
<?php
 

$host="localhost";
$user="root";
$password="";
$db="salonspa";
$con=mysqli_connect($host,$user,$password,$db);

  if($con)
{
    echo"";
}

 if(isset($_GET['submit']))
{   
   $name=$_GET['name'];
   $email=$_GET['email'];
   $mobile=$_GET['mobile'];
   $comments=$_GET['comments'];

     $query="INSERT INTO comments VALUES('$name', '$email','$mobile', '$comments');";
    
    $data=mysqli_query($con,$query);
     
    if($data)
    {
        
     echo "<script> alert('Thankyou $name !!'); window.location.assign('main.php'); </script>"; 
        exit();
    }
      
    
   else
    {
       echo "<script>
alert('error');
</script>";
    }
  }

?>





<html>

<head>
    


  <!-- Animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main1.css">
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
          <a href="#home" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
          <a href="#home" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="#home">HOME</a>
            </li>
            <!-- <li>
              <a href="#search">SEARCH</a>
            </li> -->
            <li>
              <a href="#popular">POPULAR PACKAGES</a>
            </li>
            <li>
              <a href="#gallery">GALLERY</a>
            </li>
            <li>
              <a href="#contact">CONTACT</a>
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
      <a href="#home">HOME</a>
    </li>
    <!-- <li>
      <a href="#search">SEARCH</a>
    </li> -->
    <li>
      <a href="#popular">POPULAR PACKGES</a>
    </li>
    <li>
      <a href="#gallery">GALLERY</a>
    </li>
    <li>
      <a href="#contact">CONTACT</a>
    </li>
     <li>
      <a href="logout.php">LOGOUT<?php 
          session_start(); ?></a>
    </li>
  </ul>

  <!-- Section: Slider -->
   
  <section class="slider"> <div class="col s12 m1">
    <ul class="slides">
      <li>
        <img src="img1/slider3.jpg">
        <!-- random image -->
        <div class="caption left-align">
          <h2>Once in a Lifetime Occasion</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">GET YOUR GLAMOUR FROM OUR EXPERTS</h5>
        </div>
      </li>
      <li>
        <img src="img1/slider2.jpg">
        <!-- random image -->
        
      </li>
      <li>
        <img src="img1/slider1.jpg">
        <!-- random image -->
        <div class="caption right-align">
          <h2>HEAVENLY SPA</h2>
          <h5 class="light white-text text-lighten-1 hide-on-small-only">REST...WE WILL RESTORE YOUR ENERGY!!</h5>
        </div>
      </li>
      </ul></div>
  </section>

  <!-- Section: Search -->
  <section id="search" class="section section-search pink darken-1 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center" >
         <a href="salon.html"> Our Packages</a></h4>
      </div>
    </div>
  </section>

  <!-- Section: Icon Boxes -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4" data-aos="zoom-in-right" data-aos-duration="2000">
          <a href="https://www.google.com/maps/search/beauty+parlour+near+me">
              <div class="card-panel" style="text-decoration:none; color:black;">
            <i class="material-icons large pink-text">room</i>
            <h4 style={z-index:1;}>OMNIPRESENT</h4>
            <p>Why travel far, <br>we have our experts<br> spread across..</p>
              </div></a>
        </div>
        <div class="col s12 m4" data-aos="zoom-in-up" data-aos-duration="2000">
          <div class="card-panel">
            <i class="material-icons large pink-text">store</i>
            <h4>HOME SERVICE</h4>
            <p>Why visit parlors,<br>Our experts<br>At your home.</p>
          </div>
        </div>
        <div class="col s12 m4" data-aos="zoom-in-left" data-aos-duration="2000">
          <div class="card-panel">
            <i class="material-icons large pink-text">brightness_high</i>
            <h4>BEAUTY ENHANCED</h4>
            <p>With over 10k<br>Happy Customers.<br>😊😊</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Popular Packages -->
  <section id="popular" class="section section-popular grey lighten-5 scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="pink-text">Popular</span> Packages</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/salon.jpg" alt="" height="310em">
                <span class="card-title"><h3>Salon</h3></span>
                 <a class="btn-floating halfway-fab waves-effect waves-light pink pulse" href="salon.html"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              You have to look in the mirror and do one of two things; love or hate who you see. So, be good to yourself - it's all the esteem you have. 
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/custspa.jpg" alt="" height="310em" >
                <span class="card-title"> <h3>Customized Packages</h3></span>
                <!-- <a class="btn-floating halfway-fab waves-effect waves-light pink" ><i class="material-icons">add</i></a> -->
            </div>
            <div class="card-content">
              
              Speacially customized packages for your requirement with a personalized massage, we believe that every special occasion is unique in it's own way.
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/amenity.png" alt="" height="332em" >
                <span class="card-title black-text"><h3></h3></span>
                <!-- <a class="btn-floating halfway-fab waves-effect waves-light pink"><i class="material-icons">add</i></a> -->
            </div>
            <div class="card-content">
              Ashburn's premier day spa, featuring a complete range of services for women and men. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    
  <!-- Section: Follow -->
  <section class="section section-follow pink darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow Curlz</h4>
          <p>Follow us on social media for special offers</p>
          <a href="#" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-pinterest fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
 
    
  <!-- Section: Gallery -->
  <section id="gallery" class="section section-gallery  scrollspy">
    <div class="container" style="overflow-x: hidden;" data-aos="fade-up" data-aos-duration="3000">
      <h4 class="center">
        <span class="pink-text">Photo</span> Gallery
      </h4>
         <div class="row">
        <div class="col s12 m3" >
          <img src="gal/1.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/2.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/3.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/4.jpg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 m3" >
          <img src="gal/5.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/6.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/7.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/8.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="gal/9.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/10.png" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/11.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/12.jpg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?beaches" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?traveling" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?bridge" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?beach, travel,boat" alt="" class="materialboxed responsive-img">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container" data-aos="fade-up"
     data-aos-anchor-placement="center-center" data-aos-duration="3000">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel pink white-text center">
            <i class="material-icons">email</i>
            <h4>Contact Us For Booking</h4>
              <h6>Manoharam, Get yourself customized with the new look.</h6><br>
                &#9742;:76761 76761
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Location</h4>
            </li>
            <li class="collection-item">Curlz Unisex Spa and Salon</li>
            <li class="collection-item">Hesarghatta road, Chikkasandra</li>
            <li class="collection-item">Jalahalli West, Bengaluru, Karnataka 560057</li>
            <li class="collection-item">Timings: 9:30a.m-7.00p.m</li>  
            <li class="collection-item">&#9742;          76761 76761, 7676  76762</li>
         </ul>
        </div>
          <form action="#" method="GET">
        <div class="col s12 m6" >
          <div class="card-panel grey lighten-3">
            <h5>Your Suggestions and Comments</h5>
            <div class="input-field">
              <input type="text" placeholder="Name" name="name">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Email" name="email">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone" name="mobile">
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Add Comments" name="comments"></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn" value="comments">
          </div>
        </div></form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="section pink darken-2 white-text center">
      <p class="flow-text"><H4>CURLZ &copy; 2019 </H4></p>
  </footer>
<!-- Fixed button -->
    <div class="fixed-action-btn">
       <a class="btn-floating btn-large pink" href="profile.php">
       <i class="large material-icons">person</i>
       </a>
        
    </div>
  <!--JavaScript at end of body for optimized loading-->
     <script src='https://code.jquery.com/jquery-3.3.1.min.js'> </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
 <!-- Javascript AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
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

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

    
     
  </script>

</body>

</html>