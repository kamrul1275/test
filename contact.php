
<?php

$dbconnect = mysqli_connect('localhost', 'root', '','pichtech');


if (isset($_POST['Registration'])){
  
$Fast=$_POST['FirstName'];
  $Last=$_POST['LastName'];
  $Email=$_POST['Email'];
  $Phone=$_POST['Phone'];
  $Message=$_POST['Message'];


if (!empty($Fast) && ($Last) &&( $Email) && ($Phone) && ($Message)){


$sql=mysqli_query($dbconnect, "INSERT INTO users (First_Name, Last_Name, Email, Phone, Message)
values ( '$Fast', '$Last', '$Email','$Phone','$Message')");

if ($sql) {
  # code...
  $sucsses ="Your Registration has been succesfully";
}


}else {
  $error = " Plase fill up the requied field";
}
}

?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="css/uikit.min.css">

    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    
<link rel="stylesheet" type="text/css" href="css/navbar-fixed.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" type="imgse/ x-con" href="img/kamrul/bluefinal.gif">

    <title>Piche Tech</title>
  </head>
  <body>






<!-- Start Top area -->

<div class="Top-area bg-dark text-light ">
  <div class="Container-fluid">
    <div class="row">
      <div class="col-lg-5">
       <div class="top-left">
          <p class="text-center  m-2"> <i class="fas fa-phone-volume" > </i>
            Call: 01981337121,01307450464 
             <a href="#" class="ml-2 text-light"><i class="fas fa-envelope-open-text " ></i>
         info.pichtech@gmail.com </a> </p>
       </div>
      </div>
      <div class="col-lg-4"></div>
      <div class="col-lg-3">
        <div class="top-right ">
         <div class="social-icon ">
        <ul> 
 <li><a href="https://www.facebook.com/PichTech2020/"><i class="fab fa-facebook-f"></i></a></li>
 <li><a href="https://www.youtube.com/channel/UCSNtLj4mkyb9aN0NtwaqHvg/featured"><i class="fab fa-youtube"></i></a></li>
 <li><a href=""><i class="fab fa-instagram"></i></a></li>
 <li><a href="https://mail.google.com/mail/u/1/#inbox"><i class="fab fa-google-plus-g"></i></a></li>
 <li><a href="https://www.linkedin.com/in/pichtech-limited-431b211a7/"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>


         </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Top area -->







<!-- Header area Start -->
 
 <div class="Header ">
  
<nav class="navbar navbar-expand-lg navbar-light  " uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up"   >
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.html">
      <img src="img/kamrul/bluefinal.gif" class="img-fluid w-50" > </a>

    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">home </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="about.php">about Us</a>
        
      </li> <li class="nav-item">
        <a class="nav-link" href="services.php">services</a>
      </li> 
     
        <a class="nav-link" href="blog.php">blog</a>
      </li> <li class="nav-item active">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
      
         </ul>
     </div>     
     </div>     
   </nav>
 
</div>



<!-- Header area End -->


<!-- abou us page  header Start -->


<div class="Contact-page-header ">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-4">
        <h2 class="text-light" >Contact us</h2>
       
      </div>
    </div>
  </div>
</div>


<!-- abou us page  header End -->




<!-- contact section start -->

<div class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h3 class="text-light bg-info py-2 text-center">Please fill out this form to contact us</h3>
            


<h3 class="text-success"> <?php  if (isset($sucsses)){
  echo $sucsses; }?> </h3>



 <h3 class="text-danger"> <?php   if (isset( $error)){
             echo $error;} ?> </h3>



            <div class="row mt-4">
     <form action="" method="POST">
       <div class="form-row text-center">
         <div class="col-md-6">
          <input type="text" class="form-control" placeholder="First name" required="Plase fill up this field" name="FirstName">
            </div>

    <div class="col-md-6">
      <input type="text" class="form-control"  placeholder="Last name" required="Plase fill up this field" name="LastName">
    </div>
      <div class="col-md-6">
      <input type="Email" class="form-control" placeholder="Email" required="Plase fill up this field" name="Email">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="Phone Number" required="Plase fill up this field" name="Phone">
    </div>

  <div class="col-md-12">
    <textarea cols="30" rows="7" class="form-control"  placeholder="Message" required="Plase fill up this field" name="Message"></textarea>

  </div>
  <div class="col-md-12">
    
     <button type="submit" class="btn btn-block btn-danger" name="Registration">Sent</button>
  </div>



  </div>
</form>
              </div>
           </div>
         </div>
       </div>



      <div class="col-md-4">
        <div class="card"4>
          <div class="card-body">
            <h4>Get In Touch</h4>
            <p class="para ">If you have a problem that you need solved, contact us using the form below to set up a meeting today. No problem is too big that it can’t be solved with a little bit of lateral thinking.</p>
            <h4>Address</h4>
            <p>Dhamrai, Dhaka</p>
            <h4>Email</h4>
            <p>info.pichtech@gmail.com</p>
            <h4>Phone</h4>
            <p>01981337121</p>
            <p>01307450464</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- contact section end -->


<!-- location -->


<div class="location-area py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6134.074097247464!2d90.21380659212987!3d23.91293081169287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755ef2e26644985%3A0x2d1f6903d1be0eb9!2sDhamrai!5e0!3m2!1sen!2sbd!4v1587976231410!5m2!1sen!2sbd" width="800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


      </div>
    </div>
  </div>
</div>


<!-- location -->





<!-- Footer Area Start -->

<div class="Footer-section bg bg-dark text-center py-3" >
  <div class="Container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-light">Pich Tech</h2>
        <p class="text-light text-center">Copyright &copy; 2020</p>
        <span class="text-light text-center">Designed by:<a class="ml-2" href="https://www.facebook.com/profile.php?id=100007120715015" target="_blank">Kamrul Hassan</a></span>

      </div>
    </div>
  </div>
</div>



<!-- Footer Area Start -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/custom.js"></script>
   <script type="text/javascript" src="js/navbar-fixed.js"></script>
   <script type="text/javascript" src="js/uikit.min.js"></script>
   <script type="text/javascript " src="js/uikit-icons.min.js"></script>


 <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>


  </body>
</html>