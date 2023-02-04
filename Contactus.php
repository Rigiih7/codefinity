<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/7298cde346.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body >
   <div>
  <h2></h2>
<div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(images/308283b731a64636c2a2e37ddfa73fca.jpg)">
  <div class="container">
            <div class="row">
                <div class="col" id="form_container">
                    <h2>Contact Us</h2> 
                    <p> Send your message below. We will get back to you at the earliest! </p>
                        <form role="form" method="post" action="send_script.php">
                        
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="message" > Message:</label>
                                <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" name="send_message_btn" class="btn btn-lg btn-default pull-right" >Send &rarr;</button>
                            </div>
                        </div>

                    </form>
                     <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
                <div class="col text-center">
                  <h3>Contact us today</h3>
                  <p>Do you need a website, a mobile application, a logo design or any graphic designs. Send a message or make a call to us today.</p>
          <img src="images/historia-do-call-center1-1024x683-1.jpg" class="img-fluid" alt="Responsive image">
        </div>
            </div>
        </div>
        </div>                        
<!-- /.container   -->
</div>
  
</div>

</div>
<footer class="page-footer bg-dark">
  <div class="bg-light">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        
        <div class="col-md-12 text-center">
          <a href="https://web.facebook.com/profile.php?id=100011713570213"><i class="fab fa-facebook text-primary fa-2x p-5"></i></a>
          <a href="#"><i class="fab fa-youtube-square text-danger fa-2x p-5"></i></a>
          <a href="https://twitter.com/brian_mwrg"><i class="fab fa-twitter-square text-primary fa-2x p-5"></i></a>
          <a href="https://www.instagram.com/_rigiih/"><i class="fab fa-instagram text-danger fa-2x p-5"></i></a>
          <a href="https://www.linkedin.com/in/brian-mwrg-8bb05b180/"><i class="fab fa-linkedin text-primary fa-2x p-5"></i></a>
          <a href="#"><i class="fab fa-github fa-2x p-5"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center text-md-left mt-5">
    <div class="row">
      
      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-white font-weight-bold">Rigiih Forever</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
        <p class="text-white">Do you need a website, a mobile application, a logo design or any graphic designs. Send a message or make a call to us today.</p>
      </div>

      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-white font-weight-bold">Services</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

        <ul class="list-unstyled">
          <li class="text-white">Software development Solutions</li>
          <li class="text-white">Tutoring</li>
        </ul>
      </div>
        <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-white font-weight-bold">Useful links</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

        <ul class="list-unstyled">  
          <li class="text-white"><a href="Contactus.php">Contact Us</a></li>
          <li class="text-white"><a href="applicationform.php">Apply</a></li>
          <li class="text-white"><a href="index.php">Home</a></li>
        </ul>
      </div>
          <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-white font-weight-bold">Contact</h6>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

        <ul class="list-unstyled">
          <li class="text-white"><i class="fas fa-home p-3"></i>Meru, Kenya</a></li>
          <li class="text-white"><i class="fas fa-envelope-square p-3"></i>brianmwrg@gmail.com</a></li>
          <li class="text-white"><i class="fas fa-phone p-3"></i>+254792223078</a></li>
          </ul>
      </div>
    </div>
   </div>

   <div class="footer-copyright text-center py-0">
    <p class="text-white">&copy;Copyright Brian Mwirigi 2021</p>
      <p class="text-white">Designed by Brian Mwirigi</p>
   </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>