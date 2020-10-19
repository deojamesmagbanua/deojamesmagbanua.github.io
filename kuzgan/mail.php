<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$position = $_POST['position'];
$service = $_POST['service'];
$companydescription = $_POST['companydescription'];
$projectdescription = $_POST['projectdescription'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Company: $company \n Position: $position \n Service: $service \n Company Description: $companydescription \n Project Description $projectdescription";
$recipient = "deojamesmagbanua@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your inquiry has been submitted. Thank You!" . " -" . "<a href='index.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
