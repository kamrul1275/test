


<?php

$dbconnect = mysqli_connect('localhost', 'root', '','review');


if (isset($_POST['Registration'])){
  $Message=$_POST['Message'];


if (!empty ($Message)){


$sql=mysqli_query($dbconnect, "INSERT INTO users (Message)
values ('$Message')");

if ($sql) {
 
 $sucsses=" Has been succesfully";
}


}else {
  $error= " Plase fill up the requied field";
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
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
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
         info.pichtech@gmail.com</a> </p>
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
 <div class="Header">

  
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


      <li class="nav-item active">
        <a class="nav-link" href="about.php">about Us</a>
        
      </li> <li class="nav-item">
        <a class="nav-link" href="services.php">services</a>
      </li> 
     
        <a class="nav-link" href="blog.php">blog</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
      
         </ul>
     </div>     
     </div>     
   </nav>
 
</div>



<!-- Header area End -->





  <!--  ========================= About Area ==========================  -->

        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/about/about-us.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12  pt-5">
                      <h2 class="wow lightSpeedIn" data-wow-duration="3s">
                            <span>Let </span>
                            <span>introduce</span>
                            <span>ourself</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para"  >
                                We are pichetech.com we have lots of talented programmer , graphic designer , web designer, android programme for your it care. Our Pichetech member are very much friendly and more talented member are working toward. In this company every member are successful in their academic life and processional career. And all the member are fresher but all of us are more skillful then other. Here we can find more complexity.
                            </p>
                           
                        </div>
 <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area -->





<!-- what we do Strt -->

<div class="headerpage-info py-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6 align-self-center ">
				<h3 class="wow bounce" data-wow-duration="5s">What to We Do</h3>
				<p class=" lead ">

We create website ,logo, banner and android application which you want…. and we are very responsible to your choice . and we review this if website or log or banner or android application can not fill your choice.
</p>
			</div>
			<div class="col-md-6 text-center">
				<img src="img/photo gullery/aboutinfo.jpg" class="img-fluid rounded-circle" >
			</div>
		</div>
	</div>
</div>



<!-- what we do  End-->



<div class="headerpage-maddel py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        
            <h3 class=" ">Our Company</h3>
        <p class=" lead ">
We are a software development company from Perth and we are passionate about delivering strong, robust software solutions to our clients. We specialise in enterprise level systems that can solve many of the problems that businesses face as they grow and adapt to a changing marketplace.

Our team are highly skilled Perth based software developers who have long-term experience across a wide range of technologies and industries. Whether you need specific skills or ongoing support, we have the people to help you.
 
</p>

          
      </div>
      <div class="col-md-6 text-center">
        <img src="img/photo gullery/technology.gif" class="img-fluid " >
      </div>
    </div>
  </div>
</div>







 <!--  ======================== About Me Area ==============================  -->

        <div class="about-area">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="about-title">
                            <h1 class=" wow bounceInLeft "  data-wow-duration="4s">Client Say about me</h1>
                            <p class="para">
                       </p>


<div class="container carousel py-lg-5 ">
                <div class="owl-carousel owl-theme">
                    <div class="client row ">

                        <div class="col-lg-4  client-img">
                            <img src="img/clients/sharmin2.gif" alt="img1" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7  about-client ">
                            <h4 class="text-uppercase">Sharmin </h4>
                            <p class="para">Good job
                             I'm happy with the wonderful job you did.</p>
                        </div>
                        <div class="col-lg-1 py-4"></div>
                    </div>

                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/ahmed1.gif" alt="img2" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client ">
                            <h4 class="text-uppercase">Ahamed Shawki </h4>
                            <p class="para">Best wishes</p>
                        </div>
                         <div class="col-lg-1 col-md-12"></div>
                    </div>


                    
  <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/sajib1.gif" alt="img1" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Sajib</h4>
                            <p class="para">This website is very effective. I did my  business card design from here. I got my product in desired time.
                               .</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>

  <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/rakhy1.gif" alt="img1" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Rakhy </h4>
                            <p class="para">amazing!


                               .</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>




                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/tanvir.gif" alt="img2" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Tanvir</h4>
                            <p class="para">  Great Work.</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>

                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/lubna2.gif" alt="img1" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Lubna</h4>
                            <p class="para">Congratulations.</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>

                  

      <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/alamin1.gif" alt="img1" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Alamin</h4>
                            <p class="para">That’s a fantastic website.</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>


                 
                       <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/tamanna.gif" alt="img1" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Tamanna</h4>
                            <p class="para">Keep shining 
                               .</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>



      <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/mehedi1.gif" alt="img1" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Mehedi</h4>
                            <p class="para"> Great works . I really got quality works from them..</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>




                      

                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="img/clients/kaniz2.gif" alt="img2" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-7 col-md-12 about-client">
                            <h4 class="text-uppercase">Kaniz Fatema</h4>
                            <p class="para">Congratulations.</p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                    </div>

                        </div>
                    </div>
                </div>
            </div>
      </div>

        <!--  ======================== End About Me Area ==============================  -->




  




        <!--  ========================== Subscribe me Area ============================  -->
        <section class="subscribe-us-area py-4 mt-4">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12 text-center subscribe-title">
                        <h4 class="text-uppercase  wow bounceInRight "  data-wow-duration="5s">Get Your Commens anywhere</h4>
                      
                        <p class="para"> For now, we currently only allow users to give ratings and reviews without being able to see feedback from each other. We will keep you updated on the progress of this feature..</p>
                    </div>
                </div>
                               
<h3 class="text-success"> <?php  if (isset($sucsses)){
  echo $sucsses; }?> </h3>



 <h3 class="text-danger"> <?php   if (isset( $error)){
             echo $error;} ?> </h3>

 
<form action="" method="POST">
 <div class="col-md-12">
    <textarea cols="100" rows="7" class="form-control"  required="Plase fill up  this field" placeholder="Write...." name="Message" ></textarea>

  </div>
  <div class="col-md-12">
    
     <button type="submit" class="btn btn-block btn-info"   name="Registration">Sent</button>
  </div>



  </div>
</form>
      




                </div>
            </div>
        </section>
        <!--  ========================== End Subscribe me Area ============================  -->




<!-- Set up your HTML -->







<!-- meet our company member start -->

<div class="meet-member text-center py-2">
   <div class="container">
      <h2 class="text-center py-4 bg-warning" >CORE TEAM</h2>
        <div class="row">

          <div class="col-md-3">
            <div class="coreman "> </div>
             </div>

 
     <div class="col-md-6  text-center mt-4">
         <div class="coreman-icon ">
              <img src="img/post/ceo.jpg"  class="img-fluid w-50 rounded-circle" >
       
                  <h3 class="text-danger ">Kamrul Hassan</h3>     
  
          <strong><p class="text-info"  >Web Design & Developer</p></strong>
           <strong><h6>CEO</h6></strong> 
           <ul>	
            <li><a href="https://www.facebook.com/profile.php?id=100007120715015" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            
       <li>  <a href="https://www.linkedin.com/in/kamrul-hassan-1a996b1a6/" target="_blank">  <i class="fab fa-linkedin-in"></i></a></li>

           </ul>
         </div>
      </div>


      <div class="col-md-3">
         <div class="coreman-icon ">
         
      </div>
      </div>

      </div>
      </div>
      </div>



<!-- meet our company member End -->

<br>

<!-- meet our company member start -->

      <div class="meet-member text-center py-2">
          <div class="container">
             <div class="row">

        <div class="col-md-4">
            <div class="coreman-icon ">
              <img src="img/post/emon3.jpg" class="img-fluid w-50 rounded-circle">
               <h3 class="text-danger" >Emon Khondokar</h3>
                   <strong><p class="text-info">Lead Designer</p></strong>
                       <strong><h6>Head of Finance</h6></strong>
                  <ul> 
           <li><a href="https://www.facebook.com/minhazemon21/about?lst=100007120715015%3A100007419635547%3A1587575359" target="_blank">          <i class="fab fa-facebook-f"></i></a></li>
           <li><a href="https://l.facebook.com/l.php?u=http%3A%2F%2Flinkedin.com%2Fin%2Fminhaz21%3Ffbclid%3DIwAR238cLsxZnPC4jkorWhDM4rxlhVzR5qnVA-Sl6hZgslMuQnejSp3MKyPE4&h=AT2QjieYQ8syqXDlUt4RUntFUFw0hQ5cPQrBScKjvJWPshRrFuwcI8S0yUwos8bkjngBhp6em_Cyl2rGXJEf5UDaqcb3MjWr1XP2nKViDjfrbGMpomGs5DpmuSm3HB6UoCGVSA" target="_blank"><i class="fab fa-linkedin-in"></i>          </a></li>

             </ul>
              </div>
           </div>

 
<div class="col-md-4">
         <div class="coreman-icon ">
              <img src="img/post/CTO1.jpg" class="img-fluid w-50 rounded-circle">
        <h3 class="text-danger" >Redowan Pramanik</h3>
          <strong><p class="text-info">Domain & Hosting Management</p></strong>
           <strong><h6>Project Director</h6></strong>
        <ul> 
 <li><a href="https://www.facebook.com/profile.php?id=100008759567584" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
 <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fredowan-pramanik-981895189%2F%3Ffbclid%3DIwAR0bQ11gUueYE1pgYniVI1Lzx8UPOEb3H-xBN8YXvzI8dQkAUq9ybJlPSGc&h=AT0UWCFr5lDPXoJZ22gNZoQas19zTCW-AHT3gGWOwUInhQx2z4ypcwSz8VbFAoO3C26bbFLOLW4xIodAJceu8vI6ZDi2Oy-_uDjLYfmfxKLOwYeFRl6h7CDr6rNXPyssGPoe4g"><i class="fab fa-linkedin-in"></i></a></li>
 
        </ul>
         </div>

      </div>


      <div class="col-md-4">
         <div class="coreman-icon ">
              <img src="img/post/sabbir.jpg" class="img-fluid w-50 rounded-circle">
        <h3 class="text-danger" >Sabbir Talukder Utsa</h3>
          <strong><p class="text-info">Graphics Designer</p></strong>
           <strong><h6>Senior Project Manager</h6></strong>
        <ul> 
 <li><a href="https://www.facebook.com/utsatalukder.sabbir" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
 <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fmohibul-islam-sabbir-01b294194%2F%3Ffbclid%3DIwAR1YEVK3ym5bg9qUB5yA-euUb7v8RJcwrWsuqn374NJh2dev637LyuTgNvo&h=AT0UWCFr5lDPXoJZ22gNZoQas19zTCW-AHT3gGWOwUInhQx2z4ypcwSz8VbFAoO3C26bbFLOLW4xIodAJceu8vI6ZDi2Oy-_uDjLYfmfxKLOwYeFRl6h7CDr6rNXPyssGPoe4g"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
         </div>
      </div>
      
      </div>
      </div>
      </div>
      </div>



<!-- meet our company member End -->



 
<br>





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
   <script type="text/javascript" src="js/navbar-fixed.js"></script>
   <script type="text/javascript" src="js/uikit.min.js"></script>
   <script type="text/javascript " src="js/uikit-icons.min.js"></script>

  <script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

<script type="text/javascript">
  

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

</script>
   

  </body>
</html>