<?php
if (isset($_POST['send_message_btn'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
    <title>New message from website contact form</title>
  </head>
  <body>
    <h1>" . $name . "</h1>
    <p>".$message."</p>
  </body>
  </html>";
  if (mail('brianmwrg@gmail.com', $name, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
?>