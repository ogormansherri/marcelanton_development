<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: http://verdu103.github.io/marcelanton_development';
  $to = "sverduo@me.com"
  $subject = 'Website Design Information Email Inquiry'
  
  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
  ?>
  
  <?php
    if ($_POST['submit']){
      if (mail ($to, $subject, $body, $from)){
        echo '<p>Thank you for your email!</p>';
      } else {
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
      }
    }
    ?>
