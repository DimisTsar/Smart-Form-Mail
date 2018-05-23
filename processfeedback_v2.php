?php 

  // create a sort variable name
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $feedback = trim($_POST['feedback']);
  
  // define static informations
  $toaddress = "feedback@example.com";
  
  $subject = "Feedback from website";
  
  $mailcontent = "Customer name : ".str_replace("\r\n", "", $name).
             "Customer email: ".str_replace("\r\n", "", $email).
             "Customer feedback:\n".str_replace("\r\n", "", $feedback);
             
  $fromaddress = "From webaster@example.com";
  
  // call mail() function to send an email
  mail($toaddress, $subject, $mailcontent, $fromaddress);
 
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

    <h1>Feedback submitted</h1>
    <p>You feedback (shown below) has been sent.</p>
    <p><?php echo nl2br(htmlspecialchars($feedback)); ?></p>
</body>
</html>
