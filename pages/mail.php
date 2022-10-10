<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['cname'];
$message = $_POST['message'];
$msg = "
From: ".$fname." ".$lname."
Email: ".$email."
Company name : ".$subject."
Message :".$message."
";
mail("info@promida.net",$subject,$msg);
header( "Location: https://www.promida.net/pages/contact.php" );
?>
