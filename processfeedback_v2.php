<?php 

  // create a short variable name
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $comments = trim($_POST['comments']);
  
  // define static informations
  $to = "comments@example.com";
  
  $subject = "Comments from website";
  
  $mailcontent = "User name : ".str_replace("\r\n", "", $name).
             "User email: ".str_replace("\r\n", "", $email).
             "User comments:\n".str_replace("\r\n", "", $comments);
             
  $from = "From webaster@example.com";
  
  // call mail() function to send an email
  mail($to, $subject, $mailcontent, $from);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>

    <h1>Comments submitted</h1>
    <p>Your comments has been sent.</p>
    <p><?php echo nl2br(htmlspecialchars($comments)); ?></p>
</body>
</html>
